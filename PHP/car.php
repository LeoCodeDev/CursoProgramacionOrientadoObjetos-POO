<?php

class Car{
    public $id;
    public $license;
    public $driver;
    public $passenger;

    public function __construct($license, $driver){
        $this->license = $license;
        $this->driver  = $driver;
    }

    public function printDataCar(){
        echo "
        license: $this->license, 
        conductor: {$this->driver->name}, 
        Document: {$this->driver->document},
        Numero de Pasajeros: $this->passenger \n <br>";
    }

    public function getPassengers(){
        return $this->passenger;
    }

    public function setPassengers($passenger){
        if ($passenger == 4) {
            $this->passenger = $passenger;
        }else {
            echo "Necesitas asignar 4 pasajeros";
        }
    }
}