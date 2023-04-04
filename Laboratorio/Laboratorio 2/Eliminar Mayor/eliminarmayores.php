<?php
    session_start();
    $m=$_GET['m'];

  
        $a=$_SESSION["a"];
        echo ' Valores mayores a: '.$m.' fueron: <br>';
        $j=0;
        for($i=0;$i<count($a);$i++){
            if($a[$i]>$m)
            {
                echo $a[$i].'<br>';
                unset($a[$i]);
            }
            else{
            
                $b[$j]=$a[$i];
                $j++;
        
            }
        }
        echo 'valores que quedan <br>';

    for($k=0;$k<count($b);$k++){
        echo $b[$k].'<br>';
    }

    

?>