@extends('dashboard.admin.layouts.master')

@section('admin_body')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            {{-- <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li> --}}
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <!-- ./col -->
                    <div class="col-lg-4 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $active_user }}</h3>

                                <p>Active Client</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </div>
                            <a href="{{ route('admin.user_list') }}" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ $inactive_user }}</h3>

                                <p>Inactive Client</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="{{ route('admin.user_list') }}" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <!-- small box -->
                        <div class="small-box bg-dark">
                            <div class="inner">
                                <h3>{{ $today_user }}</h3>

                                <p>Today's Client</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </div>
                            <a href="{{ route('admin.user_list') }}" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box" style="background-color: #D2D943">
                            <div class="inner">
                                <h3>{{ $last_month_pending_user }}</h3>

                                <p>Last Month Pending</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="{{ route('admin.pending_list') }}" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box" style="background-color: #915C83">
                            <div class="inner">
                                <h3>{{ $today_pending_user }}</h3>

                                <p>Today's Pending</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-industry" aria-hidden="true"></i>
                            </div>
                            <a href="{{ route('admin.pending_list') }}" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box" style="background-color: #008000">
                            <div class="inner">
                                <h3>{{ $last_month_processing_user }}</h3>

                                <p>Last Month Processing</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="{{ route('admin.processing_list') }}" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box" style="background-color: #8F9779">
                            <div class="inner">
                                <h3>{{ $today_processing_user }}</h3>

                                <p>Today's Processing</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                            </div>
                            <a href="{{ route('admin.processing_list') }}" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box" style="background-color: #72A0C1">
                            <div class="inner">
                                <h3>{{ $last_month_procesed_user }}</h3>

                                <p>Last Month Processed</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-male" aria-hidden="true"></i>
                            </div>
                            <a href="{{ route('admin.procesed_list') }}" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box" style="background-color: #3f5cc4">
                            <div class="inner">
                                <h3>{{ $today_procesed_user }}</h3>

                                <p>Today's Processed</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-user-circle" aria-hidden="true"></i>
                            </div>
                            <a href="{{ route('admin.procesed_list') }}" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box" style="background-color: #d7a3a3">
                            <div class="inner">
                                <h3>{{ $last_month_completed_user }}</h3>

                                <p>Last Month Finalized</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-user-plus" aria-hidden="true"></i>
                            </div>
                            <a href="{{ route('admin.finalized_list') }}" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box" style="background-color: #256263">
                            <div class="inner">
                                <h3>{{ $today_completed_user }}</h3>

                                <p>Today's Finalized</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-university" aria-hidden="true"></i>
                            </div>
                            <a href="{{ route('admin.finalized_list') }}" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{ $last_month_canceled_user }}</h3>

                                <p>Last Month Canceled </p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="{{ route('admin.cancel_list') }}" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-6">
                        <!-- small box -->
                        <div class="small-box" style="background-color: #00ff73">
                            <div class="inner">
                                <h3>{{ $today_canceled_user }}</h3>

                                <p>Today's Canceled </p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                            </div>
                            <a href="{{ route('admin.cancel_list') }}" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <div id="myPlot" style="width:100%;max-width:100%;"></div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
@push('admin_js')
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <script>
        let pending_data ="{{ $last_month_pending_user }}";
        let processing_data ="{{ $last_month_processing_user }}";
        let procesed_data ="{{ $last_month_procesed_user }}";
        let completed_data ="{{ $last_month_completed_user }}";
        let canceled_data ="{{ $last_month_canceled_user }}";

        var xArray = ["Pending", "Processing", "Procesed", "Completed", "Canceled"];
        var yArray = [pending_data, processing_data, procesed_data, completed_data, canceled_data];

        var layout = {
            title: "Last Month Service"
        };

        var data = [{
            labels: xArray,
            values: yArray,
            type: "pie"
        }];

        var options = {
            'width': 'auto',
            'height': 'auto'
        };

        Plotly.newPlot("myPlot", data, layout);
    </script>
@endpush
