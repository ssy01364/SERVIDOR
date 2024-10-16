<?php
/*17. Rellena los siguientes tres arrays y júntalos en uno nuevo. Muéstralos por
pantalla. Utiliza la función array_merge()
"Lagartija", "Araña", "Perro", "Gato", "Ratón" 
"12","34","45", "52","12"
 "Sauce", "Pino", "Naranjo", "Chopo", "Perro", "34"
 */
$animales = array("Lagartija", "Araña", "Perro", "Gato", "Ratón");
$numbers = array("12","34","45", "52","12");
$arboles = array("Sauce", "Pino", "Naranjo", "Chopo", "Perro", "34");

$todos = array_merge($animales, $numbers, $arboles);

echo "Array Animales:</br>";
print_r($animales);
echo "</br>Array Números:</br>";
print_r($numbers);
echo "</br>Array Árboles:</br>";
print_r($arboles);
echo "</br>Array Todos:</br>";
print_r($todos);

?>