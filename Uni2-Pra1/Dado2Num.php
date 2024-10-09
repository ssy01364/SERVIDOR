<?php
/*1. Dados 2 números asignados dentro del código a variables realizar el siguiente
cálculo: si son iguales que los multiplique, si el primero es mayor que el segundo
que los reste y si no que los sume. Mostrar el resultado en pantalla*/

$n1=300;
$n2=500;


if($n1 == $n2){
    $res=$n1*$n2;
    echo "Resultado es ".$n1 ."x". $n2." = " . $res . "<br>";
}
if($n1>$n2){
    $res=$n1-$n2;
    echo "Resultado es ".$n1 ."-". $n2." = " . $res . "<br>";
}
 if($n1<$n2){
    $res=$n1+$n2;
    echo "Resultado es ".$n1 ."+". $n2." = " . $res . "<br>";
}

?>