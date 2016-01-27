<?php namespace Sandbox\AbstractFactory\Animal;

use Sandbox\AbstractFactory\AbstractSpec\AbstractHerbivore;

class Elephant extends AbstractHerbivore
{
	/*
	 * @override
	 */
	public function eat()
	{
		return 'Eating some plants... nom nom nom';
	}

	/*
	 * @override
	 */
	public function run()
	{
		return 'I\'m an Elephant,, what do you spec? (slowly walking...)';
	}
}