<?php
namespace Fabriciorabelo\Modules\Console\Commands;

use Fabriciorabelo\Modules\Console\Handlers\ModuleMakeHandler;
use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputArgument;

class ModuleMakeCommand extends Command
{
	/**
	 * @var string $name The console command name.
	 */
	protected $name = 'module:make';

	/**
	 * @var string $description The console command description.
	 */
	protected $description = 'Create a new module';

	/**
	 * @var \CFabriciorabelo\Modules\Handlers\Console\Commands\ModuleMakeHandler
	 */
	protected $handler;

	/**
	 * Create a new command instance.
	 *
	 * @param \Fabriciorabelo\Modules\Handlers\ModuleMakeHandler $handler
	 */
	public function __construct(ModuleMakeHandler $handler)
	{
		parent::__construct();

		$this->handler = $handler;
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		return $this->handler->fire($this, $this->argument('name'));
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return [
			['name', InputArgument::REQUIRED, 'Module slug.']
		];
	}
}
