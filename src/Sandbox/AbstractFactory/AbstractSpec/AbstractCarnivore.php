<?php namespace Sandbox\AbstractFactory\AbstractSpec;

abstract class AbstractCarnivore
{
	public function eat(AbstractHerbivore $herbivore)
	{
		echo get_class($this) . ' EAT ' . get_class($herbivore) . "\n";
	}
	public function hunt(AbstractHerbivore $herbivore)
	{
		echo get_class($this) . ' HUNT ' . get_class($herbivore) . "\n";
	}
}