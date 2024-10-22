<?php
 abstract class Vehiculo {
        public $color;
        public $peso;
    
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
                echo $key." valor: ".$value."</br>";
            }
        }
    
        public function getColor()
        {
            return $this->color;
        }
    
        public function setColor($color)
        {
            $this->color = $color;
    
            return $this;
        }

        public function getPeso()
        {
            return $this->peso;
        }
    
        public function setPeso($peso)
        {
            $this->peso = $peso;
    
            return $this;
        }
        public function __toString() {
            return "Color " . $this->color . " Peso: " . $this->peso . " kg.</br>";
        }
    }
?>