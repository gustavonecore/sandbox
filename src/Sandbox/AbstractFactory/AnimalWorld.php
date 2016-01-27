<?php namespace Sandbox\AbstractFactory;

use Sandbox\AbstractFactory\AbstractSpec\AbstractContinentFactory;

class AnimalWorld
{
	private $herbivore;
	private $carnivore;

	public function __construct(AbstractContinentFactory $continentFactory)
	{
		$this->herbivore = $continentFactory->createHerbivore();
		$this->carnivore = $continentFactory->createCarnivore();
	}

	public function runFoodChain()
	{
		$this->carnivore->hunt($this->herbivore);
		$this->carnivore->eat($this->herbivore);
	}
}