<?php
require_once('car.php');
class UberVan extends Car {
    public $typeCarAccepted;
    public $seatsMaterials;

    public function __construct($license, $driver, $typeCarAccepted, $seatsMaterials){
        parent::__construct($license, $driver);
        $this->typeCarAccepted = $typeCarAccepted;
        $this->seatsMaterials  = $seatsMaterials;
    }

    public function setPassengers($passenger){
        if ($passenger == 6) {
            $this->passenger = $passenger;
        }else {
            echo "Necesitas asignar 6 pasajeros";
        }
    }
}