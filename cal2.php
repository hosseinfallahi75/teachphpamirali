<?php
    if(!empty($_POST['a']) && !empty($_POST['b']) && !empty($_POST['c']))
    {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        switch($c){
            case '+' :
            $sum = $a + $b;
            echo ' = ' .$sum;
            break;
            case '-' :
            $sum = $a - $b;
            echo ' = '.$sum;
            break;
            case '*' :
            $sum = $a*$b;
            echo ' = '.$sum;
            break;
            case '/' :
            $sum = $a/$b;
            echo ' = '.$sum;
            break;
        }
    }



?>