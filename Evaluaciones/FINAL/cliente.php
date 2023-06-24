<link rel="stylesheet" href="estilos.css">
<?php
    include('conexion.php');
    $sql = "SELECT * FROM clientes  " ;
    $resultado = $con->query($sql);

?>
<table border="1" class="fondo">

<?php while($cliente = $resultado->fetch_assoc()){ ?>

    <tr>
        <td>
        <br>
        <img src="images/<?php echo $cliente['imagen'] ?>" height=150px width=150px> 
        
        <br>
            <?php echo $cliente['nombre'] ?>
        <br>
        <br>
            <label for="Correo_electronico">Correo Electronico</label><br>
            <?php echo $cliente['correo_electronico'] ?>
            <br>
            <br>
            <label for="telefono">Telefono:</label>
            <?php echo $cliente['telefono'] ?>
            <br>
            <br>
            <label for="direccion">Direccion:</label>
            <?php echo $cliente['direccion'] ?>
            <br>
            
        </td>
    </tr>
    
    <?php } ?>    


</table>