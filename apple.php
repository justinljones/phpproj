<?php

class apple{
    protected $color;
    protected $seeds=Array();
    
    //Functions for $color
    public function setColor($color) {
        $this->color = $color; return $this;
        
    }
    public function getColor(){ return $this->color; }
    
    //Functions for $seeds
    public function setSeeds(Seeds $seeds) {
        $this->seeds = $seeds; return $this;
    }
    
    public function getSeeds() { return $this->seeds; }
    
    public function addSeeds(Seeds $seeds){
        $this->seeds[] = $seeds; return $seeds;
    }

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

