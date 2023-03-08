<?php
if(!empty($_POST['name'] && !empty($_POST['family']))){
    $name = strtolower(trim($_POST['name']));
    $family = strtolower(trim($_POST['family']));
    $coo = mysqli_connect("localhost","root","","teachamirali");
    if(!mysqli_connect_error()){
        $query1 = "select * from users where name='".$name."' and family='".$family."'";
        $table1 = mysqli_query($coo,$query1);
        if(mysqli_num_rows($table1) == 0){
            $query = "insert into users (name,family) values ('".$name."','".$family."')";
            $table = mysqli_query($coo,$query);
            mysqli_close($coo);
            if($table){
                echo 'نام و فامیلی با موفقیت ثبت شده';
            }
            else{
                    echo 'خطا در ثبت نام و فامیلی';
            }
        }
        else{
            echo 'نام و فامیلی وارد شده تکراری می باشد';
        }
    }
    else{
        echo 'خطا در برقراری اتصال به پایگاه داده';
    }
}
else{
    echo 'نام و فامیلی را وارد کنید';
}




?>