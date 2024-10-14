<?php
/*2. Almacena la función anterior en el fichero matemáticas.php. Crea un fichero que
la incluya y la utilice. */


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
?>



