<?php namespace Sandbox\AbstractFactory\Animal;

use Sandbox\AbstractFactory\AbstractSpec\AbstractCarnivore;
use Sandbox\AbstractFactory\AbstractSpec\AbstractHerbivore;

class Lion extends AbstractCarnivore
{
	/*
	 * @override
	 */
	public function eat(AbstractHerbivore $herbivore)
	{
		parent::eat($herbivore);
	}

	/*
	 * @override
	 */
	public function hunt(AbstractHerbivore $herbivore)
	{
		parent::hunt($herbivore);
	}
}