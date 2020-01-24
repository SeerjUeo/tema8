<?php 

require('../resources/vehicle.php');
require('../resources/train.php');
require('../resources/plane.php');
require('../resources/car.php');
require('../resources/bicycle.php');
    
$bikeRacer = new Bicycle('Racer');
$bikeRacer->lockBicyle();
$bikeRacer->description();
$bikeBMX = new Bicycle('BMX');
$bikeBMX->unlockBicyle();
$bikeBMX->description();

echo "<br>";

$carDacia = new Car('Dacia');
$carDacia->onOff();
$carDacia->go();
$carDacia->onOff();

echo "<br>";

$trainCalatori= new Train('CFR Calatori');
$trainCalatori->speedUp();
$trainCalatori->speedDown();

echo "<br>";

$privateJet = new Plane();
$privateJet->takeOff(); 
$privateJet->land();

?>