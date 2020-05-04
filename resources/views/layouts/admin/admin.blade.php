<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Game') }} | @yield('title')</title>
	<link rel="shortcut icon" href="/assets/media/favicons/favicon.png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <link rel="stylesheet" id="css-theme" type="text/css" href="{{asset('assets/css/themes/flat.min.css')}}">
    <link rel="stylesheet"  href="{{ asset('assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('formValidation/css/formValidation.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/js/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/layout_admin_custom.css')}}">

    <link rel="stylesheet" id="css-main" type="text/css" href="{{asset('assets/css/oneui.min.css')}}">
    <link rel="stylesheet" href="{{ asset('jqueryDataTable/jquery.dataTables.min.css') }}">
    @yield('PageCss')

    <style>
        .hidden{
            display: none;
        }

        #map{
            width: 100%;
            height: 200px;
        }
        table.dataTable thead .sorting:after, table.dataTable thead .sorting_asc:after, table.dataTable thead .sorting_asc_disabled:after, table.dataTable thead .sorting_desc:after, table.dataTable thead .sorting_desc_disabled:after{
            opacity: 0;
        }
    </style>


</head>
<body>
<div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-fixed">
    @include('layouts.admin.include.sidebar')
    @include('layouts.admin.include.header')
    @yield('mainContainer')
    @include('layouts.admin.include.footer')
</div>
    @include('layouts.admin.include.modals')
{!! Html::script('assets/js/oneui.core.min.js') !!}
{!! Html::script('assets/js/oneui.app.min.js') !!}

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>


{!! Html::script('assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') !!}
{!! Html::script('jqueryDataTable/jquery.dataTables.min.js') !!}
{!! Html::script('formValidation/js/formValidation.js') !!}
{!! Html::script('formValidation/js/framework/bootstrap.min.js') !!}
{!! Html::script('assets/js/plugins/select2/js/select2.full.min.js') !!}
<script src="{{ asset('formValidation/js/globalValidationCustom.js') }}"></script>
{!! Html::script('vendor/fileupload/jquery.fileuploadmulti.min.js') !!}
{!! Html::script('vendor/fileupload/img_saving_gallery.js') !!}

@yield('PageJquery')
<script>
    $('.alertClose').on('click', function () {
        $(this).parents('div .alertBox').addClass('hidden');
    })
</script>
</body>
</html>
