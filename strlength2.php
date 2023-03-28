<?php
    if(isset($_POST['n']))
    {
        $name=$_POST['n'];
        echo 'تعداد کارکتر'.strlen($name);

    }
    else{
        header("location:strlength.php");
    }




?>