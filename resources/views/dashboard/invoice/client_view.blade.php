@extends('dashboard.admin.layouts.master')

@php
    $data = isset($invoice) ? $invoice : '';
    $service_name = isset($data->service_name) ? $data->service_name : '';
    $service_price = isset($data->service_price) ? $data->service_price : '';
    $created_at = isset($data->created_at) && $data->created_at != '' ? $data->created_at : '';
    $status = isset($data->status) && $data->status != '' ? $data->status : '';
    $id = isset($data->id) ? $data->id : '';

    $name = isset($data->clientf->name) && $data->clientf->name != '' ? $data->clientf->name : '';
    $email = isset($data->clientf->email) && $data->clientf->email != '' ? $data->clientf->email : '';
    $phone = isset($data->clientf->phone) && $data->clientf->phone != '' ? $data->clientf->phone : '';
    $image = isset($data->clientf->image) && $data->clientf->image != '' ? $data->clientf->image : '';
    $dob = isset($data->clientf->dob) && $data->clientf->dob != '' ? $data->clientf->dob : '';

    $process_by = isset($data->created_name->name) && $data->created_name->name != '' ? $data->created_name->name : '';
    $updated_by = isset($data->updated_name->name) && $data->updated_name->name != '' ? $data->updated_name->name : '';
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
                                    {{-- <a class="btn btn-primary" href="{{ route('admin.pending_list') }}">Client pending list</a> --}}
                                </div>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="row px-3">
                                    <div class="col-sm-6 col-md-12"><strong></strong>
                                        <div id="">
                                            <img id="show_image"
                                                src="{{ $image != '' ? URL::to('storage/user/' . $image) : asset('no_image.png') }}"
                                                style="width: 150px;height:150px" class="rounded elevation-2 m-2"
                                                alt="No Image">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 mt-3"><strong>Apply Date</strong> :&nbsp {{date('d F Y', strtotime($created_at))}}</div>
                                    <div class="col-sm-6 col-md-4 mt-3"><strong>Client Name</strong> :&nbsp {{$name}}</div>
                                    <div class="col-sm-6 col-md-4 mt-3"><strong>Phone Number</strong> :&nbsp {{$phone}}</div>
                                    <div class="col-sm-6 col-md-4 mt-3"><strong>Email</strong> :&nbsp {{$email}}</div>
                                    <div class="col-sm-6 col-md-4 mt-3"><strong>Date of Birth</strong> :&nbsp {{$dob}}</div>
                                    {{-- <div class="col-sm-6 col-md-4 mt-3"><strong>Process by</strong> :&nbsp {{$process_by}}</div>
                                    <div class="col-sm-6 col-md-4 mt-3"><strong>Updated by</strong> :&nbsp {{$updated_by}}</div> --}}

                                    <div class="col-sm-6 col-md-4 mt-3"><strong>Status</strong> :&nbsp;
                                        @if ($status == 0)
                                            <span class="p-1 bg-rounded" style="background-color:#ffc107;">Pending</span>
                                        @elseif($status == 1)
                                            <span class="white_color p-1 bg-rounded" style="background-color:#17a2b8;">Processing</span>
                                        @elseif($status == 2)
                                            <span class="white_color p-1 bg-rounded" style="background-color:#007bff;">Procesed</span>
                                        @elseif($status == 3)
                                            <span class="white_color p-1 bg-rounded" style="background-color:#28a745;">Completed</span>
                                        @elseif($status == 4)
                                            <span class="white_color p-1 bg-rounded" style="background-color:#dc3545;">Canceled</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row px-3 mt-3">
                                    <div class="col-sm-6 col-md-4 mt-3"><strong>Service Name</strong> :&nbsp {{$service_name}}</div>
                                    <div class="col-sm-6 col-md-4 mt-3"><strong>Service Price</strong> :&nbsp {{$service_price}}</div>
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
