<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cal</title>
    <script src="./jquery.min.js"></script>
    <script>
        function send(t){
            $.post('cal2.php',{a:document.getElementById("adadeaval").value,
                b:document.getElementById("adadedovom").value,c:t
            },function(data){
                $('#s').html(data);
            })
        }
    </script>
</head>
<body>
    <input type="text" id="adadeaval" maxlength="6" size="10" />
    <input type="text" id="adadedovom" maxlength="6" size="10" />
    <label for="" id="s">=</label>
    <br>
    <input type="button" value="+" onclick="send(this.value);" />
    <input type="button" value="-" onclick="send(this.value);" />
    <input type="button" value="*" onclick="send(this.value);" />
    <input type="button" value="/" onclick="send(this.value);" />
</body>
</html>