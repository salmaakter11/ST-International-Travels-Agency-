<nav class="main-header navbar navbar-expand navbar-white navbar-light"
    style="background: linear-gradient(90deg, rgb(14, 86, 130) 0%, rgb(17, 23, 103) 100%);">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link text-light" data-widget="pushmenu" href="#" role="button"><i
                    class="fas fa-bars"></i></a>
        </li>
    </ul>
    <strong class="text-light"><i>{{ date('d F Y h:i a') }}</i></strong>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="" style="position: relative;">
                @php
                    $login_data = DB::table('admins as a')
                        ->where('a.id', Auth::user()->id)
                        ->select('a.image')
                        ->first();
                @endphp

                @if ($login_data->image != '')
                    <img src="{{ URL::to('/storage//admin_image/' . Auth::user()->image) }}"
                        style="width: 30px;height:30px" class="img-circle elevation-2" alt="User Image">
                @else
                    <img src="{{ asset('no_image.png') }}" style="width: 30px;height:30px"
                        class="img-circle elevation-2" alt="User Image">
                @endif

                &nbsp; <span class="text-light">{{ Auth::user()->name }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                <div class="media">
                    <div class="media-body">
                        <h1 class="text-center"><a href="{{ route('admin.profile.view', Auth::user()->id) }}"
                                style="width: 100%;" class="btn btn-secondary py-1 mb-2">Profile</a></h1>
                        <h1 class="text-center"><a href="{{ route('admin.profile.change_password', Auth::user()->id) }}"
                                style="width: 100%;" class="btn btn-secondary py-1 mb-2">Change Password</a></h1>
                        <h1 class="text-center"><a href="{{ route('admin.logout') }}" style="width: 100%;"
                                class="btn btn-danger py-1"
                                onclick="event.preventDefault(),document.getElementById('logout-form').submit()">Logout</a>
                        </h1>
                        <form action="{{ route('admin.logout') }}" method="POST" id="logout-form" class="d-none">@csrf
                        </form>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</nav>
