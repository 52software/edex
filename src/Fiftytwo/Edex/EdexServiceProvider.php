<?php namespace Fiftytwo\Edex;

use Illuminate\Support\ServiceProvider;

class EdexServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('fiftytwo/edex');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$app = $this->app;

        $app['edex'] = $app->share(function($app) 
        {
            return new Importer($app['config']->get('edex::config'));
        });

        $app->alias('edex', 'Fiftytwo\Edex\Importer');
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return ['edex'];
	}

}
