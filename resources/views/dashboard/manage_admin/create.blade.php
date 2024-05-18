@extends('dashboard.admin.layouts.master')
@php
    $data = isset($edit_data) ? $edit_data : '';
    $name = isset($data->name) ? $data->name : '';
    $phone = isset($data->phone) ? $data->phone : '';
    $email = isset($data->email) ? $data->email : '';
    $status = isset($data->status) ? $data->status : '';
    $id = isset($data->id) ? $data->id : '';
    $admin_type = isset($data->admin_type) ? $data->admin_type : '';
    $image = isset($data->image) && $data->image != '' ? $data->image : '';

@endphp

@section('admin_body')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ $id ? 'Edit Admin User' : 'Add New User Admin' }} </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Admin</a></li>
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
                                    Create Admin User
                                </h3>
                                <div class="card-tools">
                                    <ul class="nav nav-pills ml-auto">
                                        <li class="nav-item">
                                            <a class="btn btn-primary" href="{{ route('admin.admin_list') }}">Admin User
                                                List</a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ $id ? route('admin.admin_update', $id) : route('admin.admin_store') }}"
                                    method="POST" enctype="multipart/form-data">
                                    {{-- @if (Session::get('success'))
                                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                                    @endif
                                    @if (Session::get('fail'))
                                        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                                    @endif --}}
                                    @csrf

                                    <input type="hidden" value="{{ $admin_type }}" name="admin_type">
                                    <input type="hidden" name="image_id" value="{{ $image }}">
                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <label for="">Name</label> <span class="text-danger">*</span>
                                            <input type="text" name="name" class="form-control bg-light"
                                                placeholder="Name" value="{{ $name }}">
                                            <span class="text-danger">
                                                @error('name')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="">Phone</label><span class="text-danger">*</span>
                                            <input type="text" name="phone" class="form-control bg-light"
                                                placeholder="Phone" value="{{ $phone }}">
                                            <span class="text-danger">
                                                @error('phone')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>


                                        <div class="col-md-4">
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

                                        <div class="col-md-4 mt-3">
                                            <label for="">Photo <span class="text-warning">(Max: 1024
                                                    kb)</span></label>
                                            <input type="file" id="image" name="image"
                                                class="form-control bg-light " value="" accept="image/*">
                                            <span class="text-danger" id="msg_v">
                                                @error('image')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                            <div id="">
                                                <img id="show_image"
                                                    src="{{ $image != '' ? URL::to('storage/admin_image/' . $image) : asset('no_image.png') }}"
                                                    style="width: 200px;height:200px" class="rounded elevation-2 m-2"
                                                    alt="No Image">
                                            </div>
                                        </div>

                                        <div class="col-md-4 mt-3">
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
                                        @if ($admin_type != 5)
                                            <div class="col-md-4 mt-4 text-center pt-4">
                                                <input {{ $status == 1 ? 'checked' : '' }} name="status" class="form-control" type="checkbox" value="1" id="flexCheckDefault">
                                                <label class="form-check-label" for=""><b>Status</b></label>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col text-right pt-5">
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
    <script>
        image_validation("#image", "#show_image", "#msg_v", '1024', "Image Size Can't larger than 1024 KB")
    </script>
@endpush
