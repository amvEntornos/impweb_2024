<?php 
    $datos = [ 10, 3, 4, 66, 81, 24, 35, 68, 90];
    
    $suma = 0; 
    echo "Pares: ";
    for($pos = 0; $pos < count($datos); $pos++) {
        if ($pos % 2 === 0) {
            echo " $datos[$pos]";
        }
        else {
            $suma += $datos[$pos];
        }
    }
    echo " Suma de los impares: $suma";