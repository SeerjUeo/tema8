<?php 

class Bicycle extends Vehicle{

    public function __construct($name){
        parent::setModel($name);
        parent::setWheels(2);
    }

    public function lockBicyle() {
        echo "Now your bicycle is tied up. <br>";
    }

    public function unlockBicyle() {
        echo "Now your bicycle is free to go. Be careful tho. <br>";
    }


    public function description(){
        return "The bicycle " . $this->getModel() . " is " . $this->getRoti() . " tired. <br>";
    }

}

?>
