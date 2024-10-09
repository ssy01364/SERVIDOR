<?php
$cont=0;
$media=0;
for($i=1; $i<=5; $i++){
        $M[$i]= $i*10;
        $cont+=$M[$i];
}
$media= $cont/ count($M);
var_dump($M);
echo"</br>"."la media es: ", $media;
?>