<?php
class Animal {
    public $eye ;
    public $mounth; 
    public $legs;
    public $movement;
   
    public function setEat(){
    return "Absourb by "; 
    }
  
    public function setMm($movement){
        return ""; 
        }
       
    public function  setMounth($mounth){
            $this-> mounth = $mounth;
        }
        public function  setLegs($legs){
             $this-> legs = $legs;
        }

     

    

}
