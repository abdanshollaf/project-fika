<!DOCTYPE html>
<html lang="en" class="fullscreen-bg">

    <head>
        @yield('title')
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <!-- VENDOR CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{
                asset('assets/vendor/font-awesome/css/font-awesome.min.css')
            }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/linearicons/style.css') }}" />
        <!-- MAIN CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
        <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
        <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />
        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet" />
        <!-- ICONS -->
        <link rel="apple-touch-icon" sizes="76x76"
            href="{{ asset('assets/img/apple-icon.png') }}" />
        <link rel="icon" type="image/png" sizes="96x96"
            href="{{ asset('assets/img/favicon.png') }}" />
    </head>

    <body>
        <!-- WRAPPER -->
        <div id="wrapper">
            @include('layouts.navbar')
            @include('layouts.sidebar')
            @yield('content')

        </div>
        {{-- <div class="clearfix"></div>
        <footer>
            <div class="container-fluid">
                <p class="copyright">&copy; 2020 Admin Templates. All Rights Reserved.</p>
            </div>
        </footer> --}}
        <!-- END WRAPPER -->
    </body>



    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/chartist/js/chartist.min.js') }}"></script>
    <script src="{{ asset('assets/scripts/klorofil-common.js') }}"></script>

</html>
