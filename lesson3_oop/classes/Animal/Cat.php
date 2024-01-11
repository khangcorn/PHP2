<?php
require_once "./Animal.php";
class Cat extends Animal{
    public $favoriteFood ;
 
    public function eat(){
        echo "cat  Eat by" . $this-> mounth ;  
    }
    
    
    public function setFF($favoriteFood){
      $this-> favoriteFood = $favoriteFood;
    }

 public function fF(){
    echo "Cat like eat " . $this->favoriteFood   ;  

 }
}
$c = new Cat();
$c ->  setMounth(" mounth ") ;
echo $c -> eat().'<br>'; 
 $c -> setFF("fish") ;
echo $c-> fF() .'<br>'; 