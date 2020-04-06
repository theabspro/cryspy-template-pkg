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

{{-- PLUGINS --}}
<script src="{{ asset('public/vendor/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{ asset($helper_pkg_prefix.'public/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

{{-- THEME JS --}}
<script src="{{ asset($cryspy_template_pkg_prefix.'public/themes/'.$theme.'/js/theme.js')}}"></script>
