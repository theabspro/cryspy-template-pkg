<?php

namespace Abs\CryspyTemplatePkg;

use Illuminate\Support\ServiceProvider;

class CryspyTemplatePkgServiceProvider extends ServiceProvider {
	/**
	 * Register services.
	 *
	 * @return void
	 */
	public function register() {
		$this->loadViewsFrom(__DIR__ . '/views', 'cryspy-template-pkg');
		$this->publishes([
			__DIR__ . '/public' => base_path('public'),
			__DIR__ . '/config/config.php' => config_path('cryspy-template-pkg.php'),
		]);
	}

	/**
	 * Bootstrap services.
	 *
	 * @return void
	 */
	public function boot() {
	}
}
