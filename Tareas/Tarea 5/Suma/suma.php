
<?php 
    
    for ($i=1;$i<=10;$i++)
    {
        echo "<h2> Suma de $i";
        for ($j=1;$j<10;$j++)
        {
            echo "<div>";
            echo ("$i + $j= ". ($i+$j));    
            echo "</div>";  
        }  
        echo "</h2>";   
    }     
          
?>

