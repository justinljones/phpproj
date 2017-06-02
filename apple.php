<?php

//creating a new object (which is also a class)
class apple{
    //initializes two properties (both protected)
    protected $color;
    //this is a property that is an Array (list, list, list)
    protected $seeds=Array();
    
    //Functions for $color
    //this function sets the color variable.
    public function setColor($color) {
        //NOT SURE HERE; Best I can tell, the function is retrieving a color, then
        //the "this->color" part will take the value of "$color" and apply it to the 
        //property of "apple"
        $this->color = $color; return $this;
        
    }
    //this function will retrieve the color from the apple object (as it currently 
    //stands?)
    public function getColor(){ return $this->color; }
    
    //Functions for $seeds
    //NOT SURE HERE; This function seems similar to color but I don't quite understand
    //what (Seeds $seeds) is doing
    public function setSeeds(Seeds $seeds) {
        $this->seeds = $seeds; return $this;
    }
    
    public function getSeeds() { return $this->seeds; }
    
    //NOT SURE HERE; this function is adding seeds by...
    //...
    public function addSeeds(Seeds $seeds){
        $this->seeds[] = $seeds; return $seeds;
    }

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

