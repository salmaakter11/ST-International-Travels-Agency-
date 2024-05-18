<?php

namespace App\Http\Controllers\User_Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminProfileController extends Controller
{
    public function view($id){

      $profile_view = Auth::user();
      return view('dashboard.admin.profile_view',compact('profile_view'));
    }
    public function profile_print($id){

        $profile_info_print = Auth::user();
        $pdf = Pdf::loadView('dashboard.admin.profile_print',compact('profile_info_print'));
        return $pdf->stream('Your_information.pdf');
    }

    public function edit($id)
    {
        $profile_edit = Admin::find($id);
        return view('dashboard.admin.profile_edit',compact('profile_edit'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:1024',
        ]);
        $admin_data = Admin::find($id);
        $admin_data->name = $request->name;
        $admin_data->phone = $request->phone;

        $fileName = '';
        if ($request->file('image')) {
            if ($request->image_id != null || $request->image_id != '') {
                Storage::delete('public/admin_image/' . $request->image_id);
            }

            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/admin_image/', $fileName);
        } else {
            $fileName = $request->image_id;
        }
        $admin_data->image = $fileName;
        $admin_data->update();


        if ($admin_data) {
            return redirect()->back()->with('success', 'Update Successfully');
        } else {
            return redirect()->back()->with('error', 'Update Failed');
        }
    }
    public function change_password($id)
    {
        return view('dashboard.admin.change_password', compact('id'));
    }
    public function update_Password(Request $request, $id)
    {

        $this->validate(
            $request,
            [
                'old_password' => [
                    'required', function ($attribute, $value, $fail) {
                        if (!\Hash::check($value, Auth::user()->password)) {
                            return $fail(__('The current password is incorrect'));
                        }
                    },
                    'min:6',
                    'max:20',
                ],
                'new_password' => 'required|min:6|max:20',
                'confirm_new_password' => 'required|same:new_password',
            ]
        );
         $admin_user = Admin::find($id);
        $admin_user->password = Hash::make($request->new_password);
        $admin_user->update();

        if ($admin_user) {
            return redirect(route('admin.dashboard'))->with('success', 'Password Updated');
        } else {
            return redirect()->back()->with('fail', 'Password Updated Failed');
        }
    }
}
