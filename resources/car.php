<?php 

class Car extends Vehicle {

    public function __construct($model){
        parent::setModel($model);
        parent::setWheels(4);
    }

    public function onOff() {
        $this->status=!$this->status;
        if($this->status) {
            echo "The engine is on";
        } else {
            echo "Shutting down...";
        }
    }

    public function go() {
        echo "* Wrum Wrum *";
    }

    public function description(){
        return "The car " . $this->getModel() . " has " . $this->getRoti() . " wheels. <br>";
    }


}

?>