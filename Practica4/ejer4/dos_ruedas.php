<?php
include_once 'Vehiculo.php';
class Dos_ruedas extends Vehiculo{
    public $cilindrada;
    function poner_gasolina($litros){
        $this->setPeso($this->getPeso()+$litros);
    }
}
?>