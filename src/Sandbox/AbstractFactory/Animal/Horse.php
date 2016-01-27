<?php namespace Sandbox\AbstractFactory\Animal;

use Sandbox\AbstractFactory\AbstractSpec\AbstractHerbivore;

class Horse extends AbstractHerbivore
{
	/*
	 * @override
	 */
	public function eat()
	{
		return 'Eating some apples';
	}

	/*
	 * @override
	 */
	public function run()
	{
		return 'It\'s race day!!!';
	}
}