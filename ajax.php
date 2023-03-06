<?php
 if(isset($_POST['name'])){
    $name = $_POST['name'];
    $coo = mysqli_connect("localhost","root","","teachamirali");
    if(!mysqli_connect_error()){
        $query = "select * from users where name like '%{$name}%'";
        $table=mysqli_query($coo,$query);
        while($rows=mysqli_fetch_assoc($table)){
            echo $rows['name'].$rows['family']."<br>";
        }
        mysqli_close($coo);
    }
    else{
        echo 'error connect';
    }
 }else{
    header("location:index.php");
 }

?>