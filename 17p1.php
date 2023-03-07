<?php
    $coo = mysqli_connect("localhost","root","","teachamirali");
    if(!mysqli_connect_error()){
        $query = "select * from users";
        $table=mysqli_query($coo,$query);
        echo "<select id='dbl' onChange='send();'>";
        while($rows = mysqli_fetch_assoc($table)){
            echo "<option value='".$rows['name']."'>";
            echo $rows['name'];
            echo "</option>";
        }
        echo "</select>";
    }
    else{
        echo 'error connect';
    }


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
  function send(){
    $.post('17-1p2.php',{name:document.getElementById("dbl").value},function(data){
      $('#s').html(data);
    })
  }
  
</script>
</head>
<body>
    <div id="s"></div>
   
</body>

</html>
