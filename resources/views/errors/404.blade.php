<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Error 404</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin') }}/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="{{ asset('admin') }}/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('admin') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('admin') }}/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body class="authentication-bg">
    <div class="my-5 pt-sm-5">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <div class="error-svg">
                            <svg viewBox="0 -100 999 300">
                                <symbol id="s-text">
                                    <text text-anchor="middle" x="50%" y="50%">404</text>
                                </symbol>

                                <g class="g-ants">
                                    <use xlink:href="#s-text" class="text"></use>
                                    <use xlink:href="#s-text" class="text"></use>
                                    <use xlink:href="#s-text" class="text"></use>
                                    <use xlink:href="#s-text" class="text"></use>
                                    <use xlink:href="#s-text" class="text"></use>
                                </g>
                            </svg>
                        </div>
                        <h2 class="mt-4">Whoops! That page doesn’t exist.</h2>
                        <p class="text-muted mt-2">The page you requested could not be found</p>
                        <div class="mt-4 pt-2">
                            <a class="btn btn-success waves-effect waves-light" href="{{ route('backend.login') }}">Back
                                to
                                Login</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('admin') }}/libs/jquery/jquery.min.js"></script>
    <script src="{{ asset('admin') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('admin') }}/libs/metismenu/metisMenu.min.js"></script>
    <script src="{{ asset('admin') }}/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('admin') }}/libs/node-waves/waves.min.js"></script>

    <script src="{{ asset('admin') }}/js/app.js"></script>

</body>

<!-- Mirrored from themesdesign.in/medroc/layouts/pages-404.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Aug 2022 05:26:23 GMT -->

</html>
