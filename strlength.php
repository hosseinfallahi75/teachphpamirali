<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./jquery.min.js"></script>
    <script>
        function send(){
            $.post('strlength2.php',{n:document.getElementById("f").value},
            function (data){
                $('#s').html(data);
            }
            )
        }
    </script>
</head>
<body>
    <input type="text" onkeyup="send();" id="f">
</body>
</html>