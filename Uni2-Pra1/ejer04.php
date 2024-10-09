<?php
/*4. Identificar entre dos números aleatorios cual es el mayor y si este es par o impar.
Buscar información previamente para generar números aleatorios y usarla para
resolver el ejercicio.
 */

$num1 = rand();
$num2 = rand();
$max = max($num1, $num2);
$parimpar = $max % 2 ? "impar" : "par";
echo "Número aleatorio 1: $num1<br>";
echo "Número aleatorio 2: $num2<br>";
echo "El mayor de los dos es $max y es un número $parimpar";    


?>
