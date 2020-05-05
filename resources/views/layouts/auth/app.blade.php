<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Young Actors') }} | @yield('title')</title>

    <link rel="stylesheet" type="text/css" href="{{asset('formValidation/css/formValidation.min.css')}}">
    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="{{ asset('assets/vendor_components/bootstrap/dist/css/bootstrap.min.css') }}">

    <!-- theme style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Admin skins -->
    <link rel="stylesheet" href="{{ asset('assets/css/skin_color.css') }}">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/dev_bose.css') }}">

    @yield('PageCss')
</head>
<body class="hold-transition theme-classic bg-img" style="background-image: url(@yield('BgImage')" data-overlay="3">
    @yield('mainContainer')


    <!-- jQuery 3 -->
    <script src="{{ asset('assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js') }}"></script>

    <!-- fullscreen -->
    <script src="{{ asset('assets/vendor_components/screenfull/screenfull.js') }}"></script>

    <!-- popper -->
    <script src="{{ asset('assets/vendor_components/popper/dist/popper.min.js') }}"></script>

    <!-- Bootstrap 4.0-->
    <script src="{{ asset('assets/vendor_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    {!! Html::script('formValidation/js/formValidation.min.js') !!}
    {!! Html::script('formValidation/js/framework/bootstrap.min.js') !!}

    {!! Html::script('formValidation/js/globalValidationCustom.js') !!}
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    @yield('PageJquery')
</body>
</html>
