<?php
    $a=$_COOKIE["a"];
    $op=$_GET['operacion'];
    switch($op){
        case 'sumatoria':
            $s=0;
            for($i=0;$i<$a;$i++){
                $s+=$i;
            }
            echo "La Sumatoria es:". $s;       
            break;    
        case 'factorial':
            $f=1;
            for ($i = 1; $i <= $a; $i++) {
                $f *= $i;
              }
              echo "El factorial es:", $f;
              break;
        case 'fibo':
            $fibo1=0;
            $fibo2=1;
            $i=0;
            while($i<$a)
             {
                $fibo1=$fibo1+$fibo2;
                $fibo2=$fibo1-$fibo2;
                $i++;
            }
            echo "el Fibonacci es:".$fibo1;
            break;
            echo "el Fibonacci es:".$fibo1;
        case 'division':
            $div=$a/$a;  
            echo "La division es:" $div;
            break; 
        
        default:break;

    }

?>
