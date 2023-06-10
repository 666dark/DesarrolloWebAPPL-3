<?php 
include('conexion.php');
//include('permiso.php');
$nro=$_POST['nro'];
$banoprivado=$_POST['banoprivado'];
$espacio=$_POST['espacio'];
$precio=$_POST['precio'];
$idtipohabitacion=$_POST['idtipohabitacion'];




/*$archivo_original=$_FILES['archivo']['name'];
$arreglo=explode(".",$archivo_original);
$extension=$arreglo[1];
$fotografia=uniqid().'.'.$extension;
include('conexion.php');

copy($_FILES['archivo']['tmp_name'],'images/'.$fotografia);*/
$sql="INSERT into habitaciones(nro,idtipohabitacion,banoprivado,espacio,precio)
VALUES ($nro, $idtipohabitacion,$banoprivado, $espacio, $precio)";
if ($con->query($sql) === TRUE) {
    echo "Se creo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>
<meta http-equiv="refresh" content="3; url=leer.php" />

