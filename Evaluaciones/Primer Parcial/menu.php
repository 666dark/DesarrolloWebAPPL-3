<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <div class="menu">
    <ul class="menuvertical">
        <?php
        $a=$_GET['a'];
        setcookie("a", $a, time()+3600);
        $b=$_GET['b'];
        setcookie("b", $b, time()+3600);
        ?>
        <li><a href="resultado.php?operacion=suma" style="background-color: #C60000; color:white" >sumar</a></li>
        <li><a href="resultado.php?operacion=resta" style="background-color:#FFC000">resta</a></li>
        <li><a href="resultado.php?operacion=multiplicacion" style="background-color:#0070C0">multiplicar</a></li>
        <li><a href="resultado.php?operacion=division" >dividir</a></li>
    </ul>>
    </div>
   
   

</body>
</html>