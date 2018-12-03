<?php

class Upcustomer {

        public $make;
        public $model;
        public $series;
        public $dName; 
        public $dProvince; 
        public $dCity; 
        public $dTell;
        public $image;
        public $colour;
        

        
    function __construct($make,$model,$series,$dName,$dProvince,$dCity,$dTell,$image, $colour) 
    {
        $this->make = $make;
        $this->model = $model;
        $this->series = $series;
        $this->dName = $dName;
        $this->dProvince  = $dProvince;
        $this->dCity = $dCity;
        $this->dTell = $dTell;
        $this->image = $image;
        $this->colour = $colour;
        
    }



   
            

}

