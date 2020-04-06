@if(config('cryspy-template-pkg.DEV'))
    <?php $cryspy_template_pkg_prefix = '/packages/abs/cryspy-template-pkg/src';?>
@else
    <?php $cryspy_template_pkg_prefix = '';?>
@endif

<script type="text/javascript">
	app.config(['$routeProvider', function($routeProvider) {

	    $routeProvider.
	    when('/', {
	        template: '<home></home>',
	        title: 'Theme Home',
	    }).
	    when('/login', {
	        template: '<login></login>',
	        title: 'Login',
	    }).
	    when('/forgot-password', {
	        template: '<forgot-password></forgot-password>',
	        title: 'Forgot Password',
	    }).
	    when('/reset-password', {
	        template: '<reset-password></reset-password>',
	        title: 'Reset Password',
		}).
		when('/list', {
	        template: '<list-page></list-page>',
	        title: 'List Page',
	    });
	}]);

    var cryspy_template_home_template_url = "{{asset($cryspy_template_pkg_prefix.'/public/themes/'.$theme.'/demo-pages/home.html')}}";
	var cryspy_template_login_template_url = "{{asset($cryspy_template_pkg_prefix.'/public/themes/'.$theme.'/demo-pages/auth/login.html')}}";
	var cryspy_template_list_template_url = "{{asset($cryspy_template_pkg_prefix.'/public/themes/'.$theme.'/demo-pages/list.html')}}";
</script>
<script type="text/javascript" src="{{asset($cryspy_template_pkg_prefix.'/public/themes/'.$theme.'/demo-pages/controller.js')}}"></script>
