<?php
/* 16. Crea un array llamado “lenguajes_cliente” y otro “lenguajes_servidor”, crea tu
mismo los valores, poniendo índices alfanuméricos a cada valor con tres
elementos cada uno. Junta ambos arrays en uno solo llamado “lenguajes” y
muéstralo por pantalla en una tabla.
*/
$lenguajes_cliente = array(
    'JS1' => 'JavaScript',
    'HT1' => 'HTML',
    'CS1' => 'CSS'
);

$lenguajes_servidor = array(
    'PH1' => 'PHP',
    'PY1' => 'Python',
    'JA1' => 'Java'
);

$lenguajes = array_merge($lenguajes_cliente, $lenguajes_servidor);

echo "<table border='1'>";
echo "<tr><th>Índice</th><th>Lenguaje</th></tr>";
foreach ($lenguajes as $indice => $lenguaje) {
    echo "<tr><td>$indice</td><td>$lenguaje</td></tr>";
}
echo "</table>";
?>