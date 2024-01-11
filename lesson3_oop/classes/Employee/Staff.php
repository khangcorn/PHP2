<?php
require_once "./Person.php";
class Staff extends Person{

 public $deadline;
 

 public function setDeadLine($deadline){
    $this-> deadline = $deadline ;
 }
 public function DeadLine(){
    echo "dateline is " . $this->deadline  ; 
 }
 public function name(){
    echo "name is " . $this->name  ;  
}
public function age(){
    echo "age  is " . $this->age ;  
}



}

$s = new Staff();
$s -> setName("Corn");
 echo $s  -> name();
 $s -> setAges(20);
 echo $s  -> age();
 $s -> setDeadLine("21/08");
 $s -> DeadLine();
?>
