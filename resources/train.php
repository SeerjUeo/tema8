<?php 

class Train {

    public $name;
    public $noWagon;
    public $type;

    public function __construct($name){
        $this->name = $name;
        $this->noWagon = 10;
        $this->type = ('calatori');
    }

    public function speedUp() {
        echo "Sit down and fasten your seatbelt. <br>";
    }

    public function speedDown() {
        echo "We'll arrive soon. <br>";
    }

    public function derail() {
        echo "We are off the rails now, care. <br>";
    }

    public function description(){
        return "The train " . $this->name . " has " . $this->noWagon . " wagons and transports " . $this->type . "<br>";
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $name->name;
    }

    public function setNoWagon($noWagon){
        $this->noWagon = $noWagon;
    }

    public function getNoWagon(){
        return $noWagon->noWagon;
    }

    public function setType($type){
        $this->type = $type;
    }

    public function getType(){
        return $type->type;
    }
}

?>