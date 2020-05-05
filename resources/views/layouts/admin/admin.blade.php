<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Game') }} | @yield('title')</title>
	<link rel="shortcut icon" href="/assets/media/favicons/favicon.png">

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="{{ asset('assets/vendor_components/bootstrap/dist/css/bootstrap.css') }}">
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{ asset('assets/vendor_components/bootstrap-daterangepicker/daterangepicker.css') }}">
    <!-- owlcarousel-->
    <link rel="stylesheet" href="{{ asset('assets/vendor_components/OwlCarousel2/dist/assets/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor_components/OwlCarousel2/dist/assets/owl.theme.default.css') }}">
    <!-- Chartist-->
    <link rel="stylesheet" href="{{ asset('assets/vendor_components/chartist-js-develop/chartist.css') }}">
    <!-- c3 CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor_components/c3/c3.min.css') }}">
    <!-- theme style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- CrmX Admin skins -->
    <link rel="stylesheet" href="{{ asset('assets/css/skin_color.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('formValidation/css/formValidation.min.css')}}">

    @yield('PageCss')

</head>
<body class="hold-transition light-skin sidebar-mini theme-classic fixed">

<div class="wrapper">
    @include('layouts.admin.include.header')
    @include('layouts.admin.include.sidebar')
    @yield('mainContainer')
    @include('layouts.admin.include.footer')
    @include('layouts.admin.include.overlay')
</div>
    @include('layouts.admin.include.modals')


<!-- js -->
<script src="{{ asset('assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js') }}"></script>
<script src="{{ asset('assets/vendor_components/screenfull/screenfull.js') }}"></script>
<script src="{{ asset('assets/vendor_components/popper/dist/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendor_components/bootstrap/dist/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('assets/vendor_components/fastclick/lib/fastclick.js') }}"></script>

<!-- Plugin -->
<script src="{{ asset('assets/vendor_components/apexcharts-bundle/irregular-data-series.js') }}"></script>
<script src="{{ asset('assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }}"></script>
<script src="{{ asset('assets/vendor_components/zingchart_branded_version/zingchart.min.js') }}"></script>
<script src="{{ asset('assets/vendor_components/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/maps.js"></script>
<script src="https://www.amcharts.com/lib/4/geodata/worldLow.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/dataviz.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>

<!-- CrmX Admin App -->
<script src="{{ asset('assets/js/template.js') }}"></script>
<script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>
<script src="{{ asset('assets/js/demo.js') }}"></script>

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
