<?php
    include('utiles.php');
    $cadena=$_GET['c'];
    $n=$_GET['n'];
    $util= new Utiles();
    $util->aumentarguiones($cadena, $n);
?>