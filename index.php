<?php
  // $co = mysqli_connect("localhost","root","","teachamirali");
  // if(!mysqli_connect_error()){
    // $q = "Update users SET name='amir' , family='aliabadi',email='aliss@gmail.com' where id='1'";
    // $q = "delete * from users";
  //   mysqli_query($co,$q);
  //   mysqli_close($co);
  // }
  // else{
  //   echo "error connect";
  // }



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ajax</title>
  <script src="./jquery.min.js"></script>
  <script>
    var ali = [0,10,5,8];
    ali.revers();
  function send(){
    $.post('ajax.php',{name:document.getElementById("f").value},function(data){
      $('#sss').html(data);
    })
  }
  
</script>
</head>
<body>
  <label for="">test</label>
    <input type="text" onkeyup="send();" id="f">
    <br>
    <div id="sss"></div>
</body>

</html>
