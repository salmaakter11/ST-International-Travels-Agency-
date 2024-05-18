<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    function list() {
        $data['our_service'] = Service::orderBy('id', 'desc')->get();

        $data['active'] = count(Service::where('status', '1')->get());
        $data['inactive'] = count(Service::where('status', '!=', '1')->get());

        return view('dashboard.service.service_list')->with($data);

    }

    public function create()
    {

        return view('dashboard.service.create_service');

    }

    public function store(Request $request)
    {
        $request->validate([
            'service_name' => 'required|max:100',
            'amount' => 'required|max:100',
        ]);
        $our_service = new Service();

        $our_service->service_name = $request->service_name;
        $our_service->amount = $request->amount;

        $our_service->added_by = Auth::user()->id;
        $our_service->updated_by = Auth::user()->id;
        $our_service->status = ($request->status != '' ? '1' : '0');
        $our_service->save();

        if ($our_service) {
            return redirect()->route('admin.service_list')->with('success', 'Service added Successfully');
        } else {
            return redirect()->back()->with('error', 'Service added Failed');
        }
    }

    public function edit($id)
    {
        $our_service = Service::find($id);
        return view('dashboard.service.create_service', compact('our_service'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'service_name' => 'required|max:100',
            'amount' => 'required|max:100',
        ]);
        $our_service = Service::find($id);
        $our_service->service_name = $request->service_name;
        $our_service->amount = $request->amount;

        $our_service->updated_by = Auth::user()->id;
        $our_service->status = ($request->status != '' ? '1' : '0');
        $our_service->update();

        if ($our_service) {
            return redirect()->route('admin.service_list')->with('success', 'Service Updated Successfully');
        } else {
            return redirect()->back()->with('error', 'Service Updated Failed');
        }
    }

    public function delete($id)
    {

        $our_service = Service::find($id);
        $our_service->delete();

        if ($our_service) {
            return redirect()->route('admin.service_list')->with('success', 'Service Deleted Successfully');
        } else {
            return redirect()->back()->with('error', ' Service Deleted Failed');
        }
    }
}
