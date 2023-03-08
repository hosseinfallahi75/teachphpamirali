<?php
session_start();
$text = 'QAZXSWEDCVFRTGBNHYUJMKIOLPqazxswedcvfrtgbnhyujmkiolp0123456789';
$code = '';
for($i=1;$i<=6;$i++){
    $start = rand(0,strlen($text));
    $code.= substr($text,$start,1);
}
$_SESSION['code'] = $code;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>picsecurity</title>
    <script src="./jquery.min.js"></script>
    <script>
        function test(){
            $.post('SecurityCode.php',{user:document.getElementById("f").value,status:2},function(data){
                $('#sss').html(data);
            });
        };
    </script>
</head>
<body>
    <img src="SecurityCode.php"><br>
    <input type="text" onkeyup="test();" id="f" maxlength="6" size="10px" />
    <div id="sss"></div>
</body>
</html>