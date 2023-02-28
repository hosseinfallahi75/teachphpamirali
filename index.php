<?php
// حروف انگلیسی بزرگ یا کوچیک
// _

// فاصله نمیتونین استفاده کنیم

// $_A = 10;
// echo $_A;

// echo "<br>";

// define("name","hossein",true);
// echo name;

// function test(){
//     $c = 5;
//     echo $c;
// }
// test();
//     $x=25;
//     $y=75;
// function test (){
//     global $x,$y;
//     $x = $x + $y;
// }
// test();
// echo $x;

// function test(){
//     static $x=0;
//     echo $x;
//     $x++;
// }
// test();
// echo "<br>";
// test();
// echo "<br>";
// test();
// echo "<br>";
// function test($x){
//     echo $x;
// }
// test(35);
// Boolean
// integer
// float
// string
// array
// object
// null

// عدد صفر(0)
// عدد صفر ممیز صفر(0.0)
// رشته خالی و یا رشته "0"
// یک ارایه بدون عنصر
// یک شی بدون متغییر عضو
// مقدار null

// $st = True;
// $st1 = 10.2;
// $st2 = "A";
// $st3 = "False";
// $st4 = 0;
// $st5 = "";
// $st7 = [];
// $int = 2;
// $float = 10.2;
// $point = 17;

// var_dump(is_bool($st));
// var_dump(is_bool($st1));
// var_dump(is_bool($st2));
// var_dump(is_bool($st3));
// var_dump(is_bool($st4));
// var_dump(is_bool($st5));
// var_dump(is_bool($st7));
// var_dump(is_int($int));
// var_dump(is_float($float));

// $string = 'this is a simple string \\';
// echo $string;

// $name = "\nasanbiamoz";
// $name = "\rasanbiamoz";
// $name = "\tasanbiamoz";
// $name = "\\asanbiamoz";
// $name = "\$asanbiamoz";
// $name = "\"asanbiamoz";
// echo "<pre>"."my name is $name"."</pre>";

// $car = array("bmw",2,"toyota");
// echo $car[0]."<br>";
// echo $car[1]."<br>";
// echo $car[2]."<br>";

// $age = array("mohsen"=> "19","sina"=>"20","amir" => "30");
// echo 'mohsen age :' .$age["mohsen"]."<br>";
// echo 'sina age :' .$age["sina"]."<br>";
// echo 'amir age :' .$age["amir"]."<br>";

// class Car
// {
//     var $color;
//     function car($color="green"){
//         $this->color = $color;
//     }
//     function what_color()
//     {
//         return $this->color;
//     }
// }
// $new = new Car;
// var_dump($new);

// $a = 100;
// $a=null;
// $b = null;
// var_dump($a);
// var_dump($b);

// $a = "hello world";
// echo strlen($a);

// echo strpos("hello world","world");
// echo strtolower("Hello world");
// echo strtoupper("hello world");
// echo ord("H");
// $a = ' ali';
// $b = 'ali';
// if($a == $b){
//     echo "ok";
// }else{
//     echo "no";
// }

// $a = trim($a);
// $b = trim($b);
// if($a == $b){
//     echo "trim ok";
// }else{
//     echo "trim nok";
// }

// +=
// -=
// .=
// *=
// /=
// %=

// عملگرهای تخصیصی
// $a = 50;
// $a = $a + 10;
// $a+=10;
// $a-=10;
// $a.="string";
// $a*=3;
// $a/=3;
// $a%=3;
// echo $a;

// عملگرهای ریاضی
// $a = 5;
// echo $a--;
// +
// -
// *
// /
// %
// echo $a++;
// ++$a;
// $a--;
// --$a;

// $x = 1;
// $x--;
// echo $x;

// عملگرهای مقایسه ای

//   ==
//   ===
//   !=
//   <>
//   !==
//   <
//   >
//   <=
//   >=

// true 1
// false

