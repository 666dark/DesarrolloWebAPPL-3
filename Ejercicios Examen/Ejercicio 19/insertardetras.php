<?php
include ('cola.php');
session_start();
$valor=$_GET['valor'];
if (!isset($_SESSION['c']))
{
    $_SESSION['c']=new Cola();
}

$_SESSION['c']->insertardetras($valor);
?>
<meta http-equiv="refresh" content="4;url=menu_cola.html">