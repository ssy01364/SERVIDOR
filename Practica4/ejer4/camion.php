<?php
include_once 'Cuatro_ruedas.php';
class Camion extends Cuatro_ruedas{
    public $longitud;

    public function getLongitud()
    {
            return $this->longitud;
    }
    public function setLongitud($longitud)
    {
            $this->longitud = $longitud;

            return $this;
    }
    function añadir_remolque($longitud){
        $this->setLongitud($longitud);
    }
}
?>