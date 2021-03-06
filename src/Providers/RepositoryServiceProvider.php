<?php
namespace Fabriciorabelo\Modules\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
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
		//
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$driver = ucfirst(config('modules.driver'));

		if ($driver == 'Custom') {
			$namespace = config('modules.custom_driver');
		} else {
			$namespace = "Fabriciorabelo\Modules\Repositories\\$driver\ModuleRepository";
		}

		$this->app->bind('Fabriciorabelo\Modules\Repositories\Interfaces\ModuleRepositoryInterface', $namespace);
	}
}
