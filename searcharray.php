<?php
    $name = array('ali','mohsen','reza','sina','amir','javad','mohhamad');
    function search($n){
        $s=0;
        $array = array();
        $array=$GLOBALS['name'];
        $t = count($array);
        for($i=0;$i<$t;$i++){
            if($array[$i]==$n){
                echo 'yes found in index number :'.$i;
                $s = 1;
                break;

            }
        }
        if($s!=1){
            echo 'not found';
        }

    }
    echo search('hossein');



?>