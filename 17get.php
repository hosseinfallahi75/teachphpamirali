<?php
    if(isset($_GET['name'])){
        $name = $_GET['name'];
        echo $name;
    }
    else{
        header("location:17get.html");
    }




?>