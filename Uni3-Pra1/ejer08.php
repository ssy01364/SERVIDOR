<?php
/*8. Hacer un algoritmo que llene una matriz de 10x10 con valores aleatorios y
determine la posición [fila, columna] del número mayor almacenado en la matriz.  
*/
$matrix = array();
for ($i = 0; $i < 10; $i++) {
    $row = array();
    for ($j = 0; $j < 10; $j++) {
        $row[] = rand(1, 100);
    }
    $matrix[] = $row;
}

$maxValue = $matrix[0][0];
$maxPosition = array(0, 0);
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        if ($matrix[$i][$j] > $maxValue) {
            $maxValue = $matrix[$i][$j];
            $maxPosition = array($i, $j);
        }
    }
}

echo "Valor maximo: $maxValue posicion [$maxPosition[0], $maxPosition[1]]";

?>