// $a = 1;
// $b = 1;
// if($a == $b){
//     echo "ok";
// }else{
//     echo 'nok';
// }
// if($a === $b){
//     echo "ok";
// }else{
//     echo 'nok';
// }
// if($a != $b){
//     echo "ok";
// }else{
//     echo 'nok';
// }
// if($a <> $b){
//     echo "ok";
// }else{
//     echo 'nok';
// }
// if($a !== $b){
//     echo "ok";
// }else{
//     echo 'nok';
// }
// if($a > $b){
//     echo "ok";
// }else{
//     echo 'nok';
// }
// if($a >= $b){
//     echo "ok";
// }else{
//     echo 'nok';
// }
// if($a <= $b){
//     echo "ok";
// }else{
//     echo 'nok';
// }

// عملگرهای منطقی

// and
// or
// !
// &&
// ||

// $a = 10;
// $b = 12;

// if($a == $b && $a > 9){
//     echo "ok";
// }else{
//     echo "nok";
// }
// if($a == $b || $a > 9){
//     echo "ok";
// }else{
//     echo "nok";
// }
// echo !$a;

// $a = 20;
// $b = 20;
// // if ($a > $b) echo "ali";
// if($a > $b){
//     echo "ok";
// }
// elseif($a == $b){
//     echo "130";
// }
// else{
//     echo "nok";
// }
// $a = 2;
// switch($a){
//     case 1:echo 'a = 1';break;
//     case 2:echo 'a = 2';break;
//     case 3:echo 'a = 3';break;
//     case 3:echo 'a = 4';break;
//     default;
//     echo 'a = ?!';
// }
// while($a>=1){
//     echo $a."<br>";
//     $a = $a - 2;
// }

// $a = 20;
// do{
//     echo $a."<br>";
//     $a = $a - 2;
// } while($a>=1);
//  echo "<hr>";
//  echo $a;
// for($a=0;$a<=9;$a+=2){
//     echo $a."<br>";
// }
// $arr = array(1,2,3,4,5,6);
// foreach($arr as $item){
//     echo $item." , ";
// }

// $age = array("peter" => "35","amir" => "10","ali" => "5");
// foreach($age as $key=>$n){
//     echo $key.' = '.$n."<br>";
// }

// $a = array("one","two","three","stop","four");
// foreach($a as $key){
//     if($key == "stop")
//     break;
//     echo $key."<br>";
// }
// for($a=0;$a<=10;$a++){
//     if($a%2==0)
//     continue;
//     echo $a.' , ';

// }
// function asanbiamoz($name="hossein"){
//   echo $name.',';
// }
// asanbiamoz('ali');
// asanbiamoz('mohsen');
// asanbiamoz();

// function firstfunction($n){
//     if($n > 0){
//         return $n*firstfunction($n-1);
//     }
//     return 1;
// }
// echo firstfunction(3);
// echo "<br>";
// echo firstfunction(0);
// $GLOBALS
// $_SERVER
// $_GET
// $_POST
// $_COOKIE
// $_FILES
// $_ENV
// $_REQUEST
// $_SESSION

// echo $_SERVER['PHP_SELF'];
// echo "<br>";
// echo $_SERVER['SERVER_NAME'];
// echo "<br>";
// echo $_SERVER['HTTP_HOST'];
// echo "<br>";
// echo $_SERVER['SERVER_ADDR'];
// echo "<br>";
// echo $_SERVER['HTTP_USER_AGENT'];
// echo "<br>";
// echo $_SERVER['SCRIPT_NAME'];
// echo "<br>";
// if(isset($_REQUEST['name']))
// {
//     $name = $_REQUEST['name'];
//     echo $name;
// }
// if(isset($_POST['name'])){
//     $age = $_POST['name'];
//     echo $age;
// }
// if(isset($_GET['name'])){
//     $name = $_GET['name'];
//     echo $name;
// }
// setcookie(اسم کوکی,مقدار کوکی,زمان اتقضا)
// $cookies = "amirali";
// $cook = setcookie("name","$cookies",time()+3600);
// echo $cook;
// if(isset($_GET['name'])){
//     $name = $_GET['name'];
//     setcookie("name","$name",time()+60);
//     echo "welcome $name" . "<br>" . "please reopen page";
// }
// elseif(isset($_COOKIE['name']))
// {
//     echo $_COOKIE['name']. "<br>" . "is read cookie";
// }

