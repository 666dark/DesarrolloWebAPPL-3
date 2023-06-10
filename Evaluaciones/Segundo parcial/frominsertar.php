<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
    <form action="javascript:insertar()" method="post" enctype="multipart/form-data" id="form-libro">
        <label for="imagen">Imagen</label>
        <input type="file" name="imagen" >
        <br>
        <label for="titulo">Título</label>
        <input type="text" name="nombre">
        <br>
        <label for="autor">Autor</label>
        <input type="text" name="autor">
        <br>
        <label for="editorial">Editorial</label>
        <select name="ideditorial">
        <?php include('conexion.php'); 
         $sql="SELECT * FROM editoriales";
         $resultado=mysqli_query($con,$sql);

         ?>
            <?php while($fila=mysqli_fetch_array($resultado)){ 
                ?>
            <option value="<?php echo $fila['id']; ?>"><?php echo $fila['editorial']; ?></option>
            <?php } ?>
        </select>
        <br>
        <label for="anio">Año</label>
        <input type="number" name="anio">
      
        <br> 
        <label for="usuario">Usuario</label>
        <select name="idusuario">
        <?php include('conexion.php'); 
            $sql="SELECT * FROM usuarios";
            $resultado=mysqli_query($con,$sql);

        ?>
            <?php while($fila=mysqli_fetch_array($resultado)){ 
                ?>
            <option value="<?php echo $fila['id']; ?>"><?php echo $fila['usuario']; ?></option>
            <?php } ?>
        </select>
        <br>
        <label for="carrera">Carrera</label>
        <select name="idcarrera">
        <?php include('conexion.php'); 
         $sql="SELECT id,carrera FROM carreras";
         $resultado=mysqli_query($con,$sql);

         ?>
            <?php while($fila=mysqli_fetch_array($resultado)){ 
                ?>
            <option value="<?php echo $fila['id']; ?>"><?php echo $fila['carrera']; ?></option>
            <?php } ?>
        </select>
        <br>
        <input type="submit" value="Insertar">
    </form>
    
</body>
</html>