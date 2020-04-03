@if(config('cryspy-template-pkg.DEV'))
    <?php $cryspy_template_pkg_prefix = '/packages/abs/cryspy-template-pkg/src/';?>
@else
    <?php $cryspy_template_pkg_prefix = '';?>
@endif
@if(config('helper-pkg.DEV'))
    <?php $helper_pkg_prefix = '/packages/abs/helper-pkg/src/';?>
@else
    <?php $helper_pkg_prefix = '';?>
@endif
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="icon" href="{{ asset($cryspy_template_pkg_prefix.'public/themes/'.$theme.'/favicon.ico') }}" type="image/x-icon"/>
<link rel="shortcut icon" href="{{ asset($cryspy_template_pkg_prefix.'public/themes/'.$theme.'/favicon.ico') }}" type="image/x-icon"/>

<title>@yield('browser_title') <%title%> | {{ Session::get('browser_title')}}</title>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Muli:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- -------- -->
<!-- Plugin CSS -->
<!-- -------- -->
<!-- Bootstrap -->
<link href="{{ asset($helper_pkg_prefix.'public/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Notify -->
{{-- <link href="{{ asset($helper_pkg_prefix.'public/vendor/noty/css/noty.css') }}" rel="stylesheet" type="text/css" /> --}}
<!-- Daterange Picker -->
{{-- <link rel="stylesheet" type="text/css" href="{{ asset($helper_pkg_prefix.'public/vendor/daterangepicker.min.css') }}"> --}}


<!-- Theme CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset($cryspy_template_pkg_prefix.'public/themes/'.$theme.'/css/theme.css') }}">
