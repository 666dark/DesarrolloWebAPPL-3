<?php
    $a=$_GET['a'];
    $b=$_GET['b'];
    //include ('operaciones.php');
    //$op=new operaciones($a, $b);
    setcookie('a',$a, time()+3600);
    setcookie('b',$b, time()+3600);
?>
<meta http-equiv="refresh" content="4;url=menu.html">