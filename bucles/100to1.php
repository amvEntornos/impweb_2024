<?php 
    $n = (int) readline("¿Cuántos valores quieres por fila?");
    $esc = 0; 
    for ($cont = 100; $cont >= 1; $cont--) {
        printf("%4d", $cont);
        $esc++;
        if ($esc % $n == 0) {
            echo "\n";
        }
    } 
    echo "\n------Fin------";