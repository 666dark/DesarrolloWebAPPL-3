
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <ul>   
    <?php
        $n=$_GET['n'];
        setcookie("a", $n, time()+3600);
    ?> 
        <li><a href="operaciones.php?operacion=sumatoria">Sumatoria</a></li>
        <li><a href="operaciones.php?operacion=factorial">Factorial</a></li>
        <li><a href="operaciones.php?operacion=fibo">Fibonacci</a></li>
        <li><a href="operaciones.php?operacion=division">Dividir</a></li>
    </ul>    
</body>
</html>