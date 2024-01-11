<?php
class Shape{
    public $length , $width;

public function setLength($length){
    $this-> length = $length ;
}
public function setWidth($width){
    $this-> width = $width ;
}

public function getPerimeter() {
    return 2 * ($this->length + $this->width);
}
public function getArea() {
    return $this->length * $this->width;
}
     
}

?>