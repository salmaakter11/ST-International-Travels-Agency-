@extends('dashboard.admin.layouts.master')

@php
    $data = isset($profile_view) ? $profile_view : '';

    $name = isset($data->name) ? $data->name : '';
    $phone = isset($data->phone) ? $data->phone : '';
    $email = isset($data->email) ? $data->email : '';
    $status = isset($data->status) ? $data->status : '';
    $admin_type = isset($data->admin_type) ? $data->admin_type : '';
    $role_type = isset($data->role_type) ? $data->role_type : '';
    $image = isset($data->image) && $data->image != '' ? $data->image : '';
    $id = isset($data->id) ? $data->id : '';
@endphp

@section('admin_body')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Your Profile </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Your</a></li>
                            <li class="breadcrumb-item active">Profile</li>
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
                                            <a target="_blank" href="{{route('admin.profile_print',$profile_view->id)}}" class="btn btn-warning px-5 ">Print</a>&nbsp&nbsp
                                            <a class="btn btn-primary" href="{{route('admin.profile.edit', Auth::user()->id)}}">Update Your Profile</a>
                                </div>
                            </div><!-- /.card-header -->
                            <div class="card-body"> 
                                
                                    <div class="row px-3">
                                        
                                        <div class="col-sm-6 col-md-4 mt-2"><strong>Name</strong>  :&nbsp :{{$name}}</div>
                                        <div class="col-sm-6 col-md-4 mt-2"><strong>Email</strong> :&nbsp {{$email}}</div>
                                        <div class="col-sm-6 col-md-4 mt-2"><strong>Phone</strong> :&nbsp {{$phone}}</div>
                                        <div class="col-sm-6 col-md-4 mt-2"><strong>Photo</strong>
                                            <div id="">
                                                <img id="show_image"
                                                    src="{{ $image != '' ? URL::to('storage/admin_image/' . $image) : asset('no_image.png') }}"
                                                    style="width: 200px;height:200px" class="rounded elevation-2 m-2"
                                                    alt="No Image">
                                            </div>
                                        </div>
                                            
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
@push('admin_js')
    <script>
        image_validation("#image", "#show_image", "#msg_v", '1024', "Image Size Can't larger than 1024 KB")
    </script>
@endpush