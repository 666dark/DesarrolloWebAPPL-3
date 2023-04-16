<?php
    $d=$_GET['d'];
    $dia=['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'];
   
    echo "<select>";
    for($i=0;$i<=$d;$i++){
        
        if($i+1==$d){
            echo '<option value="'.$i.'" selected>'.$dia[$i].' </option>';
        }
        echo '<option> '.$dia[$i].' </option>'; 
    }
    echo "</select>";
?>