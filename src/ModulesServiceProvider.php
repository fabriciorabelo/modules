<?php
namespace Fabriciorabelo\Modules;

use Illuminate\Support\ServiceProvider;

class ModulesServiceProvider extends ServiceProvider
{
	/**
	 * @var bool $defer Indicates if loading of the provider is deferred.
	 */
	protected $defer = false;

	/**
	 * Boot the service provider.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->publishes([
			__DIR__.'/../config/modules.php' => config_path('modules.php'),
		], 'config');

		$this->app['modules']->register();
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->mergeConfigFrom(
			__DIR__.'/../config/modules.php', 'modules'
		);

		$this->app->register('Fabriciorabelo\Modules\Providers\RepositoryServiceProvider');

		$this->app->register('Fabriciorabelo\Modules\Providers\MigrationServiceProvider');

		$this->app->register('Fabriciorabelo\Modules\Providers\ConsoleServiceProvider');

		$this->app->singleton('modules', function ($app) {
			$repository = $app->make('Fabriciorabelo\Modules\Repositories\Interfaces\ModuleRepositoryInterface');

			return new \Fabriciorabelo\Modules\Modules($app, $repository);
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return string
	 */
	public function provides()
	{
		return ['modules'];
	}
}
