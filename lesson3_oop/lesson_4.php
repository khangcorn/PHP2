<?php
require_once "../classes/Animal.php";
require_once "../classes/Dog.php";

$dog = new Dog();
$dog ->SetBark("gau");
echo $dog -> Bark();


