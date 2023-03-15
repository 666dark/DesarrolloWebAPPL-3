<?php
    function menor($a, $b, $c){
        if ($a<$b and $b<$c)
            return $a;
        else
            if ($b<$a and $b<$c)  
                return $b;
        return $c;          
    }
?>    