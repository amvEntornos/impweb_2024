<?php 
    # Programa que pida al usuario una cadena 
    # para mostrarla en consola 20 veces

    $cadena = readline("Dame una cadena: ");
    #
    for($cont = 1; $cont <= 20 ; $cont++ ) {
        # Proceso a repetir
        echo "$cont : $cadena\n";
    }
    echo "\n¡Fin!\n";