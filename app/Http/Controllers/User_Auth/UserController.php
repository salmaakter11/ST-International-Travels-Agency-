<?php

namespace App\Http\Controllers\User_Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Country;
use App\Models\EducationLevel;
use App\Models\LanguageTest;
use App\Models\ResultType;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Models\Invoice;

class UserController extends Controller
{
    public function login()
    {
        return view('dashboard.user.login');
    }

    public function reloadCaptcha(){
        return response()->json(['captcha' => captcha_img('math')]);
    }

    public function register()
    {
        $data['country'] = Country::where('status', '1')->get();
        $data['education'] = EducationLevel::where('status', '1')->get();
        $data['language'] = LanguageTest::where('status', '1')->get();
        $data['result'] = ResultType::where('status', '1')->get();

        return view('frontend.pages.registration')->with($data);
    }

    public function register_store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'phone' => 'required|min:11|max:16',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|max:30',
            'confirm_password' => 'required|min:6|max:30|same:password',
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
        ],

        [
            'email.unique' => 'Email Must be unique.',
            'country_id.required' => 'Preferred Country is required.',
            'educational_one.required' => 'Educational Level is required.',
            'institute_one.required' => 'Board/University/Institute is required.',
            'department_one.required' => 'Department field is required.',
            'passing_year_one.required' => 'Passing Year is required.',
            'grade_one.required' => 'Result(Grade/Division) is required.',
            'result_one.required' => 'Result Type is required.',
            'language_id.required' => 'Language Test is required.',

        ]);

        $user_data = new User();

        $filename = '';
        if (isset($request->image)) {
            $filename = time() . '.' . $request->file('image')->getClientOriginalExtension();
            Storage::putFileAs('public/user', $request->file('image'), $filename);
        }
        $user_data->image = $filename;

        $filename_thum = null;
        if (isset($request->image)) {
            $image = $request->file('image');
            $filename_thum = time() . '.' . $request->file('image')->getClientOriginalExtension();
            Storage::putFileAs('public/image_thum', $request->file('image'), $filename_thum);
            $destinationPath = storage_path('app/public/image_thum');
            $img = Image::make($image->path());
            $img->resize(100, 100)->save($destinationPath . '/' . $filename_thum);
        }

        $user_data->thum_image = $filename_thum;

        $user_data->name = $request->name;
        $user_data->phone = $request->phone;
        $user_data->email = $request->email;
        $user_data->password = Hash::make($request->password);
        $user_data->dob = $request->dob;
        $user_data->gender = $request->gender;
        $user_data->marital_status = $request->marital_status;
        $user_data->religion = $request->religion;
        $user_data->address = $request->address;
        $user_data->country_id = $request->country_id;
        $user_data->educational_one = $request->educational_one;
        $user_data->institute_one = $request->institute_one;
        $user_data->department_one = $request->department_one;
        $user_data->passing_year_one = $request->passing_year_one;
        $user_data->grade_one = $request->grade_one;
        $user_data->result_one = $request->result_one;
        $user_data->language_id = $request->language_id;
        $user_data->score = $request->score;
        $user_data->test_date = $request->test_date;
        $user_data->save();

        if ($user_data) {
            return redirect()->route('login')->with('success', 'Registration Successfully');
        } else {
            return redirect()->back()->with('error', 'Registration Failed');
        }
    }

    public function login_check(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6|max:30',
            'captcha' => 'required|captcha'
        ], [
            'email.exists' => 'This emial not exists',
            'captcha.captcha' => 'The Captcha Is Invalid',
        ]);


        $status = User::where('email', $request->email)->first();
        if ($status->status == '1') {
            $creds = $request->only('email', 'password');
            if (Auth::guard('web')->attempt($creds)) {
                return redirect()->route('dashboard')->with('success', 'Login successfully');
            } else {
                return redirect()->route('login')->with('error', 'Email and Password Does not match');
            }
        } else {
            return redirect()->route('login')->with('error', 'Your Account is not Active');
        }
    }

    public function dashboard()
    {

         $your_info = User::with('country_data','edu_one','edu_two','edu_three','res_one','res_two','res_three','language_data')->where('id',Auth::user()->id)->first();

          $invoice = Invoice::with([ 'created_name' => function ($q) {$q->select('id', 'name');}, 'updated_name' => function ($q) {$q->select('id', 'name');}, ])
          ->orderBy('id', 'desc')->where('client_id',Auth::user()->id)->paginate(2);

        return view('dashboard.user.dashboard',compact('your_info','invoice'));
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('login')->with('success', 'Logout Successfully');
    }
}
