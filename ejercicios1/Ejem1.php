<?php
$cont=1;
for($i= 0; $i<=1; $i++){
    for($j= 0; $j<=2; $j++){
        $M[$i][$j]=$cont;
        $cont++;
    }
}
echo $M[1][2];
echo"</br>";
var_dump($M);
//http://localhost:8080/yolanda/ejercicio1/Ejem1.php
?>