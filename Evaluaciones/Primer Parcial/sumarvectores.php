
    <?php
    session_start();
        $n=$_SESSION['n'];
        echo "Vector 1 <br>";
        for($i=0;$i<$n;$i++){
            $v1=$_POST['v1'.$i];
           
            echo "<input type='number' value='$v1'><br>";

        }
        echo "Vector 2 <br>";
        for($i=0;$i<$n;$i++){

            $v2=$_POST['v2'.$i];

            echo "<input type='number' value='$v2'>";
        }
        echo "<br>La suma del los vectores es: <br>";
        for($i=0;$i<$n;$i++)
        {
            $s=$sum=$_POST['v1'.$i]+$_POST['v2'.$i];
            echo "<input type='number' value='$s'>";
        }
    ?>
