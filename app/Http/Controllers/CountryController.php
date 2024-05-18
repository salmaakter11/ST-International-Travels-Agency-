<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CountryController extends Controller
{
    function list() {
        $data['pre_country'] = Country::orderBy('id', 'desc')->get();

        $data['active'] = count(Country::where('status', '1')->get());
        $data['inactive'] = count(Country::where('status', '!=', '1')->get());

        return view('dashboard.country.country_list')->with($data);

    }

    public function create()
    {

        return view('dashboard.country.create_country');

    }

    public function store(Request $request)
    {
        $request->validate([
            'country_name' => 'required|max:100',
        ]);
        $pre_country = new Country();

        $pre_country->country_name = $request->country_name;
        $pre_country->added_by = Auth::user()->id;
        $pre_country->updated_by = Auth::user()->id;
        $pre_country->status = ($request->status != '' ? '1' : '0');
        $pre_country->save();

        if ($pre_country) {
            return redirect()->route('admin.country_list')->with('success', 'Preferred Country added Successfully');
        } else {
            return redirect()->back()->with('error', 'Preferred Country added Failed');
        }
    }

    public function edit($id)
    {
        $pre_country = Country::find($id);
        return view('dashboard.country.create_country', compact('pre_country'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'country_name' => 'required|max:100',
        ]);
        $pre_country = Country::find($id);

        $pre_country->country_name = $request->country_name;
        $pre_country->updated_by = Auth::user()->id;
        $pre_country->status = ($request->status != '' ? '1' : '0');
        $pre_country->update();

        if ($pre_country) {
            return redirect()->route('admin.country_list')->with('success', 'Preferred Country Updated Successfully');
        } else {
            return redirect()->back()->with('error', 'Preferred Country Updated Failed');
        }
    }

    public function delete($id)
    {

        $count = User::where('country_id', $id)->count();
        $pre_country = Country::find($id);

        if ($count > 0) {
            return redirect()->back()->with('error', 'This Country Already use in another modeul');

        } else {
            $pre_country->delete();

            if ($pre_country) {
                return redirect()->route('admin.country_list')->with('success', 'Preferred Country Deleted Successfully');
            } else {
                return redirect()->back()->with('error', ' Preferred Country Deleted Failed');
            }
        }

    }
}
