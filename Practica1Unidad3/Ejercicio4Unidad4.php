<?php
/* 
    Construir  un  calendario,  se  ha  de  introducir  un  mes  y  un  año  y  al  pulsar  el  botón 
    ENVIAR, a partir de esos datos, con las funciones de PHP para trabajar con fechas se 
    ha de dibujar el calendario del mes y año indicado. Se ha de controlar el número de 
    días, así como  el día de la semana en que empieza dicho  mes. El resultado  se ha de 
    mostrar en formato tabla de HTML  y se ha de resolver en un solo script.
*/

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el mes y el año del formulario
    $mes = intval($_POST['mes']);
    $anio = intval($_POST['anio']);
    
    // Obtener el número de días en el mes y el primer día de la semana
    $numDias = cal_days_in_month(CAL_GREGORIAN, $mes, $anio);
    $primerDia = date('w', strtotime("$anio-$mes-01")); // 0 (Domingo) a 6 (Sábado)
    
    // Crear la tabla del calendario
    echo "<table border='1' style='width: 100%; text-align: center;'>";
    echo "<tr><th colspan='7'>" . date('F Y', strtotime("$anio-$mes-01")) . "</th></tr>";
    echo "<tr>
            <th>Dom</th>
            <th>Lun</th>
            <th>Mar</th>
            <th>Mié</th>
            <th>Jue</th>
            <th>Vie</th>
            <th>Sáb</th>
          </tr>";
    
    // Rellenar los espacios vacíos antes del primer día
    echo "<tr>";
    for ($i = 0; $i < $primerDia; $i++) {
        echo "<td></td>";
    }

    // Rellenar los días del mes
    for ($dia = 1; $dia <= $numDias; $dia++) {
        echo "<td>$dia</td>";
        // Si es sábado, cerrar la fila y comenzar una nueva
        if (($dia + $primerDia) % 7 == 0) {
            echo "</tr><tr>";
        }
    }

    // Cerrar la última fila
    echo "</tr>";
    echo "</table>";
}
?>

