<?php
$name = array(10,5,86,47,36,78,0,15,-8,888,165,11);
function sortt(){
    $array = array();
    $array = $GLOBALS['name'];
    $t = count($array);
    for($i=0;$i<$t-1;$i++){
        for($j=0;$j<$t-1;$j++){
            if($array[$j+1] < $array[$j]){
                $temp=$array[$j];
                $array[$j] = $array[$j+1];
                $array[$j+1]=$temp;

            }

        }

    }
    foreach($array as $k){
        echo $k."<br>";
    }

}

sortt();




?>