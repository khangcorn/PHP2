<?php
require_once "./Person.php";
class Manager extends Person{

    public $devideSalary;
    
   
    public function setSalary($devideSalary){
       $this-> devideSalary = $devideSalary ;
    }
    public function Salary(){
       echo "devideSalary is " . $this->devideSalary  ; 
    }
    public function name(){
       echo "name is " . $this->name  ;  
   }
   public function age(){
       echo "age  is " . $this->age ;  
   }
   
   
   
   }
   
   $s = new Manager();
   $s -> setName("Jonh Conner");
    echo $s  -> name();
    $s -> setAges(20);
    echo $s  -> age();
    $s -> setSalary("100000000");
    $s -> Salary();
   ?>
   