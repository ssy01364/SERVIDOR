<?php
/*9. Llenar una matriz de 20x20 con valores aleatorios. Sumar las columnas e
imprimir la columna que tuvo la máxima suma y la suma de esa columna
*/
$matrix = array();
for ($i = 0; $i < 20; $i++) {
    $matrix[$i] = array();
    for ($j = 0; $j < 20; $j++) {
        $matrix[$i][$j] = rand(1, 100); 
    }
}

$columnSums = array();
for ($j = 0; $j < 20; $j++) {
    $sum = 0;
    for ($i = 0; $i < 20; $i++) {
        $sum += $matrix[$i][$j];
    }
    $columnSums[$j] = $sum;
}


$maxSum = max($columnSums);
$maxColumnIndex = array_search($maxSum, $columnSums);


echo "La columna con la máxima suma es la columna $maxColumnIndex con una suma de $maxSum";

?>