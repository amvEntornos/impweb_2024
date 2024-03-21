<?php
    # Pide la edad al usuario e indica en pantalla si es o no mayor de edad
    $edad = (int) readline("Dime tu edad: ");
    if ($edad >= 18) {
        #bloque a ejecutar en el caso de que la condición sea cierta
        echo "Eres mayor de edad\n";
    }
    else {
        #bloque a ejecutar en el caso de que la condición sea FALSA
        echo "Eres menor de edad\n";
    }