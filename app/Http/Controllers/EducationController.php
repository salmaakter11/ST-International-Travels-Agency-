<?php

namespace App\Http\Controllers;

use App\Models\EducationLevel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
{
    function list() {
        $data['education_level'] = EducationLevel::orderBy('id', 'desc')->get();

        $data['active'] = count(EducationLevel::where('status', '1')->get());
        $data['inactive'] = count(EducationLevel::where('status', '!=', '1')->get());

        return view('dashboard.education.education_list')->with($data);

    }

    public function create()
    {

        return view('dashboard.education.create_education');

    }

    public function store(Request $request)
    {
        $request->validate([
            'level_name' => 'required|max:100',
        ]);
        $education_level = new EducationLevel();

        $education_level->level_name = $request->level_name;
        $education_level->added_by = Auth::user()->id;
        $education_level->updated_by = Auth::user()->id;
        $education_level->status = ($request->status != '' ? '1' : '0');
        $education_level->save();

        if ($education_level) {
            return redirect()->route('admin.education_list')->with('success', 'Education Level added Successfully');
        } else {
            return redirect()->back()->with('error', 'Education Level added Failed');
        }
    }

    public function edit($id)
    {
        $education_level = EducationLevel::find($id);
        return view('dashboard.education.create_education', compact('education_level'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'level_name' => 'required|max:100',
        ]);
        $education_level = EducationLevel::find($id);

        $education_level->level_name = $request->level_name;
        $education_level->updated_by = Auth::user()->id;
        $education_level->status = ($request->status != '' ? '1' : '0');
        $education_level->update();

        if ($education_level) {
            return redirect()->route('admin.education_list')->with('success', 'Education Level Updated Successfully');
        } else {
            return redirect()->back()->with('error', 'Education Level Updated Failed');
        }
    }

    public function delete($id)
    {
        $count1 = User::where('educational_one', $id)->count();
        $count2 = User::where('educational_two', $id)->count();
        $count3 = User::where('educational_three', $id)->count();
        $education_level = EducationLevel::find($id);

        if ($count1 == 0 && $count2 == 0 && $count3 == 0) {
            $education_level->delete();
            if ($education_level) {
                return redirect()->route('admin.education_list')->with('success', 'Education Level Deleted Successfully');
            } else {
                return redirect()->back()->with('error', ' Education Level Deleted Failed');
            }
        } else {
            return redirect()->back()->with('error', 'This Already use in another modeul');
        }

    }
}
