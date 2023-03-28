<?php
    $n = [1,5,9,6,4,3,7,12,25,46,96];
    function av($a){
        $s = 0;
        $t = count($a);
        foreach($a as $k){
            $s+=$k;
        }
        $s/=$t;
        echo $s;

    }
    av($n);



?>