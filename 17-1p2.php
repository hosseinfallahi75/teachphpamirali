<?php
if(isset($_POST['name'])){
    $name = $_POST['name'];
    $coo = mysqli_connect("localhost","root","","teachamirali");
    if(!mysqli_connect_error()){
        $query = "select * from users where name='".$name."'";
        $table = mysqli_query($coo,$query);
        while($rows = mysqli_fetch_assoc($table)){
            echo "ID : ".$rows['id']."<br>";
            echo "Name : ".$rows['name']."<br>";
            echo "Family : ".$rows['family']."<br>";
            echo "Email : ".$rows['email']."<br>";
        }
        mysqli_close($coo);
    }
    else{
        echo 'error connect';
    }
}





?>