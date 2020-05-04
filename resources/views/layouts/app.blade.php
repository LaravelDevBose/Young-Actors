<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Quiz') }} | @yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,700" rel="stylesheet">
    <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/oneui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        .hidden {
            display: none;
        }
    </style>
    @yield('PageCss')
</head>
<body>
@yield('mainContainer')

{!! Html::script('assets/js/oneui.core.min.js') !!}
{!! Html::script('assets/js/oneui.app.min.js') !!}

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
