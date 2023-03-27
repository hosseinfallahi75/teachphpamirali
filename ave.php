<?php

function av(){
    $s = 0;
    $ave = 0;
    for($i=1;$i<=500;$i++){
        if($i%2!=0){
            $s+=$i;
        }
        $ave = $s/100;
    }
    return $ave;
}
echo av();

?>
