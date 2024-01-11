<?php
require_once "./Animal.php";
class Bird extends Animal{
    public $moveMent ;
    public function eat(){
        echo "brid  Eat by" . $this->mounth ;  
    }
    
    
    public function methodMm($moveMent){
      $this-> moveMent = $moveMent;
    }

 public function fF(){
    echo "brid fly by " . $this->moveMent  ;  

 }
}
$c = new Bird();
$c ->  setMounth(" mounth") ;
echo $c -> eat().'<br>'; 
 $c -> methodMm("wings") ;
echo $c-> fF() .'<br>'; 