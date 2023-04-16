<?php
function fibonacci($n){
/*$f=0;
$f1=1;
$f2=1;
echo "$f $f2 ";
for ($i=1;$i<$n;$i++)
{
    $f=$f1+$f2;
    echo "$f ";
    $f1=$f2;
    $f2=$f;
}*/
$fibo1=0;
$fibo2=1;
$i=0;
echo "$fibo1";
    while($i<$n)
    {
        $fibo1=$fibo1+$fibo2;
        echo $fibo1;
        $fibo2=$fibo1-$fibo2;
        $i++;

    }
        
}
?>