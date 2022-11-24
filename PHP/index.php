<?php

require_once("car.php");
require_once('uberX.php');
require_once('uberPool.php');
require_once('uberVan.php');
require_once("account.php");

$driver1 = new Account('Leopoldo', 'Leop123');
$car1 = new Car('AN123', $driver1);
$car1->printDataCar();

$uberX = new UberX("DAD-901", new Account("Leopoldo Martinez", "5628071"), "Chevrolet", "Cruce");
$uberX->printDataCar();

$uberPool = new UberPool("XHW-122", new Account("Vericar De Espiritu Santo", "V14031186"), "Hiunday", "Tiburon");
$uberPool->printDataCar();

$uberVan = new UberVan("FAT-032", new Account("Samantha Martinez", "V42891032"),"Audi A3","Cuero");
$uberVan->setPassengers(6);
$uberVan->printDataCar();