<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>day1</title>
    <script src="./jquery.min.js"></script>
    <script>
        function send(){
            $.post('arrayajax2.php',{n:document.getElementById("n").value},function(data){
                $('#s').html(data)
            })
        }
    </script>
</head>
<body>
    <input type="text" name="n" id="n" />
    <input type="button" value="Insert" onclick="send();" />
    <br>
    <br>
    <div id="s"></div>
</body>
</html>