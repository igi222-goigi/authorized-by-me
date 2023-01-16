<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title> {{ env('APP_NAME') }} | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Authorized By Me" name="description" />
    <meta content="Authorized By Me" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('uploads') . '/' . app_settings()->favicon }}">

    <!-- jquery.vectormap css -->
    <link href="{{ asset('admin') }}/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet"
        type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('admin') }}/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('admin') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('admin') }}/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    @yield('styles')

</head>

<body data-topbar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        @include('admin.includes.header')

        @include('admin.includes.sidebar')



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">@yield('title')</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                        <li class="breadcrumb-item active">@yield('title')</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    @yield('content')
                </div>
            </div>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->


    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('admin') }}/libs/jquery/jquery.min.js"></script>
    <script src="{{ asset('admin') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('admin') }}/libs/metismenu/metisMenu.min.js"></script>
    <script src="{{ asset('admin') }}/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('admin') }}/libs/node-waves/waves.min.js"></script>


    <!-- apexcharts -->
    <script src="{{ asset('admin') }}/libs/apexcharts/apexcharts.min.js"></script>

    <!-- jquery.vectormap map -->
    <script src="{{ asset('admin') }}/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="{{ asset('admin') }}/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js"></script>

    <script src="{{ asset('admin') }}/js/pages/dashboard.init.js"></script>

    <!-- App js -->
    <script src="{{ asset('admin') }}/js/app.js"></script>

    @yield('scripts')

</body>


<!-- Mirrored from themesdesign.in/medroc/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Aug 2022 05:25:51 GMT -->

</html>
