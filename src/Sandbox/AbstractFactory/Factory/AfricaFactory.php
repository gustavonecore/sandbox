<?php namespace Sandbox\AbstractFactory\Factory;

use Sandbox\AbstractFactory\AbstractSpec\AbstractContinentFactory;
use Sandbox\AbstractFactory\Animal\Lion;
use Sandbox\AbstractFactory\Animal\Elephant;

class AfricaFactory extends AbstractContinentFactory
{
	/*
	 * @override
	 */
	public function createHerbivore()
	{
		return new Elephant();
	}

	/*
	 * @override
	 */
	public function createCarnivore()
	{
		return new Lion();
	}
}