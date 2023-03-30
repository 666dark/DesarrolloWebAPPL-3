<?php
session_start();
include('operaciones.php');

    if(isset($_SESSION['a'])and isset($_SESSION['b'])){
       $op=new operaciones($_SESSION['a'],$_SESSION['b']);

       echo "La resta es: ".$op->resta();
    }
    else {
        echo 'no existen valores';
    }
?>
<meta http-equiv="refresh" content="4;url=menu.html">