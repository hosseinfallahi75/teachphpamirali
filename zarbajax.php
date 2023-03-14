<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jadval zarb</title>
    <script src="./jquery.min.js"></script>
    <script>
        function send(){
            $.post('zarbajax2.php',{a:document.getElementById("a").value,b:document.getElementById("b").value},
            function (data){
                $('#s').html(data);
            }
            )
        }
    </script>
</head>
<body>
<table border="1" cellpadding="7" cellspacing="3">
    <?php
    for($i=1;$i<=10;$i++){
        echo "<tr>";
        for($t=1;$t<=10;$t++){
            echo "<th>".$t*$i."</th>";
        }
        echo "</tr>"."</th>";
    }
       

    ?>
</table>
<input type="text" id="a" size="2" onkeyup="send();" maxlength="2">
<input type="text" id="b" size="2" onkeyup="send();" maxlength="2">
    <div id="s"></div>
</body>
</html>