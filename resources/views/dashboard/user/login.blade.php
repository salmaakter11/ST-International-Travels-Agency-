@extends('frontend.master')

@section('fontend_body')
    <main>
        <section>
            <div class="row d-flex justify-content-center" style="margin-top: 3%">
                <div class="col-lg-5">

                    <div class="card">
                        <div class="card-header text-center">
                            <h3>User Login </h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('login_check') }}" method="POST">
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

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label><span class="text-danger">*</span>
                                    <input type="email" name="email" class="form-control form-control-lg"
                                        aria-describedby="emailHelp" placeholder="Enter email">
                                    <span class="text-danger">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label><span class="text-danger">*</span>
                                    <input type="password" name="password" class="form-control form-control-lg"
                                        placeholder="Password">
                                    <span class="text-danger">
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-group mt-3">
                                    <div class="captcha">
                                        <span>{!! captcha_img('math') !!}</span>
                                        <button type="button" class="btn btn-danger" class="reload" id="reload">
                                            &#x21bb;
                                        </button>
                                    </div>
                                </div>

                                <div class="form-group mt-3">
                                    <input type="text" name="captcha" class="form-control form-control-lg"
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
                                    <a href="{{ route('register') }}">Create New Account</a> &nbsp;&nbsp; <button
                                        type="submit" class="btn px-3 btn-dark">Log in</button>
                                </div>

                            </form>
                        </div>
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div>
        </section>
    </main>
@endsection
@push('frontend_js')
    <script type="text/javascript">
        $('#reload').click(function() {
            $.ajax({
                type: 'GET',
                url: "{{ route('reloadCaptcha') }}",
                success: function(data) {
                    $(".captcha span").html(data.captcha);
                }
            });
        });
    </script>
@endpush
