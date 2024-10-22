<?php
    include_once 'vehiculo.php';
    include_once 'camion.php';
    include_once 'coche.php';
    include_once 'dos_ruedas.php';
    include_once 'cuatro_ruedas.php';

        $coche = new Coche("verde", 1400,null);
        $coche->añadir_persona(65);
        $coche->añadir_persona(65);
        echo"El color del coche es: ".$coche->getColor()."<br>";
        echo"El peso del coche es: ".$coche->getPeso()."<br>";
        
        $coche->repintar("Rojo");
        $coche->añadir_cadenas_nieve(2);

        echo "El color de el coche: ".$coche->getColor()."</br>";
        echo "El numero de cadenas: ". $coche->getNumero_cadenas_nieve()."</br>";
        
        $dos_ruedas = new Dos_ruedas("negro",120);
        $dos_ruedas -> añadir_persona(80);
        $dos_ruedas->poner_gasolina(20);
        echo "</br>";
        echo "Color de el dos ruedas: ".$dos_ruedas->getColor()."</br> Peso de dos ruedas: ". $dos_ruedas->getPeso()."</br>";
        echo "</br>";
        $camion = new Camion("azul",10000,null,null);
        $camion->setLongitud(10);
        $camion->setNumero_Puertas(2);
        $camion->añadir_remolque(5);
        $camion->añadir_persona(80);
        echo"El color del camion es: ".$camion->getColor()."<br>";
        echo"El peso del camion es: ".$camion->getPeso()."<br>";
        echo"El peso del camion es: ".$camion->getNumero_Puertas()."<br>";
?>