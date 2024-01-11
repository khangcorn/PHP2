<?php
require_once "./Animal.php";

class Dog extends Animal{
 public $bark ; 



 public function bark(){
    echo "Dog  bark like" . $this->bark   ;  
}
public function eat(){
    echo "Dog  Eat by" . $this->mounth ;  
}



public function setBark($bark){
    $this-> bark = $bark;

 
}
}
$d = new Dog();
$d ->  setBark(" GAU GAU  ") ;
echo $d -> bark().'<br>'; 
 $d -> setMounth(" mounth") ;
echo $d-> eat() .'<br>'; 


