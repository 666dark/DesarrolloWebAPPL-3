<link rel="stylesheet" href="estilos.css">
<?php
    include('conexion.php');
    $sql = "SELECT * FROM productos  " ;
    $resultado = $con->query($sql);
    if (isset($_GET["orden"])) {
        $orden = $_GET["orden"];
        $sql .= "ORDER BY $orden";
    }
?>

<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Imagen</th>
    </tr>
    <?php while($producto = $resultado->fetch_assoc()){ ?>
        <tr>
            
            <td><?php echo $producto['nombre'] ?></td>
            <td><?php echo $producto['descripcion'] ?></td>
            <td><?php echo $producto['precio'] ?></td>
            <td><?php echo $producto['stock'] ?></td>
            <td><img src="images/<?php echo $producto['imagen'] ?>" height=70px></td>
        </tr>
    <?php } ?>
</table>
<div>
<nav>
      <ul>
        <li><a href="javascript:form('forminsertar.html')">Insertar</a></li>
      </ul>
    </nav>
</div>