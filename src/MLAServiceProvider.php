<?php

namespace Marvision\LaravelAdmin;

use Illuminate\Support\ServiceProvider;

class MLAServiceProvider extends ServiceProvider
{



	public function register(){ 

		$this->app->bind('marvision_admin',function($app){
			return new MarvisionLaravelAdmin;
		});
  
	}


	public function boot()
	{
		/* loading the config file */
		require_once __DIR__.'/Http/config.php';  
		
		/* loading the routes files */
		require_once __DIR__.'/Http/routes.php';  

		/* loading the views files */

		$this->loadViewsFrom(__DIR__.'/views','adminView');

		/* loading translation files */

		$this->loadTranslationsFrom(__DIR__.'/lang','adminLang');

		/* define files which are going to be published */

		$this->publishes([
			/* assets */
			__DIR__.'/assets' => public_path('assets/layouts/admin'), 
		]);

 
	}


}