<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="multiplicarvectores.php" method="post">
<?php
session_start();
$n=$_GET['n'];
$_SESSION['n']=$n;
echo "Vector 1X$n <br>";
for ($i=0;$i<$n;$i++)
{
    echo "<input type='number' name='v1'>";
}
echo "<br>Vector $n X1<br>";
for ($i=0;$i<$n;$i++)
{
    echo "<div><input type='number' name='v2'></div>";
}

?>

<input type="submit" value="Multiplicar">
</form>
</body>
</html>