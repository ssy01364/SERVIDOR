<?php
include_once 'Vehiculo.php';
class Cuatro_ruedas extends Vehiculo{
    public $numero_puertas;

    public function getNumero_puertas()
    {
            return $this->numero_puertas;
    }

    public function setNumero_puertas($numero_puertas)
    {
            $this->numero_puertas = $numero_puertas;

            return $this;
    }
    function repintar($color){
        $this->setColor($color);
    }
}
?>