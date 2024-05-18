@extends('dashboard.admin.layouts.master')

@section('admin_body')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Management Admin </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Admin</a></li>
                            <li class="breadcrumb-item active">List</li>
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

                                @if (Session::has('error'))
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>{{ session::get('error') }}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @elseif(Session::has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>{{ session::get('success') }}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                                <h3 class="card-title">
                                    Admin List &nbsp;
                                    <span class='bg-success rounded px-1'>{{$active}} </span>&nbsp;
                                    <span class='bg-warning rounded px-1'>{{$inactive}} </span>
                                </h3>
                                <div class="card-tools">
                                    <ul class="nav nav-pills ml-auto">
                                        <li class="nav-item">
                                            <a class="btn btn-primary" href="{{ route('admin.admin_create') }}">Add New Admin
                                                User</a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered border-secondary datatable">
                                    <thead  class='bg-secondary'>
                                        <tr>
                                            <th scope="col" class="text-center">#</th>
                                            <th scope="col" class="text-center">Photo</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col" class="text-center">Phone</th>
                                            <th scope="col" class="text-center">Status</th>
                                            <th scope="col" class="text-center" class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($admin_list as $key=>$data)
                                            <tr>
                                                <td scope="col" class="text-center">{{$key+1}}</td>
                                                <td scope="col" class="text-left">
                                                    <img id="show_image"
                                                    src="{{ $data->image != '' ? URL::to('storage/admin_image/' . $data->image) : asset('no_image.png') }}"
                                                    style="width: 100px;height:100px" class="rounded elevation-2 m-2"
                                                    alt="No Image">
                                                </td>
                                                <td scope="col" class="text-left">{{ $data->name }}</td>
                                                <td scope="col" class="text-left">{{ $data->email }}</td>
                                                <td scope="col" class="text-center">{{ $data->phone }}</td>
                                                <td scope="col" class="text-center">
                                                    @if ($data->status == 1)
                                                        <span class="bg-success rounded px-1">Active</span>
                                                    @else
                                                        <span class="bg-warning rounded px-1">Inactive</span>
                                                    @endif
                                                </td>
                                                <td scope="col" class="text-center" class="text-center">
                                                    <a href="{{ route('admin.admin_edit', $data->id) }}" class="btn-sm btn-info"><i class="fas fa-edit text-light"></i></a>
                                                    @if ($data->admin_type != 5)
                                                    <a href="{{ route('admin.admin_delete', $data->id) }}" class="delete_data btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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
