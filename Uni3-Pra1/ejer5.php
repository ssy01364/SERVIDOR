<?php
/*5. Generar de forma aleatoria una matriz de 3x5 con valores numéricos.
a. Imprimir todos los elementos en forma sucesiva tomándolos por fila.
b. Igual al anterior pero por columna.
*/

$matriz = array();
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 5; $j++) {
        $matriz[$i][$j] = rand(0, 100);
    }
}
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 5; $j++) {
        echo "  (".$matriz[$i][$j].") ";
    }
    echo "<br>";
}
?>
