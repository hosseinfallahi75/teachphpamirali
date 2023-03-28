<?php
if(!empty($_POST['age']))
{
    $y = $_POST['age'];
    $day;
    $week;
    $month;
    $h;
    $m;
    $s;
    function s($age){
        $GLOBALS['day'] = $age*365;
        $GLOBALS['week'] = $GLOBALS['day']/7;
        $GLOBALS['month'] = $GLOBALS['day']/31;
        $GLOBALS['h']  = $GLOBALS['day']*24;
        $GLOBALS['m']  = $GLOBALS['h']*60;
        $GLOBALS['s']  = $GLOBALS['m']*60;

    }
    s($y);
    echo 'شما'.$s.'ثانیه و'.$m.'دقیقه و'.$h.'ساعت و'.$day.'روز و'.floor($week).'هفته و'.floor($month).'ماه سن دارید';
}


?>