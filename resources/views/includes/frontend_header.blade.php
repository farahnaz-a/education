
<!doctype html>
<html class="no-js" lang="en">

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> @yield('title') </title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('uploads/generalsettings') }}/{{ generalsettings()->favicon }}">

    <!-- CSS
	============================================ -->

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/plugins/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/plugins/flaticon.css') }}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/plugins/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/plugins/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/plugins/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/plugins/nice-select2.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/plugins/glightbox.min.css') }}">

    <!-- Main Style CSS -->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    {{-- <link rel="stylesheet" href="{{ asset('frontend_assets/css/style.min.css') }}"> --}}
    @include('includes.css')

</head>

<body>

    <div class="main-wrapper">

        <!-- Preloader Start  -->
        <div class="preloader">
            <div class="loader"></div>
        </div>
        <!-- Preloader End  -->

        <!-- Header Start  -->
        <div id="header" class="header section">
            <div class="container">
                <!-- Header Wrapper Start  -->
                <div class="header-wrapper">
                    <!-- Header Logo Start -->
                    <div class="header-logo">
                        <a href="{{ url('/') }}">
                            <img style="max-width: 70px" src="{{ asset('uploads/generalsettings') }}/{{ generalsettings()->logo }}" alt="">
                        </a>
                    </div>
                    <!-- Header Logo End -->
                    <!-- Header Menu Start -->
                    <div class="header-menu d-none d-lg-block">
                        <ul class="main-menu">
                            <li>
                                <a class="@yield('index')" href="{{ url('/') }}">Home</a>
                            </li>
                            <li>
                                <a class="@yield('courses')" href="{{ route('frontend.courseList') }}">Courses</a>
                            </li>
                            <li>
                                <a class="@yield('contacts')" href="{{ route('frontend.contacts') }}">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Header Menu End -->
                    <!-- Header Meta Start -->
                    <div class="header-meta">
                        <div class="header-search d-none d-lg-block">
                            <form action="{{ route('search') }}" method="GET">
                                <input type="text" name="search" placeholder="Search Courses">
                                <button type="submit"><i class="flaticon-loupe"></i></button>
                            </form>
                        </div>
                        @guest
                            <div class="header-login d-none d-lg-flex">
                                <a class="link" href="{{ route('login') }}"><i class="fa fa-user-o"></i> Login</a>
                                <a class="link" href="{{ route('register') }}">Register</a>
                            </div>
                        @endguest

                        <div class="header-toggle d-lg-none">
                            <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>

                    </div>
                    <!-- Header Meta End -->
                </div>
                <!-- Header Wrapper End -->
            </div>
        </div>
        <!-- Header End -->

        <!-- Offcanvas Start -->
        <div class="offcanvas offcanvas-start" id="offcanvasMenu">
            <div class="offcanvas-header">
                <!-- Offcanvas Logo Start -->
                <div class="offcanvas-logo">
                    <a href="{{ url('/') }}">
                        <img style="max-width: 50px !important;" src="{{ asset('uploads/generalsettings') }}/{{ generalsettings()->logo }}" alt="not-found">
                    </a>
                </div>
                <!-- Offcanvas Logo End -->
                <button class="btn-close" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                <div class="offcanvas-menu">
                    <ul class="main-menu">
                        <li>
                            <a class="@yield('index')" href="{{ url('/') }}">Home</a>
                        </li>
                        <li>
                            <a class="@yield('courses')" href="{{ route('frontend.courseList') }}">Courses</a>
                        </li>
                        <li>
                            <a class="@yield('contact')" href="{{ route('frontend.contacts') }}">Contact</a>
                        </li>
                        @guest
                            <li>
                                <a class="link" href="{{ route('register') }}"><i class="fa fa-user-o"></i> Register</a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
        <!-- Offcanvas End -->