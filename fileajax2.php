<?php
    if(!empty($_POST['in']))
    {
        $input = $_POST['in'];
        $file  = fopen("user.txt","w+");
        $c = fwrite($file,$input);
        echo 'تعداد کارکتر :' .$c;
    }



?>