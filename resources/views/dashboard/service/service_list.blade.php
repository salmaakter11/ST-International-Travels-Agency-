@extends('dashboard.admin.layouts.master')

@section('admin_body')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Service List</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Service</a></li>
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

                                <h4 class="card-title">
                                    Service List &nbsp;
                                <span class='bg-success rounded px-1'>{{$active}} </span>&nbsp;
                                <span class='bg-warning rounded px-1'>{{$inactive}} </span>
                                </h4>
                                <div class="card-tools">
                                    <a class="btn btn-primary" href="{{ route('admin.service_create') }}">Add New Service </a>
                                </div>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered border-secondary datatable">
                                    <thead class='bg-secondary'>
                                        <tr>
                                            <th scope="col" class="text-center">#</th>
                                            <th scope="col">Service Name</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Update</th>
                                            <th scope="col" class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (isset($our_service))
                                            @foreach ($our_service as $key => $data)
                                                <tr>
                                                    <td scope="col" class="text-center">{{ $key + 1 }}</td>
                                                    <td scope="col" class="text-left">{{ $data->service_name }}</td>
                                                    <td scope="col" class="text-left">{{ $data->amount}}</td>
                                                    <td class="text-left">
                                                        @if ($data->status == 1)
                                                        <span class="bg-success rounded px-1">Active</span>
                                                        @else
                                                        <span class="bg-warning rounded px-1">Inactive</span>
                                                        @endif
                                                    </td>
                                                    <td scope="col" class="text-left" style="width: 120px;">
                                                        {{ $data->updated_name->name }} <br>
                                                        {{ date('d F Y', strtotime($data->updated_at)) }}
                                                    </td>
                                                    <td scope="col" class="text-center" class="text-center">
                                                    <a href="{{ route('admin.service_delete', $data->id) }}" class="delete_data btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>&nbsp;
                                                        <a href="{{ route('admin.service_edit', $data->id) }}" class="btn-sm btn-info"><i class="fas fa-edit text-light"></i> </a>


                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
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
