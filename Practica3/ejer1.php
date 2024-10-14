<?php
/*1. Crea una función para resolver la ecuación de segundo grado. Esta función recibe
los coeficientes de la ecuación y devuelve un array con las soluciones. Si no hay
soluciones reales, devuelve FALSE. */

function resolverEcuacionSegundoGrado($a, $b, $c) {
    // Calculamos el discriminante
    $discriminante = $b * $b - 4 * $a * $c;
    
    // Si el discriminante es menor que 0, no hay soluciones reales
    if ($discriminante < 0) {
        return false;
    }
    
    // Si el discriminante es igual a 0, hay una única solución real
    if ($discriminante == 0) {
        $solucion = -$b / (2 * $a);
        return [$solucion];
    }
    
    // Si el discriminante es mayor que 0, hay dos soluciones reales
    $solucion1 = (-$b + sqrt($discriminante)) / (2 * $a);
    $solucion2 = (-$b - sqrt($discriminante)) / (2 * $a);
    
    return [$solucion1, $solucion2];
}

// Ejemplo de uso:
$a = 1;
$b = -3;
$c = 2;

$resultado = resolverEcuacionSegundoGrado($a, $b, $c);

if ($resultado === false) {
    echo "No hay soluciones reales.";
} else {
    echo "Las soluciones son: " . implode(", ", $resultado);
}

?>
