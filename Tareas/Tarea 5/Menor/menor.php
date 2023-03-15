<?php
    $a=6;
    $b=20;
    $c=3;
    if($a<$b)
        if($a<$c)
            echo "el menor de $a, $b, $c es: $a";
        else
            echo "el menor de $a, $b, $c es: $c";    
    else
        if($b<$c)
            echo "el menor de $a, $b, $c es: $b";
        else
            echo "el menor de $a, $b, $c es: $c";            
?>