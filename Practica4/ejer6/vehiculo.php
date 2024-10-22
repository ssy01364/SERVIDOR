<?php
abstract class Vehiculo {
    public $color;
    public $peso;
    
    static protected $numero_cambio_color = 0;
    const SALTO_DE_LINEA ='<br />';
    public function __construct($color,$peso)
    {
        $this->color = $color;
        $this->peso = $peso;
    }

    public function circula() {
        echo "El vehículo circula</br>";
    }
    
    abstract function añadir_persona($peso_persona);

    public static  function ver_atributo($objeto){
        $obj=get_object_vars($objeto);
        
        foreach ($obj as $key => $value) {
            echo $key . ": " . $value . self::SALTO_DE_LINEA;
        }
        echo"El color se ha cambiado: ".self::$numero_cambio_color. " veces. </br>";
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
            self::$numero_cambio_color++;
        return $this;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($peso) {
        if ($peso <= 2100) {
            $this->peso = $peso;
        } else {
            $this->peso = 2100;
            echo "El peso máximo permitido es de 2100 kg.";
        }
    }
    public function __toString() {
        return "Color " . $this->color . " Peso: " . $this->peso . " kg.</br>";
    }
}
?>