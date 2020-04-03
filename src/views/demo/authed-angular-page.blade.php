<!DOCTYPE html>
<html dir="ltr" lang="{{ app()->getLocale() }}" ng-app="app">
    <head>
        @include($theme.'-pkg::head')
        @include('helper-pkg::angular-js/css')
    </head>
    <body>
        <div class="main-wrap">
            @include($theme.'-pkg::demo/partials/header')
            <div ng-view></div>
        </div><!-- Main Wrap -->
        @include($theme.'-pkg::demo/partials/footer')
        @include($theme.'-pkg::js')
        @include('helper-pkg::angular-js/js')
        @include('helper-pkg::setup')
        @include($theme.'-pkg::setup')
    </body>
</html>