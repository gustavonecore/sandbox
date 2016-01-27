<?php

require __DIR__ . '/../../../vendor/autoload.php';

use Sandbox\AbstractFactory\AnimalWorld;
use Sandbox\AbstractFactory\AbstractSpec\AbstractContinentFactory;
use Sandbox\AbstractFactory\Factory\AfricaFactory;
use Sandbox\AbstractFactory\Factory\AmericaFactory;

$africa = new AfricaFactory();
$animalWorld1 = new AnimalWorld($africa);
$animalWorld1->runFoodChain();

$america = new AmericaFactory();
$animalWorld2 = new AnimalWorld($america);
$animalWorld2->runFoodChain();