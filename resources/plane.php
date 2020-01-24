<?php 

class Plane {
    
    public $name;
    public $type;

    public function __construct($name){
        $this->name = $name;
        $this->type = $type;
    }

    public function takeOff() {
       echo "We are getting higher and higher. <br>";
    }

    public function land() {
        echo "Landing...";
        echo "Landed successfully";
    }

    public function description(){
        return "The plane " . $this->name . " is " . $this->type . "<br>";
    }


    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function setType($type){
        $this->type = $type;
    }

    public function getType(){
        return $this->type;
    }

}

?>