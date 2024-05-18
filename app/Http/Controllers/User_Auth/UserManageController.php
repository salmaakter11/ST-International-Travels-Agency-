<?php

namespace App\Http\Controllers\User_Auth;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\Service;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Country;
use App\Models\EducationLevel;
use App\Models\LanguageTest;
use App\Models\ResultType;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Barryvdh\DomPDF\Facade\Pdf;

class UserManageController extends Controller
{
    public function print($id){

        $client_print = User::with('country_data','edu_one','edu_two','edu_three','res_one','res_two','res_three','language_data')->find($id);
        $pdf = Pdf::loadView('dashboard.manage_user.user_pdf',compact('client_print'));
        return $pdf->stream('user_information.pdf');
    }

    public function list(Request $request)
    {
            if ($request->ajax()) {
                $user_data = DB::table('users')
                ->select('id','image','name','email','phone','status','created_at')
                     ->orderBy('updated_at', 'desc')
                     ->orderBy('id', 'desc');

                return DataTables::queryBuilder($user_data)
                    ->addIndexColumn()
                    ->addColumn('action', function ($data) {
                        $route_data['user_view'] = route('admin.user_view', $data->id);
                        $route_data['user_apply_service'] = route('admin.user_apply_service', $data->id);
                        $route_data['editUrl'] = route('admin.user_edit', $data->id);
                        $route_data['deleteUrl'] = route('admin.user_delete', $data->id);
                        return $route_data;
                    })
                    ->rawColumns(['action'])
                    ->toJson();
            }

        $data['active'] = count(User::where('status', '1')->get());
        $data['inactive'] = count(User::where('status', '!=', '1')->get());

        return view('dashboard.manage_user.list')->with($data);
    }


    public function view($id){
        // return $id;
         $user_info = User::with('country_data','edu_one','edu_two','edu_three','res_one','res_two','res_three','language_data')->find($id);

        return view('dashboard.manage_user.user_view',compact('user_info'));

    }
    public function apply_service($id){

        $users = User::find($id);

        $service =Service::where('status',1)->get();
        return response()->json(['success' => 'Modal Open Success', 'id' => $id, 'service' => $service,'users'=> $users]);

    }


    public function apply_service_store(Request $request){
        $request->validate([
            'service' => 'required'
        ]);

        $service =Service::find($request->service);

        $invoice= new Invoice();
        $invoice->client_id = $request->client_id;
        $invoice->service_id =$service->id;
        $invoice->service_name =$service->service_name;
        $invoice->service_price =$service->amount;
        $invoice->added_by = Auth::user()->id;
        $invoice->updated_by = Auth::user()->id;
        $invoice->save();

        if( $invoice){

            return response()->json(['message' => 'Save Successfully']);
        }
    }

