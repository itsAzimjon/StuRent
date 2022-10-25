<!DOCTYPE html>
<html lang="en">
    <!-- Mirrored from template.doccure.io/html/template/admin/index.html by HTTraQt Website Copier/1.x [Karbofos 2012-2017] Sha, 24 Sen 2022 16:22:34 GMT -->
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=0"
        />
        <title>Admin</title>

        {{-- <link rel="shortcut icon" href="{{ asset('asl_admin/img/favicon.png')}}" /> --}}

        <link rel="stylesheet" href="{{ asset('asl_admin/css/bootstrap.min.css')}}" />

        <link
            rel="stylesheet"
            href="{{ asset('asl_admin/plugins/fontawesome/css/fontawesome.min.css')}}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('asl_admin/plugins/fontawesome/css/all.min.css')}}"
        />

        <link rel="stylesheet" href="{{ asset('asl_admin/css/feather.css')}}" />

        <link
            rel="stylesheet"
            href="{{ asset('asl_admin/plugins/select2/css/select2.min.css')}}"
        />

        <link
            rel="stylesheet"
            href="{{ asset('asl_admin/plugins/owl-carousel/owl.carousel.min.css')}}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('asl_admin/plugins/datatables/datatables.min.css')}}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('asl_admin/plugins/daterangepicker/daterangepicker.css')}}"
        />

        <link rel="stylesheet" href="{{ asset('asl_admin/css/style.css')}}" />
    </head>
    <body>
        <div class="main-wrapper">
            <div class="header">
                <div class="header-left">
                    <a href="/admin" class="logo">
                        <img src="{{ asset('logo.png')}}" alt="logo" />
                    </a>
                    <a href="index.html" class="logo logo-small">
                        <font style="font-size:2rem;">Z</font>
                        {{-- <img
                            src="{{ asset('asl_admin/img/logo-small.png')}}"
                            alt="Logo"
                            width="30"
                            height="30"
                        /> --}}
                    </a>
                    <a href="javascript:void(0);" id="toggle_btn">
                        <i class="feather-chevrons-left"></i>
                    </a>
                </div>

                
                <a class="mobile_btn" id="mobile_btn">
                    <i class="fas fa-bars"></i>
                </a>

                <ul class="nav nav-tabs user-menu">
                    <li class="nav-item">
                        <a
                            href="#"
                            id="dark-mode-toggle"
                            class="dark-mode-toggle"
                        >
                            <i class="feather-sun light-mode"></i
                            ><i class="feather-moon dark-mode"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown has-arrow logged-item">
                        <a href="#" class="dropdown-toggle nav-link " style="color: black;text-transform: capitalize;" data-bs-toggle="dropdown" aria-expanded="false">
                            {{__('key.lang')}}
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" style="width: min-content;min-width:100px;">
                            <a class="dropdown-item" href="/lang/uz">Uz</a>
                            <a class="dropdown-item" href="/lang/en">Eng</a>
                            <a class="dropdown-item" href="/lang/ru">Ru</a>
                            
                            
                        </div>
                    </li>
                    <li class="nav-item dropdown main-drop">
                        <a
                            href="#"
                            class="dropdown-toggle nav-link"
                            data-bs-toggle="dropdown"
                        >
                            <span class="user-img">
                                <img
                                    src="{{asset('assets/avatar.jpg')}}"
                                    alt=""
                                />
                                <span class="status online"></span>
                            </span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="user-header">
                                <div class="avatar avatar-sm">
                                    <img
                                        src="{{asset('assets/avatar.jpg')}}"
                                        alt="User Image"
                                        class="avatar-img rounded-circle"
                                    />
                                </div>
                                <div class="user-text">
                                    <h6>{{Auth::user()->name}}</h6>
                                    <p class="text-muted mb-0">Administrator</p>
                                </div>
                            </div>
                            <a class="dropdown-item" href="/my"
                                ><i class="feather-user me-1"></i>Admindan chiqish</a
                            >
                            {{-- <a class="dropdown-item" href="profile.html"
                                ><i class="feather-edit me-1"></i> Edit
                                Profile</a
                            >
                            <a
                                class="dropdown-item"
                                href="account-settings.html"
                                ><i class="feather-sliders me-1"></i> Account
                                Settings</a
                            >
                            <hr class="my-0 ms-2 me-2" />
                            <a class="dropdown-item" href="login.html"
                                ><i class="feather-log-out me-1"></i> Logout</a
                            > --}}
                        </div>
                    </li>
                </ul>
            </div>

            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
                    <div id="sidebar-menu" class="sidebar-menu">
                        <ul>
                            <li class="menu-title"><span>Main</span></li>
                            <li class="{{ (request()->route()->uri=='admin' ? 'active' : '') }}">
                                <a href="/admin"
                                    ><i class="feather-grid"></i>
                                    <span>Dashboard</span></a
                                >
                            </li>
                            
                            <li class="{{ (request()->route()->uri=='admin/category' ? 'active' : '') }}">
                                <a href="/admin/category"
                                    ><i class="feather-package"></i>
                                    <span>{{__('key.qulay')}}</span></a
                                >
                            </li>
                            <li class="{{ (request()->route()->uri=='admin/shaxar' ? 'active' : '') }}">
                                <a href="/admin/shaxar"
                                    ><i class="feather-package"></i>
                                    <span>{{__('key.shaxar')}}</span></a
                                >
                            </li>
                            <li class="{{ (request()->route()->uri=='admin/mahalla' ? 'active' : '') }}">
                                <a href="/admin/mahalla"
                                    ><i class="feather-package"></i>
                                    <span>{{__('key.mahalla')}}</span></a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            @yield('content')
        </div>

        <script src="{{ asset('asl_admin/js/jquery-3.6.0.min.js')}}"></script>

        <script src="{{ asset('asl_admin/js/bootstrap.bundle.min.js')}}"></script>

        <script src="{{ asset('asl_admin/js/feather.min.js')}}"></script>

        <script src="{{ asset('asl_admin/plugins/select2/js/select2.min.js')}}"></script>

        <script src="{{ asset('asl_admin/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

        <script src="{{ asset('asl_admin/plugins/owl-carousel/owl.carousel.min.js')}}"></script>

        <script src="{{ asset('asl_admin/plugins/apexchart/apexcharts.min.js')}}"></script>
        <script src="{{ asset('asl_admin/plugins/apexchart/chart-data.js')}}"></script>
        <script src="{{ asset('asl_admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('asl_admin/plugins/datatables/datatables.min.js')}}"></script>
        <script src="{{ asset('asl_admin/js/moment.min.js')}}"></script>
        <script src="{{ asset('asl_admin/plugins/daterangepicker/daterangepicker.js')}}"></script>

        <script src="{{ asset('asl_admin/js/script.js')}}"></script>
        @yield('script')
    </body>

    <!-- Mirrored from template.doccure.io/html/template/admin/index.html by HTTraQt Website Copier/1.x [Karbofos 2012-2017] Sha, 24 Sen 2022 16:23:59 GMT -->
</html>
