<?php
    /*
        Carga  el  siguiente  vector  e  imprime  los  valores  del  array  asociativo  usando  la 
        estructura de control foreach: 
            $v[1]=90; 
            $v[30]=7; 
            $v[‘e’]=99; 
            $v[‘hola’]=43;
    */
       $v[1] = 90; 
       $v[30] = 7; 
       $v['e'] = 99; 
       $v['hola'] = 43;
       foreach ($v as $array=> $importe) {
           echo "Array asociativo: $array, Importe: $importe<br>";
       }
?>