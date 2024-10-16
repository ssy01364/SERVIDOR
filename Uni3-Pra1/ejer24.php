<?php
/*24. Crea un array llamado deportes e introduce los siguientes valores: futbol,
baloncesto, natación, tenis. Haz el recorrido de la matriz con un for para mostrar
sus valores. A continuación realiza las siguientes operaciones
 Muestra el total de valores que contiene.
 Sitúa el puntero en el primer elemento del array y muestra el valor actual, es
decir, donde está situado el puntero actualmente.
 Avanza una posición y muestra el valor actual.
 Coloca el puntero en la última posición y muestra su valor.
 Retrocede una posición y muestra este valor. 
*/

$deportes = [
    'futbol',
    'baloncesto',
    'natación',
    'tenis'
];

// Haz el recorrido de la matriz con un for para mostrar sus valores.
echo "Valores del array deportes: ";
for ($i = 0; $i < count($deportes); $i++) {
    echo $deportes[$i] . " ";
}
echo "</br>";

// Muestra el total de valores que contiene.
echo "Número de valores del array deportes: " . count($deportes) . "</br>";

// Sitúa el puntero en el primer elemento del array y muestra el valor actual.
echo "Primer valor (puntero al inicio): " . reset($deportes) . "</br>";

// Avanza una posición y muestra el valor actual.
echo "Valor actual después de avanzar una posición: " . next($deportes) . "</br>";

// Coloca el puntero en la última posición y muestra su valor.
echo "Valor actual en la última posición: " . end($deportes) . "</br>";

// Retrocede una posición y muestra este valor.
echo "Valor actual después de retroceder una posición: " . prev($deportes) . "</br>";
?>