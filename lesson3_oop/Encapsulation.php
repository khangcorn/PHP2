<?php
// lớp(class) là tập hợp của nhiều đối tượng có cucngf thuộc và phương thức(có thể khác nhau)
class Student{
// declare thuoc tinh mean declare variable in class 
public $idS;
public $name;
public $lastName;
public $birthDate;


// declare expresstion with no value return
// which mean declear function in class 


public function getInfor(){
// in oop,if you want use the thuoc tinh you have to ues $this -> name thuoc tinh
echo $this -> idS ."-".$this -> name."-".$this -> lastName."-".$this -> birthDate;

}




// Part 2  
// public function getIdStudent(){
//     return $this -> idS;

// }
// public function setIdStudent($idS){
//  $this -> idS = $idS;
// }


// PART 3 
public function __construct($idS,$name,$birthDate)
{
    
$this-> idS = $idS ;
$this-> name = $name ;
$this-> birthDate = $birthDate ;

}
public function setID($id){
$this -> idS = $id;
}
public function setName($name){
    $this -> name = $name;
    }
public function CountYear(){
    return date('Y') - $this -> birthDate;


}
public function IllustrateInfor(){
    echo $this -> idS ."-".$this -> name."-".$this ->CountYear();
}
}
//PART 1
// $st = new Student();
// $st -> idS = "ph33639";
// $st -> name = "khang";
// $st -> lastName = "corn";

// $st -> birthDate = "21/08";
// $st ->getInfor();


// PART 2 

//declare new object
// $stu1 = new Student();
// $stu1 -> setIdStudent("PH01234567890");
// echo $stu1 -> getIdStudent();




// PART 3
// $stu1 = new Student("ph33639" ,"khang" , "2004" );
// $stu1 -> setName("DANIEL");
// $stu1 -> IllustrateInfor();



class Tutor {
    public $idT;
    public $name;
    public $birthDate;
    public $juniorYear;
    public $hoursTeached;
    public $primarySalary;


    public  function __construct($idT,$name,$birthDate,$juniorYear,$hoursTeached,$primarySalary)
    {
        $this -> idT = $idT;
        $this -> name = $name;
        $this -> birthDate = $birthDate;
        $this -> juniorYear = $juniorYear;
        $this -> hoursTeached = $hoursTeached;
        $this -> primarySalary = $primarySalary;



    }

 public  function setIdTutor($idT){
    $this->idT = $idT;
 }

 public  function setNameTutor($name){
    $this->name = $name;
 }
 public  function setBdTutor($birthDate){
    $this->birthDate = $birthDate;
 }
 public  function setJyTutor($juniorYear){
    $this->juniorYear = $juniorYear;
 }
 public  function setHtTutor($hoursTeached){
    $this->hoursTeached = $hoursTeached;
 }
 public  function setPsTutor($primarySalary){
    $this->primarySalary = $primarySalary;
 }

 public function WorkYears(){
    return date('Y')  - $this-> juniorYear;
 }
 public function Demonstrate(){
echo $this -> idT . "-". $this -> name . "-".$this -> birthDate . "-".$this -> juniorYear . "-".$this -> hoursTeached . "-".$this -> primarySalary . "-".$this -> WorkYears(); 
 }

}
$T1 = new Tutor("1","kientc","1998","2015","1000","50000" );
$T1 ->setIdTutor('3');
$T1 -> Demonstrate();




?>