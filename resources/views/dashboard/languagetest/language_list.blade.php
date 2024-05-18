@extends('dashboard.admin.layouts.master')

@section('admin_body')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Language Test List</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Language Test</a></li>
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
                                    Language Test List &nbsp;
                                <span class='bg-success rounded px-1'>{{$active}} </span>&nbsp;
                                <span class='bg-warning rounded px-1'>{{$inactive}} </span>
                                </h4>
                                <div class="card-tools">
                                    <a class="btn btn-primary" href="{{ route('admin.language_create') }}">Add New Language Test </a>
                                </div>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered border-secondary datatable">
                                    <thead class='bg-secondary'>
                                        <tr>
                                            <th scope="col" class="text-center">#</th>
                                            <th scope="col">Language Test</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Update</th>
                                            <th scope="col" class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (isset($language))
                                            @foreach ($language as $key => $data)
                                                <tr>
                                                    <td scope="col" class="text-center">{{ $key + 1 }}</td>
                                                    <td scope="col" class="text-left">{{ $data->language_test }}</td>
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
                                                        <a href="{{ route('admin.language_delete', $data->id) }}" class="delete_data btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>&nbsp;
                                                        <a href="{{ route('admin.language_edit', $data->id) }}" class="btn-sm btn-info"><i class="fas fa-edit text-light"></i> </a>
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
