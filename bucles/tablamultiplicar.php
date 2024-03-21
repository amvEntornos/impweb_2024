<?php
    # entrada de datos
    $num = (int) readline("¿Número? ");

    # procesamiento y salida de resultados 
    echo "Tabla del $num\n";
    echo "================\n";
    for($cont = 1; $cont <= 10 ;$cont++) {
        printf("%3d x %2d = %3d\n", $num, $cont, $num * $cont);
    }
    echo "================\n";