@extends('dashboard.admin.layouts.master')
@php
    $data = isset($edit_data) ? $edit_data : '';
    $name = isset($data->name) && $data->name != '' ? $data->name : '';
    $email = isset($data->email) && $data->email != '' ? $data->email : '';
    $phone = isset($data->phone) && $data->phone != '' ? $data->phone : '';
    $dob = isset($data->dob) && $data->dob != '' ? $data->dob : '';
    $gender = isset($data->gender) && $data->gender != '' ? $data->gender : '';
    $marital_status = isset($data->marital_status) && $data->marital_status != '' ? $data->marital_status : '';
    $religion = isset($data->religion) && $data->religion != '' ? $data->religion : '';
    $address = isset($data->address) && $data->address != '' ? $data->address : '';
    $country_id = isset($data->country_id) && $data->country_id != '' ? $data->country_id : '';
    $image = isset($data->image) && $data->image != '' ? $data->image : '';
    $thum_image = isset($data->thum_image) && $data->thum_image != '' ? $data->thum_image : '';
    $educational_one = isset($data->educational_one) && $data->educational_one != '' ? $data->educational_one : '';
    $educational_two = isset($data->educational_two) && $data->educational_two != '' ? $data->educational_two : '';
    $educational_three = isset($data->educational_three) && $data->educational_three != '' ? $data->educational_three : '';
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
    $result_one = isset($data->result_one) && $data->result_one != '' ? $data->result_one : '';
    $result_two = isset($data->result_two) && $data->result_two != '' ? $data->result_two : '';
    $result_three = isset($data->result_three) && $data->result_three != '' ? $data->result_three : '';
    $language_id = isset($data->language_id) && $data->language_id != '' ? $data->language_id : '';
    $score = isset($data->score) && $data->score != '' ? $data->score : '';
    $test_date = isset($data->test_date) && $data->test_date != '' ? $data->test_date : '';
    $status = isset($data->status) && $data->status != '' ? $data->status : '';
    $id = isset($data->id) && $data->id != '' ? $data->id : '';
@endphp

@push('admin_css')
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
@endpush

