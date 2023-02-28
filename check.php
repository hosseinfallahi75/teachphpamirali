<?php
    // if(!empty($_POST['name']) && !empty($_POST['family']) && !empty($_POST['email']) && !empty($_POST['phone'])){
    //     $name = $_POST['name'];
    //     $family = $_POST['family'];
    //     $email = $_POST['email'];
    //     $phone  = $_POST['phone'];
    //     $coo = mysqli_connect("localhost","root","","teachamirali");
    //     if(!mysqli_connect_error()){
    //         mysqli_query($coo,"insert into users (name,family,email,phone) values ('".$name."','".$family."','".$email."','".$phone."')");
    //         mysqli_close($coo);
    //         header("location:index2.php");
    //     }
    //     else{
    //         echo "error connect";
    //     }
    // }
    // else{
    //     header("location:index.php");
    // }



    $coo = mysqli_connect("localhost","root","","teachamirali");
    if(!mysqli_connect_error()){
        $query = "select * from users where name='amirali' and family='marouf' order by id DESC";
        $table = mysqli_query($coo,$query);
        echo "<table border='1'>
            <tr>
                <td>ردیف</td>
                <td>نام</td>
                <td>نام خوانوادگی</td>
                <td>ایمیل</td>
                <td>تلفن</td>
            </tr>";

        while($rows=mysqli_fetch_assoc($table)){
            echo "<tr>";
            echo "<th>".$rows['id']."</th>";
            echo "<th>".$rows['name']."</th>";
            echo "<th>".$rows['family']."</th>";
            echo "<th>".$rows['email']."</th>";
            echo "<th>".$rows['phone']."</th>";
            
            echo "</tr>";
        }

        echo "</table>";
        mysqli_close($coo);
    }
    else{
        echo "error connection";
    }



?>