<?php
/* 10. Carga el siguiente vector e imprime los valores del array asociativo usando la
estructura de control foreach:
$v[1]=90;
$v[30]=7;
$v[‘e’]=99;
$v[‘hola’]=43;
*/

$v = array();
$v[1] = 90;
$v[30] = 7;
$v['e'] = 99;
$v['hola'] = 43;

foreach ($v as $key => $value) {
    echo "La clave es: $key, el valor es: $value</br>";
}
?>