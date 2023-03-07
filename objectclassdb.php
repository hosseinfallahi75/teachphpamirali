<?php
    include 'classdb.php';
    $a = new DB();
    $a->connect('localhost','root','','teachamirali');
    $b = $a->query("select * from users");
    while($row = mysqli_fetch_assoc($b))
    {
        echo $row['name']."<br>";
        echo $row['family']."<br>";
        echo $row['email']."<br>";
    }



?>