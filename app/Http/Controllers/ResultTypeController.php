<?php

namespace App\Http\Controllers;

use App\Models\ResultType;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResultTypeController extends Controller
{
    function list() {
        $data['result_type'] = ResultType::orderBy('id', 'desc')->get();

        $data['active'] = count(ResultType::where('status', '1')->get());
        $data['inactive'] = count(ResultType::where('status', '!=', '1')->get());

        return view('dashboard.result.result_list')->with($data);

    }

    public function create()
    {

        return view('dashboard.result.create_result');

    }

    public function store(Request $request)
    {
        $request->validate([
            'result_type' => 'required|max:100',
        ]);
        $result_type = new ResultType();

        $result_type->result_type = $request->result_type;
        $result_type->added_by = Auth::user()->id;
        $result_type->updated_by = Auth::user()->id;
        $result_type->status = ($request->status != '' ? '1' : '0');
        $result_type->save();

        if ($result_type) {
            return redirect()->route('admin.result_list')->with('success', 'Result Type added Successfully');
        } else {
            return redirect()->back()->with('error', 'Result Type added Failed');
        }
    }

    public function edit($id)
    {
        $result_type = ResultType::find($id);
        return view('dashboard.result.create_result', compact('result_type'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'result_type' => 'required|max:100',
        ]);
        $result_type = ResultType::find($id);

        $result_type->result_type = $request->result_type;
        $result_type->updated_by = Auth::user()->id;
        $result_type->status = ($request->status != '' ? '1' : '0');
        $result_type->update();

        if ($result_type) {
            return redirect()->route('admin.result_list')->with('success', 'Result Type Updated Successfully');
        } else {
            return redirect()->back()->with('error', 'Result Type Updated Failed');
        }
    }

    public function delete($id)
    {
        $count1 = User::where('result_one', $id)->count();
        $count2 = User::where('result_two', $id)->count();
        $count3 = User::where('result_three', $id)->count();


        if ($count1 == 0 && $count2 == 0 && $count3 == 0) {
            $result_type = ResultType::find($id);
            $result_type->delete();

            if ($result_type) {
                return redirect()->route('admin.result_list')->with('success', 'Result Type Deleted Successfully');
            } else {
                return redirect()->back()->with('error', ' Result Type Deleted Failed');
            }

        } else {
            return redirect()->back()->with('error', 'This Already use in another modeul');
        }

    }
}
