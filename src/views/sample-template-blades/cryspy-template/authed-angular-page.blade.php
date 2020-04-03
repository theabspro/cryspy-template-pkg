<!DOCTYPE html>
<html dir="ltr" lang="{{ app()->getLocale() }}" ng-app="app">
    <head>
        @include($theme.'-pkg::head')
        @include('helper-pkg::angular-js/css')
    </head>
    <body>
        <div class="main-wrap">
            @include('themes/'.$theme.'/includes/common/header')
            <div ng-view></div>
        </div><!-- Main Wrap -->
        @include('themes/'.$theme.'-pkg::includes/common/footer')
        @include($theme.'-pkg::js')
        <script type="text/javascript">
            var logged_user_permissions = [];
            @foreach(Auth::user()->perms() as $permission_name)
                logged_user_permissions.push('{{$permission_name}}');
            @endforeach
        </script>

        @include('helper-pkg::setup')
    </body>
</html>