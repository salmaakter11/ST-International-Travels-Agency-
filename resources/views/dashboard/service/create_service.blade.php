@extends('dashboard.admin.layouts.master')
@php
    $data = isset($our_service) ? $our_service : '';
    $service_name = isset($data->service_name) && $data->service_name != '' ? $data->service_name : '';
    $amount = isset($data->amount) && $data->amount != '' ? $data->amount : '';
    $status = isset($data->status) && $data->status != '' ? $data->status : '';
    $id = isset($data->id) && $data->id != '' ? $data->id : '';

@endphp

@section('admin_body')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ $id ? 'Edit Service' : 'Add New Service' }} </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Service</a></li>
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
                                    Create Service
                                </h3>
                                <div class="card-tools">
                                    <a class="btn btn-primary" href="{{ route('admin.service_list') }}">Service List</a>
                                </div>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ $id ? route('admin.service_update', $id) : route('admin.service_store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12">
                                            <label for=""> Service Name</label>
                                            <input type="text" name="service_name" class="form-control bg-light"
                                                placeholder="Service Name" value="{{ $service_name }}">
                                            <span class="text-danger">
                                                @error('service_name')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <label for=""> Amount</label>
                                            <input type="text" name="amount" class="form-control bg-light"
                                                placeholder="Amount" value="{{ $amount}}">
                                            <span class="text-danger">
                                                @error('amount')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>

                                        <div class="col-md-4 col-sm-12 mt-4 text-center">
                                            <input {{$status == 1 ? 'checked' : '' }} name="status" class="form-control" type="checkbox" value="1">
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
