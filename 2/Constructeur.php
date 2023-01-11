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

       
        function __construct($make='', $model='', $color='', $wheels='', $engineNo=''){
            $this->make = $make;
            $this->model = $model;  
            $this->color = $color; 
            $this->noOfWheels = $wheels; 
            $this->engineNumber = $engineNo; 
        }

    }
    $obj = new Vehicle('ferary', 'F430', 'red', '488', 'F12');
    
    echo $obj->getMake().' ';
    echo $obj->getModel().' ';
    echo $obj->getColor().' ';
    echo $obj->getNoOfWheels().' ';
    echo $obj->getEngineNumber();

?>