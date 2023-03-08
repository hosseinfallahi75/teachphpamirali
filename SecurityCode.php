<?php
session_start();
$code = $_SESSION['code'];
if(empty($_POST['status'])){
    $image = imagecreate(150,150);
    $background_color = imagecolorallocate($image,250,0,0);
    $text_color = imagecolorallocate($image,255,255,255);
    imagestring($image,5,50,50,$code,$text_color);
    header("Content-Type: image/png");
    imagepng($image);
    imagedestroy($image);
}
else{
    $user = $_POST['user'];
    if($user == $code){
        echo "successfully cod!";
    }
}





?>