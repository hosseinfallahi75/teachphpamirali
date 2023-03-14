<?php
if(isset($_POST['status'])){
    $status = $_POST['status'];
    $coo = mysqli_connect("localhost","root","","teachamirali");
    if(!mysqli_connect_error()){
        $query = "select * from users ORDER BY age $status";
        $table = mysqli_query($coo,$query);
        while($rows=mysqli_fetch_assoc($table)){
            echo "Age :" .$rows['age'] ."\n" . " name : " .$rows['name']."\n";
        }
        mysqli_close($coo);
    }
    else{
        echo 'error connect';
    }
}
else{
    header("location:combop1.php");
}



?>