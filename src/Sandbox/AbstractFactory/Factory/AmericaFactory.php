<?php namespace Sandbox\AbstractFactory\Factory;

use Sandbox\AbstractFactory\AbstractSpec\AbstractContinentFactory;
use Sandbox\AbstractFactory\Animal\Puma;
use Sandbox\AbstractFactory\Animal\Horse;

class AmericaFactory extends AbstractContinentFactory
{
	/*
	 * @override
	 */
	public function createHerbivore()
	{
		return new Horse();
	}

	/*
	 * @override
	 */
	public function createCarnivore()
	{
		return new Puma();
	}
}