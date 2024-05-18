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

<body style="background: rgb(7, 7, 48)">

    <div class="container">
        <div class="row d-flex justify-content-center" style="margin-top: 13%">
            <div class="col-lg-5">

                <div class="card">
                    <div class="card-header text-center">
                        <h3>Admin Login </h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.login_check')}}" method="POST" >
                            @csrf
                            @if (Session::has('error'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>{{session::get('error')}}</strong>
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              @elseif(Session::has('success'))
                              <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{session::get('success')}}</strong>
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                            @endif

                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" name="email" class="form-control form-control-lg"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                                    <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control form-control-lg"
                                    placeholder="Password">
                                    <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                            </div>

                            <div class="form-group">
                                <div class="captcha">
                                    <span>{!! captcha_img('math') !!}</span>
                                    <button type="button" class="btn btn-danger" class="reload" id="reload">
                                        &#x21bb;
                                    </button>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="text" name="captcha" class="form-control form-control"
                                placeholder="Enter captcha">
                            <span class="text-danger">
                                @error('captcha')
                                    {{ $message }}
                                @enderror
                            </span>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Remember me</label>
                            </div>

                            <div class="form-group text-right">
                                <button type="submit" class="btn px-3 btn-dark">Log in</button>
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

        <script type="text/javascript">
            $('#reload').click(function () {
                $.ajax({
                    type: 'GET',
                    url: "{{route('admin.reloadCaptcha')}}",
                    success: function (data) {
                        $(".captcha span").html(data.captcha);
                    }
                });
            });

            </script>

</body>

</html>
