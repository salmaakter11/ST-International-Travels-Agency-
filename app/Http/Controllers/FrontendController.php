<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\EducationLevel;
use App\Models\LanguageTest;
use App\Models\ResultType;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class FrontendController extends Controller
{

    public function home(){
        return view('frontend.pages.home');
    }
    public function service(){
        return view('frontend.pages.service');
    }
    public function service_one(){
        return view('frontend.pages.service_one');
    }
    public function service_two(){
        return view('frontend.pages.service_two');
    }
    public function service_three(){
        return view('frontend.pages.service_three');
    }
    public function service_four(){
        return view('frontend.pages.service_four');
    }
    public function about(){
        return view('frontend.pages.about');
    }
    public function team(){
        return view('frontend.pages.team');
    }
    public function partner(){
        return view('frontend.pages.partner');
    }
    public function contact(){
        return view('frontend.pages.contact');
    }
    public function mdmessage(){
        return view('frontend.pages.md_message');
    }
    public function notice(){
        return view('frontend.pages.notice');
    }
    public function dubai(){
        return view('frontend.pages.dubai');
    }
    public function india(){
        return view('frontend.pages.india');
    }
    public function china(){
        return view('frontend.pages.china');
    }
    public function qatar(){
        return view('frontend.pages.qatar');
    }
    public function schengen(){
        return view('frontend.pages.schengen');
    }
}
