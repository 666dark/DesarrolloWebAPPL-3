<?php
include('conexion.php');
$sql = "SELECT id,descripcion from tipo_habitacion";

$resultado = $con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="crear.php" method ="post" enctype="multipart/form-data">
                        
            <div>
            <label for="nro">Número:</label>
            <input type="number" name="nro">
        </div>
        <div>
            <label for="banoprivado">Baño Privado:</label>
            <input type="number" name="banoprivado">
        </div>
        <div>
            <label for="espacio">Espacio:</label>
            <input type="number" name="espacio">
        </div>
        <div>
            <label for="precio">precio:</label>
            <input type="number" name="precio">
        </div>
            <label for="idtipohabitacion">Tipo de habitacion:</label>

            <select name="idtipohabitacion">
                <?php while ($tipo_habitacion = $resultado->fetch_assoc()) {
                ?>
                    <option value="<?php echo $tipo_habitacion['id']; ?>">
                        <?php echo $tipo_habitacion['descripcion']; ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div><input type="submit" value="Crear"></div>
            
        </form>
    </div>

   
</body>
</html>