<?php
    session_start();
    include('operaciones.php');
    $a=$_GET['a'];
    $b=$_GET['b'];
    $_SESSION['a']=$a;
    $_SESSION['b']=$b;


   
?>
<meta http-equiv="refresh" content="4;url=menu.html">