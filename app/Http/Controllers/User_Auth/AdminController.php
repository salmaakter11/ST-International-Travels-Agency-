<?php

namespace App\Http\Controllers\User_Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function login()
    {
        return view('dashboard.admin.login');
    }

    public function reloadCaptcha(){
        return response()->json(['captcha' => captcha_img('math')]);
    }

    public function login_check(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:admins,email',
            'password' => 'required|min:6|max:30',
            'captcha' => 'required|captcha'
        ], [
            'email.exists' => 'This email not exists',
            'captcha.captcha' => 'The Captcha Is Invalid',
        ]);


        $status = Admin::where('email', $request->email)->first();
        if ($status->status == '1') {
            $creds = $request->only('email', 'password');
            if (Auth::guard('admin')->attempt($creds)) {
                return redirect()->route('admin.dashboard')->with('success', 'Login successfully');
            } else {
                return redirect()->route('admin.login')->with('error', 'Email and Password Does not match');
            }
        } else {
            return redirect()->route('admin.login')->with('error', 'Your Account is not Active');
        }
    }

    public function dashboard()
    {
        $data['active_user']=count(User::where('status','1')->get());
        $data['inactive_user']=count(User::where('status','!=','1')->get());
        $data['today_user'] = count(User::where(DB::raw('date(created_at)'), date("Y-m-d"))->orderBy('id', 'desc')->get());

        $data['today_pending_user'] = count(Invoice::where(DB::raw('date(created_at)'), date("Y-m-d"))->where('status', '0')->orderBy('id', 'desc')->get());
        $data['last_month_pending_user'] = count(Invoice::where('created_at', '>', now()->subDays(30)->endOfDay())->where('status', '0')->get());

        $data['today_processing_user'] = count(Invoice::where(DB::raw('date(created_at)'), date("Y-m-d"))->where('status', '1')->orderBy('id', 'desc')->get());
        $data['last_month_processing_user'] = count(Invoice::where('created_at', '>', now()->subDays(30)->endOfDay())->where('status', '1')->get());

        $data['today_procesed_user'] = count(Invoice::where(DB::raw('date(created_at)'), date("Y-m-d"))->where('status', '2')->orderBy('id', 'desc')->get());
        $data['last_month_procesed_user'] = count(Invoice::where('created_at', '>', now()->subDays(30)->endOfDay())->where('status', '2')->get());

        $data['today_completed_user'] = count(Invoice::where(DB::raw('date(created_at)'), date("Y-m-d"))->where('status', '3')->orderBy('id', 'desc')->get());
        $data['last_month_completed_user'] = count(Invoice::where('created_at', '>', now()->subDays(30)->endOfDay())->where('status', '3')->get());

        $data['today_canceled_user'] = count(Invoice::where(DB::raw('date(created_at)'), date("Y-m-d"))->where('status', '4')->orderBy('id', 'desc')->get());
        $data['last_month_canceled_user'] = count(Invoice::where('created_at', '>', now()->subDays(30)->endOfDay())->where('status', '4')->get());

        return view('dashboard.admin.dashboard')->with($data);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with('success', 'Logout Successfully');
    }


}
