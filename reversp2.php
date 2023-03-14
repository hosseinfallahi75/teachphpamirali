<?php
$name = $_POST['name'];
$r = array();
function revers($nam){
    $t = strlen($nam);
    for($i=$t;$i>=0;$i--){
        array_push($GLOBALS['r'],substr($nam,$i,1));

    }
    foreach($GLOBALS['r'] as $k){
        echo $k;
    }
}
revers($name);


?>



