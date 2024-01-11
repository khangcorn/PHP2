<?php
require_once "./Shape.php";

class Circle extends Shape{
 public $pi = 3.14 , $r;

 public function getPerimeter() {
    return 2 * $this-> pi * $this->r;
}
public function getArea() {
 return $this-> pi * $this-> r **2;
}
public function setR($r){
    $this-> r  = $r;
}

}

$circle = new Circle();
 $circle -> setR(12);
 echo $circle -> getPerimeter();
 echo $circle -> getArea();