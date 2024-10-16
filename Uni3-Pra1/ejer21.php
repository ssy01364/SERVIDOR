<?php
/* 21. Implementa un array asociativo con los siguientes valores y ordénalo de menor a
mayor. Muestra los valores en una tabla.
$numeros=array(3,2,8,123,5,1)
 */
    
    // Definimos el array
    $numeros = array(3, 2, 8, 123, 5, 1);
    
    // Ordenamos el array de menor a mayor
    asort($numeros);

    // Mostramos los valores dentro de una tabla HTML
    echo "<table border='1'>";
    echo "<tr><th>Valores</th></tr>";

    // Recorremos el array para mostrar cada valor
    foreach ($numeros as $val) {
        echo "<tr><td>$val</td></tr>";
    }

    echo "</table>";
?>
