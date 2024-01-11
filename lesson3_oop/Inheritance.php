<?php
 class Human{
    // declare variable means 
 public $arms;
 public $legs ;
 public $eyes;
 public  $nose;
 public $mounth;


 // declare phuong thuc mean declare function 
 function Nourish(){
    return "Absorb by the mounth";
 }

// 
public function  setHands($arms){
$this-> arms = $arms;
}
public function  setLegs($legs){
    $this-> legs = $legs;
}


 }



// class children can have thuoc tinh which a baby don't have 
 class Adult extends Human{
    public $teeth; 
    public $beard;
    public $deadLine;
    public function Walk(){
     echo "Adult walk by  ". $this->legs. " legs ";  
    }

 }
 class Youth extends Human{
public function Bo(){
    echo "Children travel by  " . $this->legs ."and". $this->arms  ;  
}


 }



 $a = new Adult();
 $a -> setLegs(2);
echo  $a -> Walk() .'<br> ' ;



 $c = new Youth();
 $c -> setLegs(2);
 $c -> setHands(2);
  echo $c -> Bo();
?>