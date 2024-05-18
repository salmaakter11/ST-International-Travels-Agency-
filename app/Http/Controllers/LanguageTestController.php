<?php

namespace App\Http\Controllers;

use App\Models\LanguageTest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LanguageTestController extends Controller
{
    function list() {
        $data['language'] = LanguageTest::orderBy('id', 'desc')->get();

        $data['active'] = count(LanguageTest::where('status', '1')->get());
        $data['inactive'] = count(LanguageTest::where('status', '!=', '1')->get());

        return view('dashboard.languagetest.language_list')->with($data);

    }

    public function create()
    {

        return view('dashboard.languagetest.create_language');

    }

    public function store(Request $request)
    {
        $request->validate([
            'language_test' => 'required|max:100',
        ]);
        $language = new LanguageTest();

        $language->language_test = $request->language_test;
        $language->added_by = Auth::user()->id;
        $language->updated_by = Auth::user()->id;
        $language->status = ($request->status != '' ? '1' : '0');
        $language->save();

        if ($language) {
            return redirect()->route('admin.language_list')->with('success', 'Language Test added Successfully');
        } else {
            return redirect()->back()->with('error', 'Language Test added Failed');
        }
    }

    public function edit($id)
    {
        $language = LanguageTest::find($id);
        return view('dashboard.languagetest.create_language', compact('language'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'language_test' => 'required|max:100',
        ]);
        $language = LanguageTest::find($id);

        $language->language_test = $request->language_test;
        $language->updated_by = Auth::user()->id;
        $language->status = ($request->status != '' ? '1' : '0');
        $language->update();

        if ($language) {
            return redirect()->route('admin.language_list')->with('success', 'Language Test Updated Successfully');
        } else {
            return redirect()->back()->with('error', 'Language Test Updated Failed');
        }
    }

    public function delete($id)
    {
        $count = User::where('language_id', $id)->count();
        $language = LanguageTest::find($id);

        if ($count > 0) {
            return redirect()->back()->with('error', 'This Already use in another modeul');

        } else {
            $language->delete();
            if ($language) {
                return redirect()->route('admin.language_list')->with('success', 'Language Test Deleted Successfully');
            } else {
                return redirect()->back()->with('error', ' Language Test Deleted Failed');
            }
        }
    }
}