// $_FILES

// $_ENV
// $_SESSION
// session_start();
// if(isset($_GET['name']))
// {
//     $name = $_GET['name'];
//     $_SESSION['fname'] = $name;
//     header("location:login.php");
// }
// elseif(isset($_SESSION['fname']))
// {
// echo "welcome : ".$_SESSION['fname']."<br>";

// <!-- // <a href="?action=logout">logout</a> -->

// }
// if(isset($_GET['action']) && $_GET['action']=='logout')
//  {
//     session_destroy();
//     header("location:login.php");
//  }

// include("./login.php");
// require("./login.php");

// include_once("./login.php");
// require_once("./login.php");
//  echo $_SESSION['fname'];
// teachphpamirami/login/login.php

// c:\home\mydocs\data.txt;

// teachphpamirali\\login\\login.php
// r
// r+
// w
// w+
// a
// a+

// $fil = fopen('user.txt',"r");
// $data = fread($fil,8);
// echo $data;
// if(!$fil) die("cannot open the file");

// $file = fopen("user.txt","w");
// fclose($file);

// echo "<pre>";
// print_r(stat("./login.php"));
// echo "</pre>";
// the message

// $_FILES["fileToUpload"]["name"]     نام فایل اپلود شده
// $_FILES["fileToUpload"]["type"]     نوع فایل ارسال شده image/gif image/svg
// $_FILES["fileToUpload"]["size"]    اندازه فایل اپلود شده 
// $_FILES["fileToUpload"]["tmp_name"]    نام فایل موقت دارای فایل اپلود شده 
// $_FILES["fileToUpload"]["error"]    کد خطا ایجاد شده هنگام اپلود



// $target_dir = "uploads/";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENTION));

// if(isset($_POST["submit"]))
// {
//    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//    if($check !== false){
//       echo "file is an image - " .$check["mime"] . ".";
//       $uploadOk = 1;
//    }
//    else 
//    {
//       echo "file is not an image";
//       $uploadOk = 0;
//    }

// }

// if(file_exists($target_file))
// {
//    echo "sorry, file already exist";
//    $uploadOk = 0;
// }
// if($_FILES["fileToUpload"]["size"] > 500000){
//    echo "sory you file is too large";
//    $uploadOk = 0;
// }

// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif")
// {
//    echo "sorry only jpg jpeg png gif file are allowed";
// }
// if($uploadOk == 0){
//    echo "sory you file was not uploaded .";
// }
// else{
//    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file )){
//       echo "the file " .htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). "has been uploaded .";
//    }else{
//       echo "sorry there was an error uploading your file";
//    }
// }

// $to = "hossein.fallahi75programmer@gmail.com";
// $subject = "khobi";
// $message = "soory there was an error uloading";
// $from = "hossein.fallahi75programmer@gmail.com";
// $header = "From:" . $from;
// if(mail($to,$subject,$message,$header)){
//    echo "ایمیل ارسال شد";

// }else{
//    echo "ایمیل ارسال نشد";

// }
// class human{
//    private $name;
//    private $age;
//    private $family;
//    // public function __construct(){
//    //    echo "amirali"."<br>";
//    // }
//    public function __destruct(){
//       echo "class in being destroyed";
//    }
//    function set($nam,$sen,$subnam){
//       $this->name = $nam;
//       $this->family = $subnam;
//       $this->age   = $sen;
//    }

