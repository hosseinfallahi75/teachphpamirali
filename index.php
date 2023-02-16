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


 ?>
