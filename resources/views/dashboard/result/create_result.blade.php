@extends('dashboard.admin.layouts.master')
@php
    $data = isset($result_type) ? $result_type : '';
    $result_type = isset($data->result_type) && $data->result_type != '' ? $data->result_type : '';
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
                        <h1 class="m-0">{{ $id ? 'Edit Result Type' : 'Add New Result Type' }} </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Result Type</a></li>
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
                                    Create Result Type
                                </h3>
                                <div class="card-tools">
                                            <a class="btn btn-primary" href="{{ route('admin.result_list') }}">Result Type
                                                List</a>
                                </div>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ $id ? route('admin.result_update', $id) : route('admin.result_store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12">
                                            <label for=""> Result Type</label>
                                            <input type="text" name="result_type" class="form-control bg-light"
                                                placeholder="Result Type" value="{{ $result_type }}">
                                            <span class="text-danger">
                                                @error('result_type')
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
