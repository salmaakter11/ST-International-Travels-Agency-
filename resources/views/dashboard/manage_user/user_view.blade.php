@extends('dashboard.admin.layouts.master')

@php

$data = isset($user_info) ? $user_info : '';

$name = isset($data->name) && $data->name != '' ? $data->name : '';
$email = isset($data->email) && $data->email != '' ? $data->email : '';
$phone = isset($data->phone) && $data->phone != '' ? $data->phone : '';
$dob = isset($data->dob) && $data->dob != '' ? $data->dob : '';
$gender = isset($data->gender) && $data->gender != '' ? $data->gender : '';
$marital_status = isset($data->marital_status) && $data->marital_status != '' ? $data->marital_status : '';
$religion = isset($data->religion) && $data->religion != '' ? $data->religion : '';
$address = isset($data->address) && $data->address != '' ? $data->address : '';
$country_name = isset($data->country_data->country_name) && $data->country_data->country_name != '' ? $data->country_data->country_name : '';
$image = isset($data->image) && $data->image != '' ? $data->image : '';
$thum_image = isset($data->thum_image) && $data->thum_image != '' ? $data->thum_image : '';
$educational_one = isset($data->edu_one->level_name) && $data->edu_one->level_name != '' ? $data->edu_one->level_name : '';
$educational_two = isset($data->edu_two->level_name) && $data->edu_two->level_name != '' ? $data->edu_two->level_name : '';
$educational_three = isset($data->edu_three->level_name) && $data->edu_three->level_name != '' ? $data->edu_three->level_name : '';
$institute_one = isset($data->institute_one) && $data->institute_one != '' ? $data->institute_one : '';
$institute_two = isset($data->institute_two) && $data->institute_two != '' ? $data->institute_two : '';
$institute_three = isset($data->institute_three) && $data->institute_three != '' ? $data->institute_three : '';
$department_one = isset($data->department_one) && $data->department_one != '' ? $data->department_one : '';
$department_two = isset($data->department_two) && $data->department_two != '' ? $data->department_two : '';
$department_three = isset($data->department_three) && $data->department_three != '' ? $data->department_three : '';
$passing_year_one = isset($data->passing_year_one) && $data->passing_year_one != '' ? $data->passing_year_one : '';
$passing_year_two = isset($data->passing_year_two) && $data->passing_year_two != '' ? $data->passing_year_two : '';
$passing_year_three = isset($data->passing_year_three) && $data->passing_year_three != '' ? $data->passing_year_three : '';
$grade_one = isset($data->grade_one) && $data->grade_one != '' ? $data->grade_one : '';
$grade_two = isset($data->grade_two) && $data->grade_two != '' ? $data->grade_two : '';
$grade_three = isset($data->grade_three) && $data->grade_three != '' ? $data->grade_three : '';
$result_one = isset($data->res_one->result_type) && $data->res_one->result_type != '' ? $data->res_one->result_type : '';
$result_two = isset($data->res_two->result_type) && $data->res_two->result_type != '' ? $data->res_two->result_type : '';
$result_three = isset($data->res_three->result_type) && $data->res_three->result_type != '' ? $data->res_three->result_type : '';
$language_test = isset($data->language_data->language_test) && $data->language_data->language_test != '' ? $data->language_data->language_test : '';
$score = isset($data->score) && $data->score != '' ? $data->score : '';
$test_date = isset($data->test_date) && $data->test_date != '' ? $data->test_date : '';

$created_at = isset($data->created_at) && $data->created_at != '' ? $data->created_at : '';
$status = isset($data->status) && $data->status != '' ? $data->status : '';
$id = isset($data->id) && $data->id != '' ? $data->id : '';
@endphp
<style>
    .white_color{
        color: white;
    }
    .p-1{
        padding: 5px;
    }
    .bg-rounded{
        border-radius: 10px;
    }
