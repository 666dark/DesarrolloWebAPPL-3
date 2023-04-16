<?php
$n=$_POST['n'];
$mul=1;
foreach($_POST['valor'] as $valor)
{
    $mul*=$valor;
}
echo 'El Resultado es:'. $mul;
?>