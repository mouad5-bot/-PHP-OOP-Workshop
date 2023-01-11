<?php

    class Vehicle{
        public $make;
        public $model;
        public $color;
        public $noOfWheels;
        public $engineNumber;

        function getMake(){
            return $this->make;
        }
        function getModel(){
            return $this->model;            
        }
        function getColor(){
            return $this->color;            
        }
        function getNoOfWheels(){
            return $this->noOfWheels;            
        }
        function getEngineNumber(){
            return $this->engineNumber;            
        }

        function setMake($make){
            $this->make = $make;
        }
        function setModel($model){
            $this->model = $model;            
        }
        function setColor($color){
            $this->color = $color;            
        }
        function setNoOfWheels($wheels){
            $this->noOfWheels = $wheels;            
        }
        function setEngineNumber($engineNo){
            $this->engineNumber = $engineNo;            
        }

    }
    $make   = new Vehicle();
    $model  = new Vehicle();
    $color  = new Vehicle();
    $Wheels = new Vehicle();
    $engine = new Vehicle();

    $make->setMake('ferary');
    $model->setModel('F430');
    $color->setColor('red');
    $Wheels->setNoOfWheels('488');
    $engine->setEngineNumber('F12');
    
    echo $make->getMake().' ';
    echo $model->getModel().' ';
    echo $color->getColor().' ';
    echo $Wheels->getNoOfWheels().' ';
    echo $engine->getEngineNumber();

?>