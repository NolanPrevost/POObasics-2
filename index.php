<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';


$tandem = new Bicycle('red', 2);
echo $tandem->forward();
var_dump($tandem);

$lamborghiniMurcielago = new Car('yellow', 2, 'SP98');
echo $lamborghiniMurcielago->forward();
$lamborghiniMurcielago->setCurrentSpeed(250);
var_dump($lamborghiniMurcielago);

$monsterTruck = new Truck('green', 5, 'SP98', '200');
$monsterTruck->setCurrentLoad(150);
var_dump($monsterTruck);
echo $monsterTruck->isLoad();
echo $monsterTruck->forward();
echo $monsterTruck->brake();
