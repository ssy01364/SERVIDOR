<?php
/* 19. Muestra el array del ejercicio anterior pero en orden inverso.*/

$animales = array("Lagartija", "Araña", "Perro", "Gato", "Ratón");
$numbers = array("12","34","45", "52","12");
$arboles = array("Sauce", "Pino", "Naranjo", "Chopo", "Perro", "34");

$todos = array();

array_push($todos, ...$animales);
array_push($todos, ...$numbers);
array_push($todos, ...$arboles);

echo "Array Todos (original):</br>";
print_r($todos);

$todos_inverso = array_reverse($todos);

echo "</br>Array Todos (inverso):</br>";
print_r($todos_inverso);
?>