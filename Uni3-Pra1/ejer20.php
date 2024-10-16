<?php
/*20. Implementa un array asociativo con los siguientes valores:
$estadios futbol = array("Barcelona" => "Camp Nou", "Real Madrid" => "Santiago Bernabeu", "Valencia" => "Mestalla", "Real Sociedad" => "Anoeta");
Muestra los valores del array en una tabla, has de mostrar el índice y el valor
asociado.
 Elimina el estadio asociado al Real Madrid.
 Vuelve a mostrar los valores para comprobar que el valor ha sido eliminado, esta
vez en una lista numerada.
*/
    // Definir el array de estadios de fútbol
    $estadios_futbol = array(
        "Barcelona" => "Camp Nou",
        "Real Madrid" => "Santiago Bernabeu",
        "Valencia" => "Mestalla",
        "Real Sociedad" => "Anoeta"
    );

    // Mostrar los estadios iniciales
    foreach ($estadios_futbol as $ciudad => $estadio) {
        echo "Ciudad (Índice): " . $ciudad . " - Estadio (Valor asociado): " . $estadio . "<br>";
    }

    // Eliminar el estadio del Real Madrid
    unset($estadios_futbol['Real Madrid']);

    // Salto de línea
    echo "<br><br>";

    // Mostrar la lista de estadios restantes en una lista ordenada
    echo "<ol>";
    foreach ($estadios_futbol as $ciudad => $estadio) {
        echo "<li>Ciudad (Índice): " . $ciudad . " - Estadio (Valor asociado): " . $estadio . "</li><br>";
    }
    echo "</ol>";
?>
