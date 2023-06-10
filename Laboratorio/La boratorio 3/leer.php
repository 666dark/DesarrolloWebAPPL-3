<?php
if (!isset($_GET['orden'])) {
    $orden = 'hab.id';
} else {
    $orden = $_GET['orden'];
}
if (!isset($_GET['buscar'])) {
    $buscar = "'%'";
} else {
    $buscar = "'%".str_replace(" ","%",$_GET['buscar'])."%'";
}
include('conexion.php');

$sql = "SELECT hab.id,nro,descripcion ,banoprivado,espacio,precio  FROM habitaciones hab
left join tipo_habitacion tip on hab.idtipohabitacion=tip.id

";

$resultado = $con->query($sql);
if ($resultado->num_rows > 0) {
?>
 
    <table>
        <tr>
            
            <th><a href="read.php?orden=nro"> Número de habitacion</a></th>
            <th><a href="read.php?orden=descripcion">Tipo de habitacion</a> </th>
            <th><a href="read.php?orden=banoprivado">Baño privado</a></th>
            <th><a href="read.php?orden=espacio">Espacio</a></th>
            <th><a href="read.php?orden=precio">precio</a></th>
            <th>Operaciones</th>
        </tr>
        <?php while ($row = $resultado->fetch_assoc()) {
        ?>
            <tr>
            
            <td><?php echo $row['nro'] ?> </td>
            <td><?php echo $row['descripcion'] ?></td>
                <td><?php echo $row['banoprivado'] ?></td>
                <td><?php echo $row['espacio'] ?></td>
                <td><?php echo $row['precio'] ?></td>
                
               
            </tr>
        <?php } ?>
    </table>


<?php
} else {
    echo "la tabla no tiene datos que mostrar";
}

$con->close();
?>