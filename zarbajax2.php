<table border="1" cellpadding="5" cellspacing="2"> 
    <?php
        if(!empty($_POST['a']) && !empty($_POST['b'])){
            $a = $_POST['a'];
            $b = $_POST['b'];
            for($i=1;$i<=$a;$i++){
                echo "<tr>";
                for($t=1;$t<=$b;$t++){
                    echo "<th>".$t*$i."</th>";
                }
                echo "</tr>"."</th>";
            }
        }
        else
        {
            echo 'لطفا عدد را وارد کنید';
        }


    ?>
</table>