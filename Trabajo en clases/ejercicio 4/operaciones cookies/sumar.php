<?php
include('operaciones.php');
    if(isset($_COOKIE['a'])and isset($_COOKIE['b'])){
        $op=new operaciones($_COOKIE['a'],$_COOKIE['b']);
        echo "La suma es".$op->suma();
    }
    else {
        echo 'no existen valores';
    }
?>
<meta http-equiv="refresh" content="4;url=menu.html">