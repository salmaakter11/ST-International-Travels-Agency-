@extends('dashboard.admin.layouts.master')
@push('admin_css')
@endpush

@section('admin_body')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Management User </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">User</a></li>
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
                                    User List &nbsp;
                                    <span class='bg-success rounded px-1'>{{$active}} </span>&nbsp;
                                    <span class='bg-warning rounded px-1'>{{$inactive}} </span>
                                </h3>
                                <div class="card-tools">
                                    <ul class="nav nav-pills ml-auto">
                                        <li class="nav-item">
                                            <a class="btn btn-primary" href="{{ route('admin.user_create') }}">Add New
                                                User</a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered border-secondary" id="y_datatable">
                                    <thead class='bg-secondary'>
                                        <tr>
                                            <th scope="col" class="text-center" class="text-center">#</th>
                                            <th scope="col" class="text-center">image</th>
                                            <th scope="col" class="text-center">Name</th>
                                            <th scope="col" class="text-center">Email</th>
                                            <th scope="col" class="text-center" class="text-center">Phone</th>
                                            <th scope="col" class="text-center" class="text-center">Status</th>
                                            <th scope="col" class="text-center" class="text-center">Created At</th>
                                            <th scope="col" class="text-center" class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

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


    {{-- Modal --}}
    <div class="modal fade" id="myModal" style="top: 10%" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header bg-secondary py-1">

                    <h5 class="modal-title" id="addT">Apply Service</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row mt-3 container">
                        <div class="col-md-6"><strong>Name</strong> : <span id="name"></span></div>
                        <div class="col-md-6"><strong>Phone</strong> : <span id="phone"></span></div>
                        <div class="col-md-6"><strong>Email</strong> : <span id="email"></span> </div>
                    </div>
                    <input type="hidden" id="client_id" id="client_id">
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <label for="">Service</label><span class="text-danger">*</span>
                            <select class="custom-select search_box_modal" id="service" name="service">
                                <option value="">Please Select Service</option>

                            </select>
                            <span class="text-danger" id="service_idError"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-right">
                            <button class="btn btn-info mt-4" onclick="applyService()"> Apply</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('admin_js')
    <script>
        $(document).ready(function() {
            $('.search_box_modal').select2({
                theme: 'bootstrap4',
                dropdownParent: $('#myModal')
            });
        });
    </script>
    <script>
        //Fetch Data
        $(function() {
            var table = $('#y_datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.user_list') }}",
                "pageLength": 10,
                "aLengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, 200]
                ],
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        'orderable': false,
                        'searchable': false
                    },
                    {
                        className: "text-center",
                        data: 'image',
                        render: function(data, type, full, meta) {

                            let img = data ?
                                `<img src="{{ URL::to('/storage') }}/image_thum/${data}"  style="width: 90px;height:90px" class='img-thumbnail rounded elevation-2' />` :
                                `<img src="{{ asset('no_image.png') }}" style="width: 90px;height:90px" class='img-thumbnail rounded elevation-2' alt="No Image">`;
                            return `${img}`;
                        },
                        orderable: false
                    },
                    {
                        data: 'name',
                        name: 'name',
                    },
                    {
                        data: 'email',
                        name: 'email',
                    },
                    {
                        className: "text-center",
                        data: 'phone',
                        name: 'phone',
                    },
                    {
                        className: "text-center",
                        data: 'status',
                        render: function(data, type, full, meta) {
                            let status = '';
                            if (data == 1) {
                                status = '<span class="bg-success rounded px-1">Active</span>'
                            } else if (data == 0) {
                                status = '<span class="bg-warning rounded px-1">Inactive</span>'
                            }
                            return `${status}`;
                        },
                        orderable: false
                    },
                    {
                        className: "text-center",
                        data: 'created_at',
                        render: function(data, type, full, meta) {
                            var d = new Date(data);
                            return `${d.getDate()+' '+(d.toLocaleString('default', { month: 'long' }) + 1)+' '+d.getFullYear()}`;
                        },
                        orderable: false
                    },
                    {
                        className: "text-center",
                        data: 'action',
                        render: function(data, type, full, meta) {
                            var user_view = data.user_view;
                            var user_apply_service = data.user_apply_service;
                            var editUrl = data.editUrl;
                            var delete_url = data.deleteUrl;

                            var option = `<div class="dropdown dropleft">
                                    <button class="btn-sm btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select One</button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="${user_view}"><button  class="btn btn-sm btn-block btn-warning">View</button></a>
                                      <a class="dropdown-item" onclick='open_service("${user_apply_service}")'><button  class="btn btn-sm btn-block btn-primary">Apply Service</button></a>
                                      <a class="dropdown-item" href="${editUrl}"><button  class="btn btn-sm btn-block btn-info">Edit</button></a>
                                      <a class="dropdown-item delete_data" href="${delete_url}"><button  class="btn btn-sm btn-block btn-danger">Delete</button></a>
                                    </div>

                                  </div>`;

                            return `${option}`;
                        },
                        orderable: false
                    },

                ]
            })
        })
    </script>


    <script>
        // Apply Service
        let applyService = async () => {
            event.preventDefault()
            $('#service_idError').text('');
            let client_id = $("#client_id").val()
            let service = $("#service").val()
            let url = "{{ route('admin.user_apply_service_store') }}"
            $.ajax({
                async: true,
                type: "POST",
                dataType: "json",
                data: {
                    client_id: client_id,
                    service: service
                },
                url: url,
                beforeSend: function() {
                    uiBlock()
                },
                success: function(data) {
                    success_message(data.message)
                    $('#myModal').modal('hide');
                },
                error: function(error) {
                    $('#service_idError').text(error.responseJSON.errors.service);

                },
                complete: function() {
                    uiBlockStop()

                }

            });
        }




        // {{-- Service MOdal Open --}}
        let open_service = async (url) => {
            event.preventDefault()
            $('#service_idError').text('');
            $.ajax({
                type: "get",
                dataType: "json",
                url: url,
                beforeSend: function() {
                    uiBlock()
                },
                success: function(res) {
                    $("#myModal").modal();

                    $("#client_id").val(res.users.id ? res.users.id : '')
                    $("#name").text(res.users.name ? res.users.name : 'No Name')
                    $("#phone").text(res.users.phone ? res.users.phone : 'No phone')
                    $("#email").text(res.users.email ? res.users.email : 'No email')

                    let service = "<option value=''>Please Select Service</option>";
                    let j = 0;
                    $.each(res.service, function(key, value) {
                        j++
                        service +=
                            `<option value="${value.id} ">${j} .${value.service_name}--(Amount : ${value.amount}) </option>`
                    })
                    $('#service').html(service);

                },
                error: function(error) {

                },
                complete: function() {
                    uiBlockStop()
                }

            });

        }
    </script>
@endpush
