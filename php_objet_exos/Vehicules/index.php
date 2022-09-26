<?php

require './Autoloader.php';

Autoloader::register();

$car = new Car('BMW','X6','2395',new Motor('BMW',325));
$racingCar= new RacingCar('BMW','X6','2395',new Motor('BMW',325));

echo $car->maximumSpeedCar().PHP_EOL;
echo $car->displayCar().PHP_EOL;

echo $racingCar->maximumSpeedCar().PHP_EOL;
echo $racingCar->displayCar().PHP_EOL;



?>