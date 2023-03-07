<?php
class person{
    private $name;
    private $family;
    private $age;
    function setperson($name,$family,$age){
        $this->name = $name;
        $this->family = $family;
        $this->age = $age;
    }
    function get(){
        echo 'Name : '.$this->name."<br>".'Family : '.$this->family."<br".'Age : '.$this->age."<br>";
    }
}
class student extends person{
    private $id;
    private $status;
    function setstudent($name,$family,$age,$id,$status){
        $this->id = $id;
        $this->status = $status;
        parent::setperson($name,$family,$age);
        parent::get();
        echo 'ID : '.$this->id."<br>". 'Status : '.$this->status."<br>";
    }
}

$a = new student();
$a->setstudent("mohsen","fallahi","26","123123","asanbiamoz");


?>