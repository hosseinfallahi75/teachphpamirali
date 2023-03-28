<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./jquery.min.js"></script>
    <script>
        function send(){
            $.post('agetest2.php',{age:document.getElementById("n").value},
        function(data){
            $('#s').html(data);
        })
        }
    </script>
    <title>Document</title>
</head>
<body>
    <input type="text" name="name" id="n" onkeyup="send();">
    <br><br><br>
    <div id="s"></div>
</body>
</html>