</style>
@section('admin_body')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Client information </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Client</a></li>
                            <li class="breadcrumb-item active">information</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <section class="col-lg-12 connectedSortable">
                        <!-- Custom tabs (Charts with tabs)-->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">

                                </h3>
                                <div class="card-tools">
                                    <a target="_blank" href="{{route('admin.user_print',$user_info->id)}}" class="btn btn-warning px-5 ">Print</a>&nbsp&nbsp
                                    <a class="btn btn-primary" href="{{ route('admin.user_list') }}">Client list</a>
                                </div>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <strong class="px-3" style="color: rgb(77, 71, 101); font-size: 20px;">General Information</strong>
                                <div class="row px-3 mb-3 mt-2">
                                    <div class="col-sm-6 col-md-12"><strong></strong>
                                        <div id="">
                                            <img id="show_image"
                                                src="{{ $image != '' ? URL::to('storage/user/' . $image) : asset('no_image.png') }}"
                                                style="width: 150px;height:150px" class="rounded elevation-2 m-2"
                                                alt="No Image">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 mt-3"><strong>Client Name</strong> :&nbsp {{$name}}</div>
                                    <div class="col-sm-6 col-md-4 mt-3"><strong>Phone Number</strong> :&nbsp {{$phone}}</div>
                                    <div class="col-sm-6 col-md-4 mt-3"><strong>Email</strong> :&nbsp {{$email}}</div>
                                    <div class="col-sm-6 col-md-4 mt-3"><strong>Date of Birth</strong> :&nbsp {{$dob}}</div>
                                    <div class="col-sm-6 col-md-4 mt-3"><strong>Gender</strong> :&nbsp
                                        @if($gender ==1 )Male
                                        @elseif($gender ==2 )Female
                                        @elseif($gender ==3 )Others
                                        @endif
                                    </div>
                                    <div class="col-sm-6 col-md-4 mt-3"><strong>Marital Status</strong> :&nbsp
                                        @if($marital_status ==1 )Married
                                        @elseif($marital_status ==2 )Un-Married
                                        @elseif($marital_status ==3 )Others
                                        @endif
                                    </div>
                                    <div class="col-sm-6 col-md-4 mt-3"><strong>Religion</strong> :&nbsp
                                        @if($religion ==1 )Islam
                                        @elseif($religion ==2 )Hindu
                                        @elseif($religion ==3 )Cristian
                                        @elseif($religion ==4 )Buddhist
                                        @elseif($religion ==5 )Others
                                        @endif
                                    </div>
                                    <div class="col-sm-6 col-md-4 mt-3"><strong>Address</strong> :&nbsp {{$address}}</div>
                                    <div class="col-sm-6 col-md-4 mt-3"><strong>Country</strong> :&nbsp {{$country_name}}</div>
                                    <div class="col-sm-6 col-md-4 mt-3"><strong>Status</strong> :&nbsp
                                        @if ($status == 0)
                                            <span class="p-1 bg-rounded" style="background-color:#ffc107;">Inactive</span>
                                        @elseif($status == 1)
                                            <span class="white_color p-1 bg-rounded" style="background-color:#28a745;">Active</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-6 col-md-4 mt-3"><strong>Created at</strong> :&nbsp {{date('d F Y', strtotime($created_at))}}</div>
                                </div>
                                <strong class="px-3" style="color: rgb(77, 71, 101); font-size: 20px;">Educational Qualification-1</strong>
                                <div class="row px-3 mb-3 mt-2">
                                    <div class="col-sm-6 col-md-4 mt-3"><strong>Education level</strong> :&nbsp {{$educational_one}}</div>
                                    <div class="col-sm-6 col-md-4 mt-3"><strong>Board/University</strong> :&nbsp {{$institute_one}}</div>
                                    <div class="col-sm-6 col-md-4 mt-3"><strong>Department</strong> :&nbsp {{$department_one}}</div>
                                    <div class="col-sm-6 col-md-4 mt-3"><strong>Passing Year</strong> :&nbsp {{$passing_year_one}}</div>
                                    <div class="col-sm-6 col-md-4 mt-3"><strong>Result (Grade)</strong> :&nbsp {{$grade_one}}</div>
                                    <div class="col-sm-6 col-md-4 mt-3"><strong>Result Type</strong> :&nbsp {{$result_one}}</div>
                                </div>
                                <strong class="px-3" style="color: rgb(77, 71, 101); font-size: 20px;">Educational Qualification-2</strong>
                                <div class="row px-3 mb-3 mt-2">
                                    <div class="col-sm-6 col-md-4 mt-3"><strong>Education level</strong> :&nbsp {{$educational_two}}</div>
                                    <div class="col-sm-6 col-md-4 mt-3"><strong>Board/University</strong> :&nbsp {{$institute_two}}</div>
                                    <div class="col-sm-6 col-md-4 mt-3"><strong>Department</strong> :&nbsp {{$department_two}}</div>
                                    <div class="col-sm-6 col-md-4 mt-3"><strong>Passing Year</strong> :&nbsp {{$passing_year_two}}</div>
                                    <div class="col-sm-6 col-md-4 mt-3"><strong>Result (Grade)</strong> :&nbsp {{$grade_two}}</div>
                                    <div class="col-sm-6 col-md-4 mt-3"><strong>Result Type</strong> :&nbsp {{$result_two}}</div>
                                </div>
                                <strong class="px-3" style="color: rgb(77, 71, 101); font-size: 20px;">Educational Qualification-3</strong>
                                <div class="row px-3 mb-3 mt-2">
                                    <div class="col-sm-6 col-md-4 mt-3"><strong>Education level</strong> :&nbsp {{$educational_three}}</div>
                                    <div class="col-sm-6 col-md-4 mt-3"><strong>Board/University</strong> :&nbsp {{$institute_three}}</div>
                                    <div class="col-sm-6 col-md-4 mt-3"><strong>Department</strong> :&nbsp {{$department_three}}</div>
                                    <div class="col-sm-6 col-md-4 mt-3"><strong>Passing Year</strong> :&nbsp {{$passing_year_three}}</div>
                                    <div class="col-sm-6 col-md-4 mt-3"><strong>Result (Grade)</strong> :&nbsp {{$grade_three}}</div>
                                    <div class="col-sm-6 col-md-4 mt-3"><strong>Result Type</strong> :&nbsp {{$result_three}}</div>
                                </div>
                                <strong class="px-3" style="color: rgb(77, 71, 101); font-size: 20px;">English Language Test</strong>
                                <div class="row px-3 mb-3 mt-2">
                                    <div class="col-sm-6 col-md-4 mt-3"><strong>Language Test</strong> :&nbsp {{$language_test}}</div>
                                    <div class="col-sm-6 col-md-4 mt-3"><strong>Score</strong> :&nbsp {{$score}}</div>
                                    <div class="col-sm-6 col-md-4 mt-3"><strong>Test Date</strong> :&nbsp {{$test_date}}</div>
                                </div>
                            </div><!-- /.card-body -->

                        </div>
                        <!-- /.card -->
                    </section>
                    <!-- right col -->
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
