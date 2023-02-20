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

$fil = fopen('user.txt',"r");
$data = fread($fil,8);
echo $data;
// if(!$fil) die("cannot open the file");

// $file = fopen("user.txt","w");
// fclose($file);

// echo "<pre>";
// print_r(stat("./login.php"));
// echo "</pre>";



 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="name"><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>