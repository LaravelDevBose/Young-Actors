<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Young Actors') }} | @yield('title')</title>
    <link rel="shortcut icon" href="/assets/media/favicons/favicon.png">

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="{{ asset('assets/vendor_components/bootstrap/dist/css/bootstrap.css') }}">
    <!-- theme style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- CrmX Admin skins -->
    <link rel="stylesheet" href="{{ asset('assets/css/skin_color.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('formValidation/css/formValidation.min.css')}}">

    @yield('PageCss')

</head>
<body class="hold-transition light-skin sidebar-mini theme-classic fixed">

<div class="wrapper">
    @include('layouts.frontend.include.header')
    @yield('mainContainer')
    @include('layouts.frontend.include.footer')
</div>
@include('layouts.frontend.include.modals')


<!-- js -->
<script src="{{ asset('assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js') }}"></script>
<script src="{{ asset('assets/vendor_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

<!-- CrmX Admin App -->
<script src="{{ asset('assets/js/template.js') }}"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
{!! Html::script('formValidation/js/formValidation.js') !!}
{!! Html::script('formValidation/js/framework/bootstrap.min.js') !!}
<script src="{{ asset('formValidation/js/globalValidationCustom.js') }}"></script>
{!! Html::script('vendor/fileupload/jquery.fileuploadmulti.min.js') !!}
{!! Html::script('vendor/fileupload/img_saving_gallery.js') !!}

@yield('PageJquery')
</body>
</html>
