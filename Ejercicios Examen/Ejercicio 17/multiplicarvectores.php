<?php session_start();
    $n=$_SESSION["n"];
    $mul=0;
    for($i=0;$i<=$n;$i++){
        $mul+=$_POST['v1']*$_POST['v2'];
    }
    echo 'La multiplicacion de los vectores es:'.$mul;

?>