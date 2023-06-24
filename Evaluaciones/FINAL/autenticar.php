<?php
    session_start();
    include("conexion.php");
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "SELECT nombre, apellido,rol FROM usuarios WHERE correo_electronico = '$email' AND password = SHA1($password)";
    $consulta = mysqli_query($con, $sql);
    $usuario = mysqli_fetch_array($consulta);
    if($usuario != null){
        $_SESSION["nombre"] = $usuario["nombre"];
        $_SESSION["apellido"] = $usuario["apellido"];
        $_SESSION["rol"] = $usuario["rol"];
        echo "Se logueo con exito";
    }else{
        echo "No autorizado";
    }
?>