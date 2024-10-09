<?php
/*5. Generar de forma aleatoria una matriz de 3x5 con valores numéricos.
a. Imprimir todos los elementos en forma sucesiva tomándolos por fila.
b. Igual al anterior pero por columna.
*/

// Generar matriz aleatoria de 3x5
$matriz = array();
for ($i = 0; $i < 3; $i++) {
    $fila = array();
    for ($j = 0; $j < 5; $j++) {
        $fila[] = rand(1, 100); // Generar número aleatorio entre 1 y 100
    }
    $matriz[] = $fila;
}

// Imprimir elementos por fila
echo "Elementos por fila:<br>";
foreach ($matriz as $fila) {
    echo implode(", ", $fila) . "<br>";
}

// Imprimir elementos por columna
echo "<br>Elementos por columna:<br>";
for ($j = 0; $j < 5; $j++) {
    for ($i = 0; $i < 3; $i++) {
        echo $matriz[$i][$j] . ", ";
    }
    echo "<br>";
}

?>
