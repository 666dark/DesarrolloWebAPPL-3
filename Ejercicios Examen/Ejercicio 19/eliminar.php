<?php
include ('cola.php');
session_start();

echo 'elemnto eliminado es: '. $_SESSION['c']->eliminar();


?>
<meta http-equiv="refresh" content="4;url=menu_cola.html">