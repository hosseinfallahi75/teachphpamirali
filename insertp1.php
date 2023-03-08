<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>picsecurity</title>
    <script src="./jquery.min.js"></script>
    <script>
        function send(){
            $.post('insertp2.php',{name:document.getElementById("n").value,family:document.getElementById("f").value},function(data){
                $('#mes').html(data);
            });
        };
    </script>
</head>
<body>
  <form action="">
    <input type="text" name="name" id="n" />
    <input type="text" name="family" id="f" />
    <input type="button" value="Insert !" onclick="send();" />
  </form>
  <br>
  <div id="mes"></div>
</body>
</html>