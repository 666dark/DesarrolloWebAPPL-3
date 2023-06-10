<?php
    include('conexion.php');
    $sql = "SELECT * FROM libros INNER JOIN editoriales ON libros.ideditorial = editoriales.id " ;
    $resultado = $con->query($sql);
    if (isset($_GET["orden"])) {
        $orden = $_GET["orden"];
        $sql .= "ORDER BY $orden";
    }
?>

<table border="1">
    <tr>
        <th>Imagen</th>
        <th><a href="javascript:ordenar('titulo')">Titulo</a></th>
        <th>Autor</th>
        <th>Editorial</th>
        <th>Año</th>
        <th>Usuario</th>
        <th>Carrera</th>
    </tr>
    <?php while($libro = $resultado->fetch_assoc()){ ?>
        <tr>
            <td><img src="images/<?php echo $libro['imagen'] ?>" height=70px></td>
            <td><?php echo $libro['titulo'] ?></td>
            <td><?php echo $libro['autor'] ?></td>
            <td><?php echo $libro['ideditorial'] ?></td>
            <td><?php echo $libro['anio'] ?></td>
            <td><?php echo $libro['idusuario'] ?></td>
            <td><?php echo $libro['idcarrera'] ?></td>
        </tr>
    <?php } ?>
</table>