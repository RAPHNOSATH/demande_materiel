<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>{{"BLOG|$title"??null }}</title>

        <link rel="stylesheet" href="{{asset('vendors/mdi/css/materialdesignicons.min.css')}}" />
        <link rel="stylesheet" href="{{asset('vendors/flag-icon-css/css/flag-icon.min.css')}}" />
        <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}" />
        <link rel="stylesheet" href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" />
        <link rel="stylesheet" href="{{asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" />

        <link rel="stylesheet" href="{{asset('css/my_style.css')}}" />
        <link rel="stylesheet" href="{{asset('css/style.css')}}" />
        <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" />
        @vite(['resources/js/app.js'])
    </head>
    <body>
        <div class="container-scroller">
            <!-- debut sidebar-->
            @include('layouts.partials._sidebar')
            <!-- Fin sidebar-->

            <div class="container-fluid page-body-wrapper">
                <!-- debut topbar-->
                @include('layouts.partials._topbar')
                <!-- Fin topbar-->

                <div class="main-panel">
                    <div class="content-wrapper pb-0">
                        <!-- debut breadcrumb-->
                        @include('layouts.partials._breadcrumb')
                        <!-- Fin breadcrumb-->
                        @yield('content')
                    </div>

                    <!-- debut footer-->
                    @include('layouts.partials._footer')
                    <!-- Fin footer-->
                </div>
            </div>
        </div>

        <script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
        <script src="{{asset('vendors/chart.js/Chart.min.js')}}"></script>
        <script src="{{asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
        <script src="{{asset('vendors/flot/jquery.flot.js')}}"></script>
        <script src="{{asset('vendors/flot/jquery.flot.resize.js')}}"></script>
        <script src="{{asset('vendors/flot/jquery.flot.categories.js')}}"></script>
        <script src="{{asset('vendors/flot/jquery.flot.fillbetween.js')}}"></script>
        <script src="{{asset('vendors/flot/jquery.flot.stack.js')}}"></script>
        <script src="{{asset('vendors/flot/jquery.flot.pie.js')}}"></script>

        <script src="{{asset('js/custom.js')}}"></script>
        <script src="{{asset('js/off-canvas.js')}}"></script>
        <script src="{{asset('js/hoverable-collapse.js')}}"></script>
        <script src="{{asset('js/misc.js')}}"></script>
        <script src="{{asset('js/dashboard.js')}}"></script>
        <script src="{{asset('js/chart.js')}}"></script>
    </body>
</html>
