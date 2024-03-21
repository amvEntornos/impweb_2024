<?php 
    echo "Dime tu nombre:";
    $nombre = readline();

    echo "Te llamas $nombre ¡Buenos días!\n";
    echo "\n¡Buenos días ".$nombre."! ";

    $color = readline("¿Cuál es tu color favorito? ");
    echo "No me gusta el $color :(";

    # Convertimos la cadena que devuelve el readline() a entero 
    $edad = (int) readline("Dime tu edad: ");
    echo "Tienes $edad años\n";


    