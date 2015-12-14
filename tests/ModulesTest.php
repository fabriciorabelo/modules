<?php

use Mockery as m;
use Fabriciorabelo\Modules\Modules;
use Illuminate\Database\Eloquent\Collection;

class ModulesTest extends PHPUnit_Framework_TestCase
{
	protected $config;

	protected $files;

	protected $module;

	public function setUp()
	{
		parent::setUp();

		$this->config  = m::mock('Illuminate\Foundation\Application');
		$this->files   = m::mock('\Fabriciorabelo\Modules\Repositories\Interfaces\ModuleRepositoryInterface');
		$this->module  = new Modules($this->config, $this->files);
	}

	public function tearDown()
	{
		m::close();
	}

	public function testHasCorrectInstance()
	{
		$this->assertInstanceOf('Fabriciorabelo\Modules\Modules', $this->module);
	}
}
