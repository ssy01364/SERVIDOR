<?php
/*14. Repite el ejercicio anterior pero ahora si se han de crear índices asociativos,
ejemplo:

El índice del array que contiene como valor Madrid es MD.
*/
$ciudades = array(
    'MD' => 'Madrid',
    'BCN' => 'Barcelona',
    'LON' => 'Londres',
    'NYC' => 'New York',
    'LA' => 'Los Ángeles',
    'CHI' => 'Chicago'
);

echo "Contenido del array:</br>";
foreach ($ciudades as $indice => $ciudad) {
    echo "El índice del array que contiene como valor $ciudad es $indice.</br>";
}

?>