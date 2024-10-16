<?php
/*18. Realiza el ejercicio anterior pero con la funicón array_push().*/

$animales = array("Lagartija", "Araña", "Perro", "Gato", "Ratón");
$numbers = array("12","34","45", "52","12");
$arboles = array("Sauce", "Pino", "Naranjo", "Chopo", "Perro", "34");

$todos = array();

array_push($todos, ...$animales);
array_push($todos, ...$numbers);
array_push($todos, ...$arboles);

echo "Array Animales:</br>";
print_r($animales);
echo "</br>Array Números:</br>";
print_r($numbers);
echo "</br>Array Árboles:</br>";
print_r($arboles);
echo "</br>Array Todos:</br>";
print_r($todos);
?>