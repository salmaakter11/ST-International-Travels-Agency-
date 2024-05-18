@extends('dashboard.admin.layouts.master')
@push('admin_css')
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
@endpush
@section('admin_body')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Processing List</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Processing List</a></li>
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
                                <div class="">
                                    <form action="{{route('admin.processing_search_print')}}" target="_blank" method="post" id="submit_client_contact_form"
                                        autocomplete="off">
                                        @csrf
                                        <div class="row d-flex justify-content-between">
                                            <div class="col-md-3">
                                                <strong>From Date</strong>
                                                <input name="from_date" type="text" id="from_date"
                                                    value="{{ date('d-m-Y') }}" placeholder="dd-mm-yy"
                                                    class="form-control from_datepicker">
                                            </div>
                                            <div class="col-md-3">
                                                <strong>To Date</strong>
                                                <input name="to_date" type="text" id="to_date"
                                                    value="{{ date('d-m-Y') }}" placeholder="dd-mm-yy"
                                                    class="form-control to_datepicker">
                                            </div>
                                            <div class="col-md-3 text-right pt-4">
                                                <button class="btn btn-success search_btn" type="button">Search</button>
                                            </div>
                                            <div class="col-md-2 text-right pt-4">
                                                <button class="btn btn-warning" type="submit">Print(PDF)</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                Total : <span class="bg-success px-1 rounded" id="total_item">0</span>

                            </div><!-- /.card-header -->
                            <div class="card-body table-responsive-md">
                                <table class="table table-bordered search_datatable">
                                    <thead class='bg-secondary'>
                                        <tr>
                                            <th scope="col" class="text-center">#</th>
                                            <th scope="col" class="text-center">Date</th>
                                            <th scope="col" class="text-center" style="width: 20%">User Info</th>
                                            <th scope="col" class="text-center">Service</th>
                                            <th scope="col" class="text-center">Price</th>
                                            <th scope="col" class="text-center">Status</th>
                                            <th scope="col" class="text-center">Process by</th>
                                            <th scope="col" class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="addRow">
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


@push('admin_js')
    <script src="{{ asset('admin/datepicker/date_picker.js') }}"></script>
    <script>
        $(".from_datepicker", ).datepicker({
            uiLibrary: 'bootstrap4',
            format: 'dd-mm-yyyy',
            maxDate: new Date()
        });
        $(".to_datepicker", ).datepicker({
            uiLibrary: 'bootstrap4',
            format: 'dd-mm-yyyy',
            maxDate: new Date()


        });


        // Pending List Show

        $(document).ready(function() {
            if ($.fn.DataTable.isDataTable('.search_datatable')) {
                $('.search_datatable').DataTable().destroy();
            }
            $.ajax({
                async: true,
                type: "get",
                dataType: "json",
                url: "{{ route('admin.processing_list_show') }}",
                beforeSend: function() {
                    uiBlock()
                },
                success: function(res) {
                    pendingData(res)
                },
                error: function(error) {
                    error_message(error.responseJSON.message)
                    uiBlockStop()
                },
                complete: function() {}

            });
        });



        let pendingData = async (res) => {
            let data = ''
            let i = 0;
            $('#total_item').text(res.invoice.length)
            if (res.invoice.length != 0) {

                $.each(res.invoice, function(key, value) {
                    i++;
                    let id = value.id;
                    var d = new Date(value.created_at);

                    let processing_details_print = "{{ route('admin.processing_details_print', ':id') }}";
                    processing_details_print = processing_details_print.replace(':id', id);
                    let processing_details = "{{ route('admin.processing_details', ':id') }}";
                    processing_details = processing_details.replace(':id', id);
                    let processing_process = "{{ route('admin.processing_process', ':id') }}";
                    processing_process = processing_process.replace(':id', id);

                    let pending_cancel = "{{ route('admin.pending_cancel', ':id') }}";
                    pending_cancel = pending_cancel.replace(':id', id);
                    data += `
                            <tr>
                                <td scope="col" class="text-center">${i}</td>
                                <td scope="col" class="text-center"> ${d.getDate()+' '+(d.toLocaleString('default', { month: 'long' }))+' '+d.getFullYear()}</td>
                                <td scope="col">
                                 <strong>Name</strong>   : ${ value.clientf.name && value.clientf.name !=null ? value.clientf.name :''  }<br>
                                 <strong>Phone</strong>   : ${ value.clientf.phone && value.clientf.phone !=null ? value.clientf.phone :''  }<br>
                                 <strong>Email</strong>   : ${ value.clientf.email && value.clientf.email !=null ? value.clientf.email :''  }<br>
                                </td>
                                <td scope="col" class="text-center">${ value.service_name }</td>
                                <td scope="col" class="text-center">${ value.service_price }</td>
                                <td scope="col" class="text-center"><span class='bg-info px-1 rounded'>Processing</span></td>
                                <td scope="col" class="text-center">${ value.created_name.name && value.created_name.name  !=null ?value.created_name.name : ''}</td>

                                <td scope="col" class="text-center">
                                    <a target="_blank" href="${processing_details_print}" class="btn-sm btn-warning">Print</a>&nbsp;
                                    <a href="${processing_details}" class="btn-sm btn-secondary"><i class="fas fa-eye mt-3"></i></a> <br><br>
                                    <a href="${processing_process}" class="btn-sm btn-primary pending_process">Procesed</a>
                                    &nbsp;<a href="${pending_cancel}" class="h6 cancel_invoice"><i class="fa fa-times-circle bg-danger p-1 rounded" aria-hidden="true"></i></a>

                                </td>
                            </tr>
                            `;
                })
                uiBlockStop()

                $('#addRow').html(data);
                $(document).ready(function() {
                    var table = $('.search_datatable').DataTable({
                        "pageLength": 10,
                        "aLengthMenu": [
                            [10, 25, 50, 100, 200, 500, -1],
                            [10, 25, 50, 100, 200, 500, 1000]
                        ],
                    });
                });

            } else {
                data =
                    "<tr><td colspan='12' class='text-center'><h3>No Data Found</h3></td></tr>";
                uiBlockStop()
                $('#addRow').html(data);
            }
        }




        // Search Pending Process

        $(".search_btn").click(function() {
            if ($.fn.DataTable.isDataTable('.search_datatable')) {
                $('.search_datatable').DataTable().destroy();
            }
            event.preventDefault()
            var from_date = $('#from_date').val();
            var to_date = $('#to_date').val();

            $.ajax({
                async: true,
                type: "POST",
                dataType: "json",
                data: {
                    from_date: from_date,
                    to_date: to_date,
                },
                url: "{{ route('admin.processing_search') }}",
                beforeSend: function() {
                    uiBlock()
                },
                success: function(res) {
                    pendingData(res)
                },
                error: function(error) {
                    error_message(error.responseJSON.message)
                },
                complete: function() {
                    uiBlockStop()
                }
            });

        })
    </script>
      @include('dashboard.invoice.invoice_common_js')
@endpush
