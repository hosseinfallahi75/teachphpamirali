<?php
    if(!empty($_POST['n'])){
        $num = $_POST['n'];
        switch($num)
        {
            case 1 : 
            echo "شنبه ";
            break;
            case 2 : 
            echo "یک شنبه";
            break;
            case 3 : 
            echo "دو شنبه ";
            break;
            case 4 : 
            echo "سه شنبه ";
            break;
            case 5 : 
            echo "چهار شنبه";
            break;
            case 6 : 
            echo " پنج شنبه ";
            break;
            case 7 : 
            echo "جمعه";
            break;
            default;
            echo 'اعداد بین 1 تا 7 وارد کنین!';
        }
    }



?>