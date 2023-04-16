<?php
    include('funciones.php');
    $a=$_COOKIE["a"];
    $b=$_COOKIE["b"];
    $op=$_GET['operacion'];
    switch($op){
        case 'suma':
            echo "<div>El resultado</div>";
            echo "<div>de :$a + $b</div>";
            echo "es:".Operaciones::suma($a,$b);
            break;
            case 'resta':
                echo "<div>El resultado</div>";
                echo "<div>de :$a - $b</div>";
                echo "es:".Operaciones::resta($a,$b);
                break;
             case 'multiplicacion':
                echo "<div>El resultado</div>";
                echo "<div>de :$a * $b</div>";
                echo "es:".Operaciones::multiplicacion($a,$b);
                break;   
            case 'division':
                echo "<div>El resultado</div>";
                echo "<div>de :$a / $b</div>";
                echo "es:".Operaciones::division($a,$b);
                break;                      
        default:break;    
    }
?>