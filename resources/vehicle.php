<?php 

abstract class Vehicle {

    public $model;
    public $wheels;
    public $color;

    public function __construct($model)
    {
        $this->model = $model;
        $this->wheels = 4;
    }

    public function descriere(){
        return "The vehicle" . $this->model . " has " . $this->wheels . " wheels. <br>";
    }

    public function setModel($model){
        $this->model = $model;
    }

    public function getModel(){
        return $this->model;
    }

    public function setWheels($wheels){
        $this->wheels = $wheels;
    }

    public function getWheels(){
        return $this->wheels;
    }

    public function setColor(){
        $this->color = $color;
    }

    public function getColor(){
        return $this->color;
    }

}

?>