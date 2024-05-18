<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ST International</title>
    @php
        $admin_logos = '';
        $logo_image = '';
        if (
            count(
                DB::table('logo_titles')
                    ->where('status', '1')
                    ->get(),
            ) != 0
        ) {
            $admin_logos = DB::table('logo_titles')->first();
            $favicon = $admin_logos->favicon;
        }
    @endphp

    @if (isset($favicon))
        <link rel="icon" href="{!! URL::to('storage/favicon', $favicon) !!}" />
    @else
        <link rel="icon" href="{{ asset('no_image.png') }}" />
    @endif

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('admin') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('admin') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('admin') }}/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin') }}/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('admin') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('admin') }}/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('admin') }}/plugins/summernote/summernote-bs4.min.css">

    {{-- Datatable --}}
    {{-- Datatable --}}
    <link rel="stylesheet" href="{{ asset('admin/datatable/datatable.css') }}">
    <link rel="stylesheet" href="{{ asset('admin') }}/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('admin/custom/common.css') }}">

    <style>
        .loading {
            z-index: 1053;
            position: absolute;
            top: 0;
            left: -5px;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.502);
            display: block;
        }

        .loading_content {
            position: fixed;
            border: 30px solid #ffffff;
            border-top: 30px solid #25d1fc;
            border-radius: 50%;
            width: 50px;
            top: 50%;
            left: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg)
            }
        }
    </style>

    @stack('admin_css')

    <!-- jQuery -->
    <script src="{{ asset('admin') }}/plugins/jquery/jquery.min.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <div id="loading">
            <div id="loading_content">

            </div>
        </div>

        <!-- Navbar -->
        @include('dashboard.admin.layouts.topbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('dashboard.admin.layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->


        @yield('admin_body')


        <!-- /.content-wrapper -->
        @include('dashboard.admin.layouts.footer')
    </div>
    <!-- ./wrapper -->


    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('admin') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="{{ asset('admin') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="{{ asset('admin') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="{{ asset('admin') }}/plugins/chart.js/Chart.min.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('admin') }}/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('admin') }}/plugins/moment/moment.min.js"></script>
    <script src="{{ asset('admin') }}/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('admin') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="{{ asset('admin') }}/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('admin') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin') }}/js/adminlte.js"></script>
    <script src="{{ asset('admin/sweetalert.js') }}"></script>


    {{-- Datatable --}}
    <script src="{{ asset('admin/datatable/datatable.js') }}"></script>
    {{-- Select2 --}}
    <script src="{{ asset('admin') }}/plugins/select2/js/select2.full.min.js"></script>
    <script src="{{ asset('admin/custom/common.js') }}"></script>


    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })

        $(function() {
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                },
            });

            if ("{{ session()->get('success') }}") {
                Toast.fire({
                    icon: 'success',
                    title: "{{ session()->get('success') }}",
                    background: '#e6fdfa',
                    color: '#181317',
                    iconColor: '#07474a',

                })
            } else if ("{{ session()->get('error') }}") {
                Toast.fire({
                    icon: 'error',
                    title: "{{ session()->get('error') }}",
                    background: '#de2929',
                    color: '#ffffff',
                    iconColor: '#ffffff',
                })
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            var table = $('.datatable').DataTable();
        });
    </script>

    <script>
        $(document).on('click', '.delete_data', function(e) {
            e.preventDefault()
            let url = $(this).attr("href");

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't to Delete This!",
                icon: 'warning',
                showCancelButton: true,
                cancelButtonColor: '#3085d6',
                confirmButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No',
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                    window.location.href = url
                }
            })

        })



        //Success Message
        const success_message = (message = '') => {

            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter',
                        Swal.stopTimer)
                    toast.addEventListener('mouseleave',
                        Swal.resumeTimer)
                },
            });

            Toast.fire({
                icon: 'success',
                title: message,
                background: '#e6fdfa',
                color: '#181317',
                iconColor: '#07474a',

            })
        }


        const error_message = (message = '') => {

            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter',
                        Swal.stopTimer)
                    toast.addEventListener('mouseleave',
                        Swal.resumeTimer)
                },
            });

            Toast.fire({
                icon: 'error',
                title: message,
                background: '#de2929',
                color: '#ffffff',
                iconColor: '#ffffff',
            })


        }
    </script>

    @stack('admin_js')

</body>

</html>
