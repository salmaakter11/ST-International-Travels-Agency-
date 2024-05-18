@extends('dashboard.admin.layouts.master')
@php
    $data = isset($pre_logo) ? $pre_logo : '';
    $id = isset($data->id) && $data->id != '' ? $data->id : '';
    $website_name = isset($data->website_name) && $data->website_name != '' ? $data->website_name : '';
    $logo_image = isset($data->logo_image) && $data->logo_image != '' ? $data->logo_image : '';
    $favicon = isset($data->favicon) && $data->favicon != '' ? $data->favicon : '';
    $address = isset($data->address) && $data->address != '' ? $data->address : '';
    $contact_number = isset($data->contact_number) && $data->contact_number != '' ? $data->contact_number : '';
    $email = isset($data->email) && $data->email != '' ? $data->email : '';
    $status = isset($data->status) && $data->status != '' ? $data->status : '';
@endphp

@section('admin_body')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ $id ? 'Edit LWT' : 'Add New LWT' }} </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">LWT</a></li>
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
                                    Create LWT
                                </h3>
                                <div class="card-tools">
                                            <a class="btn btn-primary" href="{{ route('admin.logo_list') }}">LWT
                                                List</a>
                                </div>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ $id ? route('admin.logo_update', $id) : route('admin.logo_store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{$logo_image }}" name="previous_image">
                                    <input type="hidden" value="{{$favicon }}" name="previous_favicon">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12">
                                            <label for="">Website name</label>
                                            <input type="text" name="website_name" class="form-control bg-light"
                                                placeholder="Website name" value="{{ $website_name }}">
                                            <span class="text-danger">
                                                @error('website_name')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>

                                        <div class="col-md-4 col-sm-12">
                                            <label for="">Contact Number</label>
                                            <input type="text" name="contact_number" class="form-control bg-light"
                                                placeholder="Contact number" value="{{ $contact_number }}">
                                            <span class="text-danger">
                                                @error('contact_number')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>

                                        <div class="col-md-4 col-sm-12">
                                            <label for="">Email</label>
                                            <input type="text" name="email" class="form-control bg-light"
                                                placeholder="Enter email" value="{{ $email }}">
                                            <span class="text-danger">
                                                @error('email')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-3">
                                            <label for="">Address</label>
                                            <input type="text" name="address" class="form-control bg-light"
                                                placeholder="address" value="{{ $address }}">
                                            <span class="text-danger">
                                                @error('address')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-3">
                                            <label for="">Logo image</label>
                                            <input type="file" name="logo_image" id="logo_image_id" class="form-control bg-light">
                                            <span class="text-danger" id="error_show">
                                                @error('logo_image')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                            <div class="mt-2 text-right">
                                                <img id="show_logo_image"
                                                    src="{{ $logo_image != '' ? URL::to('storage/logo_image/' . $logo_image) : asset('no_image.png') }}"
                                                    style="width: 120px;height:120px" class="rounded elevation-2 m-2"
                                                    alt="No Image">
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-12 mt-3">
                                            <label for="">Favicon <span class="text-warning">(Supported format only '.ico')</span></label>
                                            <input type="file" name="favicon" id="favicon_id" class="form-control bg-light">
                                            <span class="text-danger" id="error_favicon">
                                                @error('favicon')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                            @if ($id)
                                            <div class="mt-2 text-right">
                                                <img id="show_favicon"
                                                    src="{{ $favicon != '' ? URL::to('storage/favicon/' . $favicon) : asset('no_image.png') }}"
                                                    style="width: 120px;height:120px" class="rounded elevation-2 m-2"
                                                    alt="No Image">
                                            </div>
                                            @endif
                                        </div>

                                        <div class="col-md-4 col-sm-12 mt-5 text-center">
                                            <input {{$status == 1 ? 'checked' : '' }} name="status" class="form-control mt-4" type="checkbox" value="1">
                                            <label class="form-check-label" for=""><strong>Status</strong></label>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col text-right">
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
    <script >
        image_validation("#logo_image_id", "#show_logo_image", "#error_show", '1024', "Image Size Can't larger than 1024 KB")
    </script>
@endpush
