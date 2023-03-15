<?php
    $n=$_GET['n'];
    for($i=1;$i<10;$i++)
    {
        echo "<div>";
        echo ("$n + $i= ". ($n+$i));    
        echo "</div>"; 
    }
?>