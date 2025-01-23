<?php
/*
Diseña un programa que te permita introducir las dimensiones de una matriz, que te la dibuje
 y calcule la suma de las diagonales principal y secundaria.El resultado  se ha de 
    mostrar en formato tabla de HTML
*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $filas = intval($_POST['filas']);
    $columnas = intval($_POST['columnas']);
    
    // Generar matriz aleatoria
    $matriz = [];
    for ($i = 0; $i < $filas; $i++) {
        for ($j = 0; $j < $columnas; $j++) {
            $matriz[$i][$j] = rand(1, 10); // Valores aleatorios entre 1 y 10
        }
    }
    

    // Calcular sumas de las diagonales
    $sumaDiagonalPrincipal = 0;
    $sumaDiagonalSecundaria = 0;
    
    for ($i = 0; $i < min($filas, $columnas); $i++) {
        $sumaDiagonalPrincipal += $matriz[$i][$i]; // Diagonal principal
        $sumaDiagonalSecundaria += $matriz[$i][$columnas - $i - 1]; // Diagonal secundaria
    }

    // Mostrar matriz
    echo "<h2>Matriz Generada:</h2>";
    echo "<table>";
    for ($i = 0; $i < $filas; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $columnas; $j++) {
            echo "<td>" . $matriz[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    // Mostrar sumas
    echo "<h3>Suma de la Diagonal Principal: $sumaDiagonalPrincipal</h3>";
    echo "<h3>Suma de la Diagonal Secundaria: $sumaDiagonalSecundaria</h3>";
}

?>