@section('admin_body')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ $id ? 'Edit User' : 'Add New User ' }} </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">User</a></li>
                            <li class="breadcrumb-item active">Create</li>
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
                                    Create User
                                </h3>
                                <div class="card-tools">
                                    <ul class="nav nav-pills ml-auto">
                                        <li class="nav-item">
                                            <a class="btn btn-primary" href="{{ route('admin.user_list') }}"> User
                                                List</a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ $id ? route('admin.user_update', $id) : route('admin.user_store') }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    {{-- @if (Session::get('success'))
                                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                                    @endif
                                    @if (Session::get('fail'))
                                        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                                    @endif --}}

                                    <input type="hidden" name="image_id" value="{{ $image }}">
                                    <input type="hidden" name="thum_id" value="{{ $image }}">

                                    <strong style="color: rgb(77, 71, 101); font-size: 20px;">General Information</strong>
                                    <div class="row mt-3">
                                        <div class="col-md-3 col-xl-3">
                                            <label for="">Name</label> <span class="text-danger">*</span>
                                            <input type="text" name="name" class="form-control bg-light"
                                                placeholder="Name" value="{{ $name }}">
                                            <span class="text-danger">
                                                @error('name')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-3 col-xl-3">
                                            <label for="">Phone</label><span class="text-danger">*</span>
                                            <input type="text" name="phone" class="form-control bg-light"
                                                placeholder="Phone" value="{{ $phone }}">
                                            <span class="text-danger">
                                                @error('phone')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-3 col-xl-3">
                                            <label for="">Email</label><span class="text-danger">*</span>
                                            <input name="email" type="email" class="form-control bg-light"
                                                value="{{ $email }}" {{ $id == '' ? '' : 'disabled' }}
                                                placeholder="Email">
                                            <span class="text-danger">
                                                @error('email')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>

                                        <div class="col-md-3 col-xl-3">
                                            <label for="">Password</label>
                                            @if ($id == '')
                                                <span class="text-danger">*</span>
                                            @endif
                                            <input name="password" type="password" class="form-control bg-light"
                                                placeholder="password">
                                            <span class="text-danger">
                                                @error('password')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-3 col-xl-3 mt-2">
                                            <label for="">Date of Birth<span class="text-danger">*</span></label>
                                            <input name="dob" class="form-control bg-light" id="date_ob"
                                                type="text" placeholder="Date of Birth" autocomplete="off" value="{{ $dob }}">
                                            <span class="text-danger">
                                                @error('dob')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-3 col-xl-3 mt-2">
                                            <label for="">Gender<span class="text-danger">*</span></label>
                                            <select class="custom-select bg-light search_box" name="gender">
                                                <option value="">Select Gender</option>
                                                <option value="1" {{$gender ==1 ? 'selected' : '' }}>Male </option>
                                                <option value="2" {{$gender ==2 ? 'selected' : '' }}>Female</option>
                                                <option value="3" {{$gender ==3 ? 'selected' : '' }}>Others</option>
                                            </select>
                                            <span class="text-danger">
                                                @error('gender')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-3 col-xl-3 mt-2">
                                            <label for="">Marital Status<span class="text-danger">*</span></label>
                                            <select class="form-control bg-light search_box" name="marital_status">
                                                <option value="">Select marital status</option>
                                                <option value="1" {{$marital_status ==1 ? 'selected' : '' }}>Married</option>
                                                <option value="2" {{$marital_status ==2 ? 'selected' : '' }}>Un-Married</option>
                                                <option value="3" {{$marital_status ==3 ? 'selected' : '' }}>Others</option>
                                            </select>
                                            <span class="text-danger">
                                                @error('marital_status')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>

                                        <div class="col-md-3 col-xl-3 mt-2">
                                            <label for="">Religion<span class="text-danger">*</span></label>
                                            <select class="form-control bg-light search_box" name="religion">
                                                <option value=""> Select Religion</option>
                                                <option value="1" {{$religion ==1 ? 'selected' : '' }}>Islam</option>
                                                <option value="2" {{$religion ==2 ? 'selected' : '' }}>Hindu</option>
                                                <option value="3" {{$religion ==3 ? 'selected' : '' }}>Cristian</option>
                                                <option value="4" {{$religion ==4 ? 'selected' : '' }}>Buddhist</option>
                                                <option value="5" {{$religion ==5 ? 'selected' : '' }}>Others</option>
                                            </select>
                                            <span class="text-danger">
                                                @error('religion')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-3 col-xl-3 mt-2">
                                            <label for="">Address<span class="text-danger">*</span></label>
                                            <input name="address" class="form-control bg-light" type="text"
                                                placeholder="Address" value="{{ $address }}">
                                            <span class="text-danger">
                                                @error('address')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-3 col-xl-3 mt-2">
                                            <label for="">Preferred country<span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control bg-light search_box " name="country_id">
                                                <option value="">Select A Country</option>
                                                @if (isset($country))
                                                    @foreach ($country as $data)
                                                        <option value="{{ $data->id }}" {{ $data->id == $country_id ? 'selected' : '' }}> {{ $data->country_name }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            <span class="text-danger">
                                                @error('country_id')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>

                                        <div class="col-md-3 col-xl-3 mt-2 mb-2">
                                            <label for="">Image <span class="text-warning">(Max: 1024 kb)</span></label>
                                            <input type="file" id="image" name="image"
                                                class="form-control bg-light " value="" accept="image/*">
                                            <span class="text-danger" id="error_show">
                                                @error('image')
                                                    {{ $message }}
                                                @enderror
                                            </span>

                                            <div id="">
                                                <img id="show_image"
                                                    src="{{ $image != '' ? URL::to('storage/image_thum/' . $image) : asset('no_image.png') }}"
                                                    style="width: 120px;height:120px" class="rounded elevation-2 m-2"
                                                    alt="No Image">
                                            </div>
                                        </div>

                                    </div>

                                    <strong style="color: rgb(77, 71, 101); font-size: 20px;">Educational Qualification-1</strong>
                                    <div class="row mb-3 mt-2">
                                        <div class="col-md-4 col-xl-4 mt-2">
                                            <label for="">Education level<span class="text-danger">*</span></label>
                                            <select class="form-control bg-light search_box" name="educational_one">
                                                <option value=""> Select Education level</option>
                                                @if (isset($education))
                                                    @foreach ($education as $data)
                                                        <option value="{{ $data->id }}" {{ $data->id == $educational_one ? 'selected' : '' }}> {{ $data->level_name }}
                                                        </option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            <span class="text-danger">
                                                @error('educational_one')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-4 col-xl-4 mt-2">
                                            <label for="">Board / University<span class="text-danger">*</span></label>
                                            <input name="institute_one" class="form-control bg-light" type="text"
                                                placeholder="Board / University / Institute" value="{{ $institute_one}}">
                                            <span class="text-danger">
                                                @error('institute_one')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-4 col-xl-4 mt-2">
                                            <label for="">Department<span class="text-danger">*</span></label>
                                            <input name="department_one" class="form-control bg-light" type="text"
                                                placeholder="Department" value="{{ $department_one}}">
                                            <span class="text-danger">
                                                @error('department_one')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-4 col-xl-4 mt-2">
                                            <label for="">Passing Year<span class="text-danger">*</span></label>
                                            <input name="passing_year_one" class="form-control bg-light" type="text"
                                                placeholder="Passing Year" value="{{ $passing_year_one}}">
                                            <span class="text-danger">
                                                @error('passing_year_one')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-4 col-xl-4 mt-2">
                                            <label for="">Result (Grade / Division)<span class="text-danger">*</span></label>
                                            <input name="grade_one" class="form-control bg-light" type="text"
                                                placeholder="Result (Grade / Division)" value="{{ $grade_one}}">
                                            <span class="text-danger">
                                                @error('grade_one')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-4 col-xl-4 mt-2">
                                            <label for="">Result Type<span class="text-danger">*</span></label>
                                            <select class="form-control bg-light search_box" name="result_one">
                                                <option value=""> Select Result Type</option>
                                                @if (isset($result))
                                                    @foreach ($result as $data)
                                                        <option value="{{ $data->id }}" {{ $data->id == $result_one ? 'selected' : '' }}> {{ $data->result_type }}
                                                        </option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            <span class="text-danger">
                                                @error('result_one')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>

                                    <strong style="color: rgb(77, 71, 101); font-size: 20px;">Educational Qualification-2</strong>
                                    <div class="row mb-3 mt-2">
                                        <div class="col-md-4 col-xl-4 mt-2">
                                            <label for="">Education level<span class="text-danger">*</span></label>
                                            <select class="form-control bg-light search_box" name="educational_two">
                                                <option value=""> Select Education level</option>
                                                @if (isset($education))
                                                    @foreach ($education as $data)
                                                        <option value="{{ $data->id }}" {{ $data->id == $educational_two ? 'selected' : '' }}> {{ $data->level_name }}
                                                        </option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            <span class="text-danger">
                                                @error('educational_two')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-4 col-xl-4 mt-2">
                                            <label for="">Board / University<span class="text-danger">*</span></label>
                                            <input name="institute_two" class="form-control bg-light" type="text"
                                                placeholder="Board / University / Institute" value="{{ $institute_two}}">
                                            <span class="text-danger">
                                                @error('institute_two')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-4 col-xl-4 mt-2">
                                            <label for="">Department<span class="text-danger">*</span></label>
                                            <input name="department_two" class="form-control bg-light" type="text"
                                                placeholder="Department" value="{{ $department_two}}">
                                            <span class="text-danger">
                                                @error('department_two')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-4 col-xl-4 mt-2">
                                            <label for="">Passing Year<span class="text-danger">*</span></label>
                                            <input name="passing_year_two" class="form-control bg-light" type="text"
                                                placeholder="Passing Year" value="{{ $passing_year_two}}">
                                            <span class="text-danger">
                                                @error('passing_year_two')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-4 col-xl-4 mt-2">
                                            <label for="">Result (Grade / Division)<span class="text-danger">*</span></label>
                                            <input name="grade_two" class="form-control bg-light" type="text"
                                                placeholder="Result (Grade / Division)" value="{{ $grade_two}}">
                                            <span class="text-danger">
                                                @error('grade_two')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-4 col-xl-4 mt-2">
                                            <label for="">Result Type<span class="text-danger">*</span></label>
                                            <select class="form-control bg-light search_box" name="result_two">
                                                <option value="">Select Result Type</option>
                                                @if (isset($result))
                                                    @foreach ($result as $data)
                                                        <option value="{{ $data->id }}" {{ $data->id == $result_two ? 'selected' : '' }}> {{ $data->result_type }}
                                                        </option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            <span class="text-danger">
                                                @error('result_two')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>

                                    <strong style="color: rgb(77, 71, 101); font-size: 20px;">Educational Qualification-3</strong>
                                    <div class="row mb-3 mt-2">
                                        <div class="col-md-4 col-xl-4 mt-2">
                                            <label for="">Education level<span class="text-danger">*</span></label>
                                            <select class="form-control bg-light search_box" name="educational_three">
                                                <option value=""> Select Education level</option>
                                                @if (isset($education))
                                                    @foreach ($education as $data)
                                                        <option value="{{ $data->id }}" {{ $data->id == $educational_three ? 'selected' : '' }}> {{ $data->level_name }}
                                                        </option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            <span class="text-danger">
                                                @error('educational_three')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-4 col-xl-4 mt-2">
                                            <label for="">Board / University<span class="text-danger">*</span></label>
                                            <input name="institute_three" class="form-control bg-light" type="text"
                                                placeholder="Board / University / Institute"  value="{{ $institute_three}}">
                                            <span class="text-danger">
                                                @error('institute_three')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-4 col-xl-4 mt-2">
                                            <label for="">Department<span class="text-danger">*</span></label>
                                            <input name="department_three" class="form-control bg-light" type="text"
                                                placeholder="Department" value="{{ $department_three}}">
                                            <span class="text-danger">
                                                @error('department_three')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-4 col-xl-4 mt-2">
                                            <label for="">Passing Year<span class="text-danger">*</span></label>
                                            <input name="passing_year_three" class="form-control bg-light" type="text"
                                                placeholder="Passing Year" value="{{ $passing_year_three}}">
                                            <span class="text-danger">
                                                @error('passing_year_three')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-4 col-xl-4 mt-2">
                                            <label for="">Result (Grade / Division)<span class="text-danger">*</span></label>
                                            <input name="grade_three" class="form-control bg-light" type="text"
                                                placeholder="Result (Grade / Division)" value="{{ $grade_three}}">
                                            <span class="text-danger">
                                                @error('grade_three')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-4 col-xl-4 mt-2">
                                            <label for="">Result Type<span class="text-danger">*</span></label>
                                            <select class="form-control bg-light search_box" name="result_three">
                                                <option value=""> Select Result Type</option>
                                                @if (isset($result))
                                                    @foreach ($result as $data)
                                                        <option value="{{ $data->id }}" {{ $data->id == $result_three ? 'selected' : '' }}> {{ $data->result_type }}
                                                        </option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            <span class="text-danger">
                                                @error('result_three')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>

                                    <strong style="color: rgb(77, 71, 101); font-size: 20px;">English Language Test</strong>
                                    <div class="row">
                                        <div class="col-md-3 col-xl-3 mt-3">
                                            <label for="">Language Test<span class="text-danger">*</span></label>
                                            <select class="form-control bg-light search_box" name="language_id">
                                                <option value="">Select Language Test</option>
                                                @if (isset($language))
                                                    @foreach ($language as $data)
                                                        <option value="{{ $data->id }}" {{ $data->id == $language_id ? 'selected' : '' }}> {{ $data->language_test}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            <span class="text-danger">
                                                @error('language_id')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-3 col-xl-3 mt-3">
                                            <label for="">Score<span class="text-danger">*</span></label>
                                            <input name="score" class="form-control bg-light" type="text" placeholder="Score" value="{{ $score}}">
                                            <span class="text-danger">
                                                @error('score')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-3 col-xl-3 mt-3">
                                            <label for="">Test Date<span class="text-danger">*</span></label>
                                            <input name="test_date" class="form-control bg-light" type="text" placeholder="Test Date" id="t_date" autocomplete="off" value="{{ $test_date}}">
                                            <span class="text-danger">
                                                @error('test_date')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-3 col-xl-3 mt-5 text-center">
                                            <input {{$status == 1 ? 'checked' : '' }} name="status" class="form-control bg-light" type="checkbox" value="1">
                                            <label class="form-check-label" for=""><strong>Status</strong></label>
                                        </div>
                                    </div>

                                    <div class="row mt-2">
                                        <div class="col-md-12 col-xl-12 text-right pt-5">
                                            <button class="btn btn-info">{{ $id ? 'Update' : 'Save' }}</button>
                                        </div>
                                    </div>

                                </form>
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

@push('admin_js')
    <script src="{{ asset('admin/datepicker/date_picker.js') }}"></script>
    <script>
        $("#date_ob", ).datepicker({
            uiLibrary: 'bootstrap4',
            format: 'dd-mm-yyyy',
            // minDate: new Date()
            maxDate: new Date()
        });
        $("#t_date", ).datepicker({
            uiLibrary: 'bootstrap4',
            format: 'dd-mm-yyyy',
            // minDate: new Date()
            maxDate: new Date()
        });
        image_validation("#image", "#show_image", "#error_show", '1024', "Image Size Can't larger than 1024 KB")
    </script>
@endpush
