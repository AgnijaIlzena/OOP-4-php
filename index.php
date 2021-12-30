<?php

require_once 'Car.php';

$volga = new Car ('grey', '5', '95E');

$volga->setCurrentSpeed(10);
//echo 'Volga in color: ' . $volga->getColor() .PHP_EOL;

$volga->setHasParkBrake(true);
echo "Volga's ParkBreak is" . $volga->setParkBrake(). ' !' .PHP_EOL;
echo 'Volga starts driving. ' . $volga->start() .PHP_EOL;
echo "Volga's ParkBreak is" . $volga->setParkBrake(). ' !' .PHP_EOL;


