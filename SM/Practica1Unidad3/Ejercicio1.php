<?php 
/*
    1-Crea el código PHP para inicializar los siguientes arrays y realizar las operaciones
    indicadas.
        a) Declara un array de enteros de nombre $coches e introduce en él 8 elementos
        cuyos valores sean 32, 11, 45, 22, 78, -3, 9, 66, 5. A continuación muestra por
        pantalla el elemento con localizador 5. Deberás obtener por pantalla que se
        visualiza -3.
        b) Declara un array de numéricos decimales tipo double de nombre $importe e
        introduce en él cuatro elementos que sean 32.583, 11.239, 45.781, 22.237. A
        continuación muestra por pantalla el elemento con localizador 1 y el 3..
        c) Declara un array de booleanos de nombre $confirmado e introduce en él seis
        elementos que sean true, true, false, true, false, false. A continuación muestra por
        pantalla el elemento con localizador cero. Deberás obtener por pantalla que se
        muestra “true”.
        d) Declara un array de strings de nombre $jugador e introduce en él 5 elementos
        que sean "Crovic", "Antic", "Malic", "Zulic" y "Rostrich". A continuación usando el
        operador de concatenación haz que se muestre la frase: <<La alineación del
        equipo está compuesta por Crovic, Antic, Malic, Zulic y Rostrich.>>
*/
echo"a) <br>";
$coches =array(32, 11, 45, 22, 78, -3, 9, 66, 5);
echo $coches[5]."<br>";
echo"b) <br>";
$importe=array(32.583, 11.239, 45.781, 22.237);
echo $importe[1]."<br>";
echo $importe[3]."<br>";
echo"c) <br>";
$confirmado=array(true, true, false, true, false, false);
echo $confirmado[0]."<br>";
echo"d) <br>";
$jugador=array("Crovic", "Antic", "Malic", "Zulic","Rostrich");
echo "La alineación del equipo está por ".$jugador[0].", ".$jugador[1].", ".$jugador[2].", ".$jugador[3]." y ".$jugador[4].".";
?>