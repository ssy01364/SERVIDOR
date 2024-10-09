<?php
/*6. Generar de forma aleatoria una matriz de 4*5 con valores numéricos, determinar
fila y columna del elemento mayor. */

// Generar matriz de 4x5 con valores numéricos aleatorios
$matriz = [];
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 5; $j++) {
        $matriz[$i][$j] = rand(1, 100);
    }
}

// Imprimir la matriz
echo "Matriz: </br>";
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 5; $j++) {
        echo $matriz[$i][$j] . " ";
    }
    echo "</br>";
}

// Determinar la fila y columna del elemento mayor
$max = $matriz[0][0];
$fila_max = 0;
$col_max = 0;
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 5; $j++) {
        if ($matriz[$i][$j] > $max) {
            $max = $matriz[$i][$j];
            $fila_max = $i;
            $col_max = $j;
        }
    }
    
}
echo "</br>";

echo "Elemento mayor: $max</br>";
echo "Fila del elemento mayor: $fila_max</br>";
echo "Columna del elemento mayor: $col_max</br>";
?>
    
