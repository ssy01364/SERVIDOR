<?php
function calcularPagoHorasExtras($horasTrabajadas, $horaNormal, $horaDoble, $horaTriple) {
    $horasExtras = $horasTrabajadas - 40;
    $pagoHorasNormales = $horasTrabajadas - $horasExtras;
    $pagoHorasExtras = 0;
  
    if ($horasExtras > 0) {
      if ($horasExtras <= 8) {
        $pagoHorasExtras = $horaDoble * $horasExtras;
      } else {
        $pagoHorasExtras = ($horaDoble * 8) + ($horaTriple * ($horasExtras - 8));
      }
    }
  
    $pagoTotal = $pagoHorasNormales * $horaNormal + $pagoHorasExtras;
  
    return $pagoTotal;
  }
  
  $horasTrabajadas = 50;
  $horaNormal = 10;
  $horaDoble = $horaNormal * 2;
  $horaTriple = $horaNormal * 3;
  
  $pagoTotal = calcularPagoHorasExtras($horasTrabajadas, $horaNormal, $horaDoble, $horaTriple);
  
  echo "El pago total por horas extras es: $pagoTotal";
?>