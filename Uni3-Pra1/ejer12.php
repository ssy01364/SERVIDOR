<?php
/*12. Crea un array asociativo para introducir los datos de una persona
 Nombre: Pedro Torres
 Dirección: C/Mayor, 37
 Teléfono: 123456789
Al acabar muestra los datos por pantalla.
*/

$persona = array(
    'Nombre' => 'Pedro Torres',
    'Dirección' => 'C/Mayor, 37',
    'Teléfono' => '123456789'
);

echo "Datos de la persona:</br>";
foreach ($persona as $clave => $valor) {
    echo "$clave: $valor</br>";
}

?>