//    function get(){
//          echo "your name : " .$this->name."<br>";
//          echo "your subname : " .$this->family."<br>";
//          echo "your age : " .$this->age."<br>";
//    }

// }

// $mohsen = new human();
// $mohsen = NULL;
// // unset($mohsen); 
// $mohsen->set('mohsen','26','fallahi');
// $mohsen->get();
// echo "<hr>";
// $ali = new human(); 
// $ali->set('ali','11','sss');
// $ali->get();

// self::
// parent::


// class human {
//    // private $name;
//    // public function s(){
//    //    echo "welcome ali";
//    // }
//    static public $name;
//    static public function s(){
//       echo "welcome"."<br>";
//       self::$name="mohsen";
//       echo self::$name."<br>";

//    }
// }
// $mohsen = new human();
// $mohsen->s();
// human::s();
// echo human::$name;
// class human{
//    static $name;
//    static public function s(){
//       self::$name = "ahmad";
//    }
// }
// class humantwo extends human{
//    const i = 100;
//    function sd(){
//       parent::s();
//       echo parent::$name."<br>";
//       echo self::i;
//    }
// }
// $a = new humantwo();
// $a->sd();
// class human{
//    const i = 10;
//    public function s(){
//       for($r=0;$r<=self::i;$r++){
//          echo $r."<br>";
//       }
//    }
// }
// $a = new human();
// $a->s();


// class person{
//    public $name;
//    public $family;
//    function printt(){
//       echo "Name :" .$this->name."<br>";
//       echo "Family :" .$this->family."<br>";
//    }
// }

// class student extends person{
//    public $studentid;
//    function get(){
//       echo "ID :".$this->studentid."<br>";
//    }
// }
// $a = new student();
// $a->name="ali";
// $a->family="fallahi";
// $a->studentid="122";
// $a->get();
// $a->printt();

// final class baseclass{
//    public function test(){
//       echo "base class";
//    }
// }
// class s extends baseclass{
//    public function ali(){
//       echo "ali";
//    }
// }
// $a = new s();


// class person{
//    public function test($name){
//       echo "my name is $name"."<br>";
//    }
// }
// class two extends person{
//    public function test($age){
//       echo "age : $age"."<br>";
//    }
// }
// $a = new two();
// $a->test("19");
// $b = new person();
// $b->test("mohsen");
// class person{
//    function display(){
//       echo "simpleclass"."<br>";
//    }
// }
// class human extends person{
//    function display(){
//       parent::display();
//       echo "extends class"."<br>";
//    }
// }
// $a = new human();
// $a->display();


// class person{
//    function display(){
//       echo "class persona"."<br>";
//    }
// }
// class human extends person{
//    function display(){
//       echo "class extends"."<br>";
//    }
// }
// $a = new human();
// if($a instanceof person)
// {
//    echo "a instance of person"."<br>";
// }
// if($a instanceof human)
// {
//    echo 'a instance of human';
// }


// class test{
//    function __construct(){
//       echo "welcome";
//    }
   
// }
// class exten extends test{
//    public function create(){
//       echo "create";
//    }
//    function __construct(){
//       echo "wellcome2";
//    }
// }

// $a = new exten();

// interface test{
//    public function input($a,$b);
//    public function display();
// }
// class zarb implements test{
//    private $one;
//    private $two;
//    private $sum;
//    public function input($a,$b){
//       $this->one = $a;
//       $this->two = $b;
//    }

//    public function display(){
//       $this->sum = $this->one+$this->two;
//       echo 'sum' .$this->one.'and'.$this->two.':'.$this->sum;
//    }
// }
// $a = new zarb();
// $a->input('46','54');
// $a->display();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <form action="" method="post" enctype="multipart/form-data">
      <label for="">uploaded image</label>
      <input type="file" name="fileToUpload" id="fileToUpload">
      <input type="submit" value="upload" name="submit">
    </form> -->

</head>
<body>

  
</body>
</html>