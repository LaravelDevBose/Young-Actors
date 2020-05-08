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
@yield('PageCss')
<!-- theme style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- CrmX Admin skins -->
    <link rel="stylesheet" href="{{ asset('assets/css/skin_color.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('formValidation/css/formValidation.min.css')}}">
    <style>
        .hidden{
            display: none;
        }
    </style>

</head>
<body class="hold-transition light-skin sidebar-mini theme-classic fixed">

<div class="wrapper">
    @include('layouts.member.include.header')
    @include('layouts.member.include.sidebar')
    @yield('mainContainer')
    @include('layouts.member.include.footer')
</div>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<!-- js -->
<script src="{{ asset('assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js') }}"></script>
<script src="{{ asset('assets/vendor_components/screenfull/screenfull.js') }}"></script>
<script src="{{ asset('assets/vendor_components/popper/dist/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendor_components/bootstrap/dist/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('assets/vendor_components/fastclick/lib/fastclick.js') }}"></script>


<!-- CrmX Admin App -->
<script src="{{ asset('assets/js/template.js') }}"></script>

<script src="{{ asset('assets/js/demo.js') }}"></script>
@yield('PageJquery')
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


</body>
</html>
