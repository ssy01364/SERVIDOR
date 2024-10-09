<?php
/*9. Escriba un programa a partir de un número entero generado de forma aleatoria
indique si es primo. Un número primo es aquel que es divisible por el mismo y la
unidad*/

$num = rand(1,1000);
$primo=true;
for ($i=2; $i<=$num/2; $i++) {
    if ($num % $i == 0) {
        $primo=false;
    }
}
if ($primo==true) {
    echo "$num es primo";
} else {
    echo "$num NO es primo";
}

?>