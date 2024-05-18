<?php

namespace App\Http\Controllers\User_Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Invoice;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminManageController extends Controller
{
    public function admin_list()
    {
        $data['admin_list'] = Admin::orderBy('updated_at', 'desc')
        ->orderBy('id', 'desc')->get();

        $data['active'] = count(Admin::where('status', '1')->get());
        $data['inactive'] = count(Admin::where('status', '!=', '1')->get());

        return view('dashboard.manage_admin.list')->with($data);
    }
    public function create()
    {
        return view('dashboard.manage_admin.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins,email',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:1024',
            'password' => 'required|min:6|max:30',
        ],[
            'email.unique'=>'Email Must be unique'
        ]);

        $fileName = '';
        if ($request->file('image')) {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/admin_image/', $fileName);
        }

        $user_data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'image' => $fileName,
            'status' => isset($request->status) ? $request->status : 0,
            'password' => Hash::make($request->password),
        ];

        $user = Admin::create($user_data);

        if ($user) {
            return redirect()->route('admin.admin_list')->with('success', 'Registration Successfully');
        } else {
            return redirect()->back()->with('error', 'Registration Failed');
        }
    }


    public function edit($id){
        $edit_data = Admin::where('id',$id)->first();
        return view('dashboard.manage_admin.create',compact('edit_data'));

    }
    public function update(Request $request, $id){
        if($request->password){
            $request->validate([
                'name' => 'required',
                'password' => 'required|min:6|max:30',
            ]);
        }else{
            $request->validate([
                'name' => 'required',
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:1024',
            ]);
        }

        $admin_data = Admin::find($id);

        $admin_data->name = $request->name;
        $admin_data->phone = $request->phone;
        if($request->password){
            $admin_data->password  = Hash::make($request->password );
        }
        if ($request->admin_type != 5) {

            $admin_data->status = (isset($request->status) ? '1' : '0');
        }

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
            return redirect()->route('admin.admin_list')->with('success', 'Update Successfully');
        } else {
            return redirect()->back()->with('error', 'Update Failed');
        }

    }

    public function delete($id)
    {
        $count=Invoice::where('added_by',$id)->orWhere('updated_by',$id)->count();
        if($count>0){
            return redirect()->back()->with('error', 'This Already use in another modeul');
        }else{
        $admin_data = Admin::findOrFail($id);
        if (!is_null($admin_data)){
            Storage::delete('public/admin_image/' . $admin_data->image);
            $admin_data->delete();
        }

        if ($admin_data) {
            return redirect()->route('admin.admin_list')->with('success', 'Delete Successfully');
        } else {
            return redirect()->back()->with('error', 'Delete Failed');
        }
    }

}
}
