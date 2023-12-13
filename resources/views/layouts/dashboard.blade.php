<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>
    <!--favicon-->
    <link rel="icon" href="{{ asset('assets/images/favicon-32x32.png') }}" type="image/png">

    <!--plugins-->
    <link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/metismenu/metisMenu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/metismenu/mm-vertical.css') }}">
    @stack('custom-css')
    <!--bootstrap css-->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
    <!--main css-->
    <link href="{{ asset('assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/main.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/dark-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/semi-dark.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/bordered-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/responsive.css') }}" rel="stylesheet">

</head>

<body>

    <!--start header-->
    <header class="top-header">
        <nav class="navbar navbar-expand align-items-center justify-content-between gap-3">
            <div class="btn-toggle">
                <a href="#offcanvasPrimaryMenu" data-bs-toggle="offcanvas"><i
                        class="material-icons-outlined">menu</i></a>
            </div>
                    
    </header>
    <!--end top header-->

    <!--start mini sidebar-->
    <aside class="mini-sidebar d-flex align-items-center flex-column justify-content-between">
        <div class="user">
            <a href="#offcanvasUserDetails" data-bs-toggle="offcanvas" class="user-icon">
                <i class="material-icons-outlined">account_circle</i>
            </a>
        </div>
        <div class="quick-menu">
            <nav class="nav flex-column gap-1">
                <a class="nav-link" href="{{ route('dashboard') }}"><i class="material-icons-outlined">home</i></a>
            </nav>
        </div>
        <div class="mini-footer dark-mode">
            <a href="javascript:;" class="footer-icon dark-mode-icon">
                <i class="material-icons-outlined">dark_mode</i>
            </a>
        </div>
    </aside>
    <!--end mini sidebar-->


    <!--start main wrapper-->
    <main class="main-wrapper">
        <div class="main-content">
            @yield('content')
        </div>
    </main>
    <!--end main wrapper-->


    <!--start footer-->
    <footer class="page-footer d-none">
        <h3 class="mb-0">Page footer</h3>
    </footer>
    <!--top footer-->

    <!--start primary menu offcanvas-->
    <div class="offcanvas offcanvas-start w-260" data-bs-scroll="true" tabindex="-1" id="offcanvasPrimaryMenu">
        <div class="offcanvas-header border-bottom h-70">
            <img src="assets/images/logo1.png" width="160" alt="">
            <a href="javascript:;" class="primaery-menu-close" data-bs-dismiss="offcanvas">
                <i class="material-icons-outlined">close</i>
            </a>
        </div>
        <div class="offcanvas-body">
            <nav class="sidebar-nav">
                <ul class="metismenu" id="sidenav">
                    <li>
                        <a href="{{ route('dashboard') }}">
                            <div class="parent-icon"><i class="material-icons-outlined">home</i>
                            </div>
                            <div class="menu-title">Dashboard</div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="parent-icon"><i class="material-icons-outlined">description</i>
                            </div>
                            <div class="menu-title">Master Data</div>
                        </a>
                        <ul>
                            <li><a href="{{ route('master-data.kerusakan.index') }}"><i class="material-icons-outlined">arrow_right</i>Kerusakan</a>
                            </li>
                            <li><a href="{{ route('master-data.gejala.index') }}"><i class="material-icons-outlined">arrow_right</i>Gejala</a>
                            </li>
                            <li><a href="{{ route('master-data.relasi.index') }}"><i class="material-icons-outlined">arrow_right</i>Relasi</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!--end primary menu offcanvas-->


    <!--start user details offcanvas-->
    <div class="offcanvas offcanvas-start w-260" data-bs-scroll="true" tabindex="-1" id="offcanvasUserDetails">
        <div class="offcanvas-body">
            <div class="user-wrapper">
                <div class="text-center p-3 bg-light rounded">
                    <img src="https://placehold.co/110x110" class="rounded-circle p-1 shadow mb-3" width="120"
                        height="120" alt="">
                    <h5 class="user-name mb-0 fw-bold text-capitalize">{{ Auth::user()->name }}</h5>
                </div>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <div class="list-group list-group-flush mt-3 profil-menu fw-bold">
                        <button
                            class="list-group-item list-group-item-action d-flex align-items-center gap-2 border-bottom"><i
                                class="material-icons-outlined">power_settings_new</i>Logout</button>
                    </div>
                </form>
            </div>

        </div>
        <div class="offcanvas-footer p-3 border-top">
            <div class="text-center">
                <button type="button" class="btn d-flex align-items-center gap-2" data-bs-dismiss="offcanvas"><i
                        class="material-icons-outlined">close</i><span>Close Sidebar</span></button>
            </div>
        </div>
    </div>
    <!--end user details offcanvas-->

    <!--bootstrap js-->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <!--plugins-->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/plugins/metismenu/metisMenu.min.js') }}"></script>
    @stack('custom-js')
    <script src="{{ asset('assets/js/main.js') }}"></script>


</body>

</html>
