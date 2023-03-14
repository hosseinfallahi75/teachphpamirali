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
            $.post('combop2.php',{status:document.getElementById("db").value},function(data){
                $('#sss').html(data);
            })
        }
    </script>
</head>
<body>
    <select name="" id="db" onChange="send();">
        <option value="DESC">DESC</option>
        <option value="ASC">ASC</option>
    </select>
    <br>
    <textarea id="sss" cols="30" rows="10"></textarea>
</body>
</html>