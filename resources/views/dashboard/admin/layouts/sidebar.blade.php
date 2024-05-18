@php
    // $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName();
@endphp
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
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
            $logo_image = $admin_logos->logo_image;
        }
    @endphp
    <a href="{{ route('admin.dashboard') }}" class="brand-link"
        style="background: linear-gradient(90deg, rgb(14, 18, 130) 0%, rgb(1, 3, 4) 100%);">

        @if ($logo_image == '' || $logo_image == null)
            <img src="{{ asset('no_image.png') }}" alt="No Image" class="brand-image img-thumbnail bg-white elevation-3"
                style="opacity: .9">
        @else
            <img src="{{ URL::to('storage/logo_image', $logo_image) }}" alt="No Image"
                class="brand-image img-thumbnail bg-white elevation-2" style="opacity: .9">
        @endif
        <span
            class="brand-text text-light"><b>{{ isset($admin_logos->website_name) ? $admin_logos->website_name : 'No Name' }}</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="background: linear-gradient(90deg, rgb(14, 30, 59) 0%, rgb(4, 14, 19) 100%);">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-header">Dashboard</li>

                {{-- Manage Admin --}}
                <li
                    class="nav-item {{ Request::is('admin/manage-admin*') ? 'menu-open rounded menu-bg bg-dark' : '' }}">
                    <a href="#" class="nav-link">
                        &nbsp;<i class="fa fa-user" aria-hidden="true"></i>&nbsp;
                        <p>
                            Management Admin
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview sidebar_submenue">
                        <li class="nav-item">
                            <a href="{{ route('admin.admin_list') }}"
                                class="nav-link {{ $route === 'admin.admin_list' ? 'text-light' : '' }} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Admin User List</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.admin_create') }}"
                                class="nav-link {{ $route === 'admin.admin_create' ? 'text-light' : '' }} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Admin User</p>
                            </a>
                        </li>

                    </ul>
                </li>

                {{-- Manage User --}}
                <li class="nav-item {{ Request::is('admin/manage-user*') ? 'menu-open rounded menu-bg bg-dark' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="fa fa-users" aria-hidden="true"></i>&nbsp;
                        <p>
                            Management User
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview sidebar_submenue">
                        <li class="nav-item">
                            <a href="{{ route('admin.user_list') }}"
                                class="nav-link {{ $route === 'admin.user_list' ? 'text-light' : '' }} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>User List</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.user_create') }}"
                                class="nav-link {{ $route === 'admin.user_create' ? 'text-light' : '' }} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create User</p>
                            </a>
                        </li>

                    </ul>
                </li>



                {{-- Manage Service --}}
                <li
                    class="nav-item {{ Request::is('admin/manage_service*') ? 'menu-open rounded menu-bg bg-dark' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="ion ion-pie-graph"></i>&nbsp;
                        <p>
                            Service Manage
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview sidebar_submenue">
                        <li class="nav-item">
                            <a href="{{ route('admin.pending_list') }}"
                                class="nav-link {{ $route === 'admin.pending_list' ? 'text-light' : '' }} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pending List</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.processing_list') }}"
                                class="nav-link {{ $route === 'admin.processing_list' ? 'text-light' : '' }} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Processing List</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.procesed_list') }}"
                                class="nav-link {{ $route === 'admin.procesed_list' ? 'text-light' : '' }} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Procesed List</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.finalized_list') }}"
                                class="nav-link {{ $route === 'admin.finalized_list' ? 'text-light' : '' }} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Finalized List</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.cancel_list') }}"
                                class="nav-link {{ $route === 'admin.cancel_list' ? 'text-light' : '' }} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Canceled List</p>
                            </a>
                        </li>

                    </ul>
                </li>


                {{-- settings --}}
                <li class="nav-header">Settings</li>

                {{-- preferred-Country --}}
                <li
                    class="nav-item {{ Request::is('admin/preferred-Country*') ? 'menu-open rounded menu-bg bg-dark' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="fa fa-cog" aria-hidden="true"></i>&nbsp;
                        <p>
                            Preferred Country
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview sidebar_submenue">
                        <li class="nav-item">
                            <a href="{{ route('admin.country_list') }}"
                                class="nav-link {{ $route === 'admin.country_list' ? 'text-light' : '' }} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>PC List</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.country_create') }}"
                                class="nav-link {{ $route === 'admin.country_create' ? 'text-light' : '' }} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>PC Create</p>
                            </a>
                        </li>

                    </ul>
                </li>

                {{-- education-level --}}
                <li
                    class="nav-item {{ Request::is('admin/education-level*') ? 'menu-open rounded menu-bg bg-dark' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="fa fa-cog" aria-hidden="true"></i>&nbsp;
                        <p>
                            Education Level
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview sidebar_submenue">
                        <li class="nav-item">
                            <a href="{{ route('admin.education_list') }}"
                                class="nav-link {{ $route === 'admin.education_list' ? 'text-light' : '' }} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>EL List</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.education_create') }}"
                                class="nav-link {{ $route === 'admin.education_create' ? 'text-light' : '' }} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>EL Create</p>
                            </a>
                        </li>

                    </ul>
                </li>
                {{-- Result Type-level --}}
                <li
                    class="nav-item {{ Request::is('admin/result-type*') ? 'menu-open rounded menu-bg bg-dark' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="fa fa-cog" aria-hidden="true"></i>&nbsp;
                        <p>
                            Result Type
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview sidebar_submenue">
                        <li class="nav-item">
                            <a href="{{ route('admin.result_list') }}"
                                class="nav-link {{ $route === 'admin.result_list' ? 'text-light' : '' }} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>RT List</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.result_create') }}"
                                class="nav-link {{ $route === 'admin.result_create' ? 'text-light' : '' }} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>RT Create</p>
                            </a>
                        </li>

                    </ul>
                </li>
                {{-- Language Test-level --}}
                <li
                    class="nav-item {{ Request::is('admin/language-test*') ? 'menu-open rounded menu-bg bg-dark' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="fa fa-cog" aria-hidden="true"></i>&nbsp;
                        <p>
                            Language Test
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview sidebar_submenue">
                        <li class="nav-item">
                            <a href="{{ route('admin.language_list') }}"
                                class="nav-link {{ $route === 'admin.language_list' ? 'text-light' : '' }} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>LT List</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.language_create') }}"
                                class="nav-link {{ $route === 'admin.language_create' ? 'text-light' : '' }} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>LT Create</p>
                            </a>
                        </li>

                    </ul>
                </li>
                {{-- Service --}}
                <li class="nav-item {{ Request::is('admin/service*') ? 'menu-open rounded menu-bg bg-dark' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="fa fa-cog" aria-hidden="true"></i>&nbsp;
                        <p>
                            Service
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview sidebar_submenue">
                        <li class="nav-item">
                            <a href="{{ route('admin.service_list') }}"
                                class="nav-link {{ $route === 'admin.service_list' ? 'text-light' : '' }} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Service List</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.service_create') }}"
                                class="nav-link {{ $route === 'admin.service_create' ? 'text-light' : '' }} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Service Create</p>
                            </a>
                        </li>

                    </ul>
                </li>
                {{-- logo --}}
                <li class="nav-item {{ Request::is('admin/logo*') ? 'menu-open rounded menu-bg bg-dark' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="fa fa-cog" aria-hidden="true"></i>&nbsp;
                        <p>
                            Logo & Web Title
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview sidebar_submenue">
                        <li class="nav-item">
                            <a href="{{ route('admin.logo_list') }}"
                                class="nav-link {{ $route === 'admin.logo_list' ? 'text-light' : '' }} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>LWT List</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.logo_create') }}"
                                class="nav-link {{ $route === 'admin.logo_create' ? 'text-light' : '' }} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>LWT Create</p>
                            </a>
                        </li>

                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <!-- /.sidebar -->
</aside>
