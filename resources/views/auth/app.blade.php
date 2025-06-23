<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>{{"BLOG|$title"??null}} </title>

        <link rel="stylesheet" href="{{asset('vendors/mdi/css/materialdesignicons.min.css')}}" />
        <link rel="stylesheet" href="{{asset('vendors/flag-icon-css/css/flag-icon.min.css')}}" />
        <link rel="stylesheet" href="{{asset('typicons.font/font/typicons.css')}}">
        <link rel="stylesheet" href="{{asset('css/vertical-layout-light/style.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}" />
        <link rel="shortcut icon" href="{{asset('images/logo.png')}}" />
        @vite(['resources/js/app.js'])
    </head>

    <body>
        <div class="container-scroller">
            <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <div class="brand-logo">
                            <img src="../../images/logo.svg" alt="logo">
                        </div>
                        @yield('content')
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

        <script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
        <script src="{{asset('js/off-canvas.js')}}"></script>
        <script src="{{asset('js/hoverable-collapse.js')}}"></script>
        <script src="{{asset('js/settings.js')}}"></script>

        <script src="{{asset('js/template.js')}}"></script>
        <script src="{{asset('js/todolist.js')}}"></script>
    </body>
</html>
