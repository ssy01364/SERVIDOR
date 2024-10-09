<?php
/*7. Generar una matriz de 3x4 y generar un vector que contenga los valores máximos
de cada fila y otro que contenga los promedios de los mismos. Imprimir ambos
vectores a razón de uno por renglón.
*/

// Generar matriz 3x4
$matriz = array(
    array(1, 2, 3, 4),
    array(5, 6, 7, 8),
    array(9, 10, 11, 12)
);

// Inicializar vectores de máximos y promedios
$maximos = array();
$promedios = array();

// Recorrer cada fila de la matriz
foreach ($matriz as $fila) {
    // Calcular el máximo de la fila
    $maximo = max($fila);
    $maximos[] = $maximo;

    // Calcular el promedio de la fila
    $promedio = array_sum($fila) / count($fila);
    $promedios[] = $promedio;
}

// Imprimir vectores
echo "Vectores de máximos y promedios:\n";
foreach ($maximos as $i => $maximo) {
    echo "Máximo fila $i: $maximo, Promedio fila $i: $promedios[$i]\n";
}

?>