    public function create()
    {
        $data['country'] = Country::where('status', '1')->get();
        $data['education'] = EducationLevel::where('status', '1')->get();
        $data['language'] = LanguageTest::where('status', '1')->get();
        $data['result'] = ResultType::where('status', '1')->get();

        return view('dashboard.manage_user.create')->with($data);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'phone' => 'required|min:11|max:16',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|max:30',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:1024',
            'dob' => 'required|max:100',
            'gender' => 'required',
            'marital_status' => 'required',
            'religion' => 'required',
            'address' => 'required|max:100',
            'country_id' => 'required',
            'educational_one' => 'required|max:100',
            'institute_one' => 'required|max:100',
            'department_one' => 'required|max:100',
            'passing_year_one' => 'required|max:100',
            'grade_one' => 'required|max:100',
            'result_one' => 'required',
            'language_id' => 'required',
            'score' => 'required|max:100',
            'test_date' => 'required|max:100',


        ], [
            'email.unique' => 'Email Must be unique',
            'country_id.required' => 'Preferred Country is required.',
            'educational_one.required' => 'Educational Level is required.',
            'institute_one.required' => 'Board/University/Institute is required.',
            'department_one.required' => 'Department field is required.',
            'passing_year_one.required' => 'Passing Year is required.',
            'grade_one.required' => 'Result(Grade/Division) is required.',
            'result_one.required' => 'Result Type is required.',
            'language_id.required' => 'Language Test is required.',

        ]);

        $filename = '';
        if (isset($request->image)) {
            $filename = time() . '.' . $request->file('image')->getClientOriginalExtension();
            Storage::putFileAs('public/user', $request->file('image'), $filename);
        }

        $filename_thum = null;
        if (isset($request->image)) {
            $image = $request->file('image');
            $filename_thum = time() . '.' . $request->file('image')->getClientOriginalExtension();
            Storage::putFileAs('public/image_thum', $request->file('image'), $filename_thum);
            $destinationPath = storage_path('app/public/image_thum');
            $img = Image::make($image->path());
            $img->resize(100, 100)->save($destinationPath . '/' . $filename_thum);
        }

        $user_data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'image' => $filename,
            'thum_image' => $filename_thum,
            'status' => isset($request->status) ? $request->status : 0,
            'password' => Hash::make($request->password),
            'dob' => $request->dob,
            'gender' => $request->gender,
            'marital_status' => $request->marital_status,
            'religion' => $request->religion,
            'address' => $request->address,
            'country_id' => $request->country_id,
            'educational_one' => $request->educational_one,
            'educational_two' => $request->educational_two,
            'educational_three' => $request->educational_three,
            'institute_one' => $request->institute_one,
            'institute_two' => $request->institute_two,
            'institute_three' => $request->institute_three,
            'department_one' => $request->department_one,
            'department_two' => $request->department_two,
            'department_three' => $request->department_three,
            'passing_year_one' => $request->passing_year_one,
            'passing_year_two' => $request->passing_year_two,
            'passing_year_three' => $request->passing_year_three,
            'grade_one' => $request->grade_one,
            'grade_two'=> $request->grade_two,
            'grade_three'=> $request->grade_three,
            'result_one' => $request->result_one,
            'result_two' => $request->result_two,
            'result_three' => $request->result_three,
            'language_id' => $request->language_id,
            'score' => $request->score,
            'test_date' => $request->test_date,

        ];

        $user = User::create($user_data);

        if ($user) {
            return redirect()->route('admin.user_list')->with('success', 'Registration Successfully');
        } else {
            return redirect()->back()->with('error', 'Registration Failed');
        }
    }


    public function edit($id)
    {
        $data['country'] = Country::where('status', '1')->get();
        $data['education'] = EducationLevel::where('status', '1')->get();
        $data['language'] = LanguageTest::where('status', '1')->get();
        $data['result'] = ResultType::where('status', '1')->get();
        $data['edit_data'] = User::where('id', $id)->first();

        return view('dashboard.manage_user.create')->with($data);
    }
    public function update(Request $request, $id)
    {
        if ($request->password) {
            $request->validate([
                'name' => 'required',
                'password' => 'required|min:6|max:30',
            ]);

        } else {
            $request->validate([
                'name' => 'required|max:100',
                'phone' => 'required|min:11|max:16',
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:1024',
                'dob' => 'required|max:100',
                'gender' => 'required',
                'marital_status' => 'required',
                'religion' => 'required',
                'address' => 'required|max:100',
                'country_id' => 'required',
                'educational_one' => 'required|max:100',
                'institute_one' => 'required|max:100',
                'department_one' => 'required|max:100',
                'passing_year_one' => 'required|max:100',
                'grade_one' => 'required|max:100',
                'result_one' => 'required',
                'language_id' => 'required',
                'score' => 'required|max:100',
                'test_date' => 'required|max:100',


            ], [
                'country_id.required' => 'Preferred Country is required.',
                'educational_one.required' => 'Educational Level is required.',
                'institute_one.required' => 'Board/University/Institute is required.',
                'department_one.required' => 'Department field is required.',
                'passing_year_one.required' => 'Passing Year is required.',
                'grade_one.required' => 'Result(Grade/Division) is required.',
                'result_one.required' => 'Result Type is required.',
                'language_id.required' => 'Language Test is required.',
            ]);
        }

        $user_data = User::find($id);

        // admin normal image start
        if ($request->file('image')) {
            if ($request->image_id != null || $request->image_id != '') {
                Storage::delete('public/user/' . $request->image_id);
            }

            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/user/', $filename);
        } else {
            $filename = $request->image_id;
        }
        $user_data->image = $filename;
        // admin normal image end

        // admin thum image start
        if ($request->file('image')) {
            if ($request->thum_id != null || $request->thum_id != '') {
                Storage::delete('public/image_thum/' . $request->thum_id);
            }

            $image = $request->file('image');
            $filename_thum = time() . '.' . $request->file('image')->getClientOriginalExtension();
            Storage::putFileAs('public/image_thum', $request->file('image'), $filename_thum);
            $destinationPath = storage_path('app/public/image_thum');
            $img = Image::make($image->path());
            $img->resize(100, 100)->save($destinationPath . '/' . $filename_thum);
        } else {
            $filename_thum = $request->thum_id;
        }
        $user_data->thum_image = $filename_thum;
        // admin thum image end

        $user_data->name = $request->name;
        $user_data->phone = $request->phone;
        $user_data->dob = $request->dob;
        $user_data->gender = $request->gender;
        $user_data->marital_status = $request->marital_status;
        $user_data->religion = $request->religion;
        $user_data->address = $request->address;
        $user_data->country_id = $request->country_id;
        $user_data->educational_one = $request->educational_one;
        $user_data->educational_two = $request->educational_two;
        $user_data->educational_three = $request->educational_three;
        $user_data->institute_one = $request->institute_one;
        $user_data->institute_two = $request->institute_two;
        $user_data->institute_three = $request->institute_three;
        $user_data->department_one = $request->department_one;
        $user_data->department_two = $request->department_two;
        $user_data->department_three = $request->department_three;
        $user_data->passing_year_one = $request->passing_year_one;
        $user_data->passing_year_two = $request->passing_year_two;
        $user_data->passing_year_three = $request->passing_year_three;
        $user_data->grade_one = $request->grade_one;
        $user_data->grade_two = $request->grade_two;
        $user_data->grade_three = $request->grade_three;
        $user_data->result_one = $request->result_one;
        $user_data->result_two = $request->result_two;
        $user_data->result_three = $request->result_three;
        $user_data->language_id = $request->language_id;
        $user_data->score = $request->score;
        $user_data->test_date = $request->test_date;

        if ($request->password) {
            $user_data->password  = Hash::make($request->password);
        }
        $user_data->status  = (isset($request->status) ? '1' : '0');
        $user_data->update();

        if ($user_data) {
            return redirect()->route('admin.user_list')->with('success', 'Update Successfully');
        } else {
            return redirect()->back()->with('error', 'Update Failed');
        }
    }


    public function delete($id){
        $count = Invoice::where('client_id',$id)->count();

        if($count  == 0){
            $user_data = User::findOrFail($id);

            if (!is_null($user_data)) {
                Storage::delete('public/user/' . $user_data->image);
                $user_data->delete();
            }

            if (!is_null($user_data)) {
                Storage::delete('public/image_thum/' . $user_data->image);
                $user_data->delete();
            }

            if ($user_data) {
                return redirect()->route('admin.user_list')->with('success', 'Delete Successfully');
            } else {
                return redirect()->back()->with('error', 'Delete Failed');
            }
        }else{
            return redirect()->back()->with('error', 'This User data already exist in another modeul');
        }


    }
}
