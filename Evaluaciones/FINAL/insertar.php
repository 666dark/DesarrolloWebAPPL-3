<?php 
include("conexion.php");
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];

$archivo_original = $_FILES['imagen']['name'];
    $arreglo = explode(".", $archivo_original);
    $extension = $arreglo[1];
    $fotografia = uniqid() . '.' . $extension;
    copy($_FILES['imagen']['tmp_name'], 'images/' . $fotografia);
$sql = "INSERT INTO productos (nombre,descripcion,precio,stock, imagen) VALUES('$nombre','$descripcion','$precio','$stock','$fotografia')";
if ($con->query($sql) === TRUE) {
    echo "Se creo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

?>

