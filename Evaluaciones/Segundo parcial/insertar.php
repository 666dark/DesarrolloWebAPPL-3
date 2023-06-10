<?php 
include("conexion.php");
$nombre = $_POST['nombre'];
$autor = $_POST['autor'];
$ideditorial = $_POST['ideditorial'];
$anio = $_POST['anio'];
$idusuario = $_POST['idusuario'];
$idcarrera = $_POST['idcarrera'];



$archivo_original = $_FILES['imagen']['name'];
    $arreglo = explode(".", $archivo_original);
    $extension = $arreglo[1];
    $fotografia = uniqid() . '.' . $extension;
    copy($_FILES['imagen']['tmp_name'], 'images/' . $fotografia);
$sql = "INSERT INTO libros (imagen,titulo,autor,ideditorial,anio,idusuario,idcarrera) VALUES('$fotografia','$nombre','$autor',$ideditorial,$anio,$idusuario,$idcarrera)";
if ($con->query($sql) === TRUE) {
    echo "Se creo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

?>

