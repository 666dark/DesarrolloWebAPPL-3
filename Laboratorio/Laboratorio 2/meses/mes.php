<?php
    $n=$_GET['n'];
    $mes=["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
    echo '<div><label>Mes:</label></div>';
    echo '<select name="mes" >';
    for($i=0;$i<count($mes);$i++){
        if($i+1==$n){
            echo '<option value="'.$i.'" selected>'.$mes[$i].' </option>';  
        }
        else{
            echo '<option> '.$mes[$i].' </option>'; 
        }
    }
    
    
    
    echo '</select>'
?>