<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('admin') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin') }}/css/adminlte.min.css">
</head>

<body style="background: rgb(48, 7, 37)">

    <div class="container">
        <div class="row d-flex justify-content-center" style="margin-top: 13%">
            <div class="col-lg-8">

                <div class="card">
                    <div class="card-header text-center">
                        <h3>User Registration </h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('register_store')}}" method="POST">
                            @csrf
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
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Name</label><span class="text-danger">*</span>
                                    <input type="text" name="name" class="form-control form-control-lg"
                                        aria-describedby="nameHelp" placeholder="Enter name">
                                    <span class="text-danger">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Phone</label><span class="text-danger">*</span>
                                    <input type="text" name="phone" class="form-control form-control-lg"
                                        aria-describedby="phoneHelp" placeholder="Enter phone">
                                    <span class="text-danger">
                                        @error('phone')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Email</label><span class="text-danger">*</span>
                                    <input type="email" name="email" class="form-control form-control-lg"
                                        aria-describedby="emailHelp" placeholder="Enter email">
                                    <span class="text-danger">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Password</label><span class="text-danger">*</span>
                                    <input type="password" name="password" class="form-control form-control-lg"
                                        placeholder="Password">
                                    <span class="text-danger">
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Confirm Password</label><span class="text-danger">*</span>
                                    <input type="password" name="confirm_password" class="form-control form-control-lg"
                                        placeholder="Confirm Password">
                                    <span class="text-danger">
                                        @error('confirm_password')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>

                            <div class="form-group text-right">
                                <a href="{{route('login')}}">Already have an Account</a> <button type="submit"
                                    class="btn px-3 btn-dark">Sign Up</button>
                            </div>

                        </form>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div>
        <script src="{{ asset('admin') }}/plugins/jquery/jquery.min.js"></script>
        <script src="{{ asset('admin') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
