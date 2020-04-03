<!DOCTYPE html>
<html dir="ltr" lang="{{ app()->getLocale() }}" ng-app="app">
    <head>
        @include($theme.'-pkg::head')
        @include('helper-pkg::angular-js/css')
    </head>
    <body>
        <div class="main-wrap login">
            <div ng-view></div>
        </div><!-- Main Wrap -->
        @include('themes/'.$theme.'/includes/common/footer')
        @include($theme.'-pkg::js')
        @include('helper-pkg::angular-js/js')
        <script type="text/javascript">
            var laravel_routes = [];
            @foreach(Route::getRoutes()->getRoutesByName() as $route_name => $route)
                laravel_routes['{{$route_name}}'] = '{{$route->uri}}';
            @endforeach
        </script>
        @include('helper-pkg::setup')
        @include('auth-pkg::setup')
    </body>
</html>