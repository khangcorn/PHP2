<?php
require_once "./Shape.php";
class Square extends Shape{
    public $height;
public function setHeight($height){
    $this-> height =$height ;

}
public function getArea() {
    return $this->length ** 2;
}
public function volumeSqure(){
    echo  $this-> length * $this-> width * $this-> height;
}
}
$squre = new Square();
$squre -> setLength(8);
$squre -> setWidth(10);
echo $squre -> getPerimeter() .'<br>';
echo  $squre -> getArea() .'<br>';
$squre -> setHeight(12);

echo $squre -> volumeSqure() ;


?>