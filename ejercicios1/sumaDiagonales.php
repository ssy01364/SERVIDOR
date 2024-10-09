<?php
$matriz = [
    [15, 10, 25,8],
    [3, 2, 1,7],
    [19, 25, 10,8],
    [9,15,25,13]
];
$sumaPrincipal = 0;
$sumaSecundaria = 0;

for ($i = 0; $i < 4; $i++) {
    $sumaPrincipal += $matriz[$i][$i];
    $sumaSecundaria += $matriz[$i][count($matriz)-1 -$i];
}
echo "La suma de la diagonal principal es: " . $sumaPrincipal . "<br>";
echo "La suma de la diagonal secundaria es: " . $sumaSecundaria . "<br>";   
echo "<br>";
var_dump($matriz);
?>