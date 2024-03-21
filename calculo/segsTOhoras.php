<?php
    $segundos = (int) readline("Dime una cantidad de segundos ");
    # segundos que sobran 
    $segs = $segundos % 60 ;

    $horas = intdiv( $segundos, 3600);
    $minutos = intdiv($segundos, 60) % 60 ;

    printf( "Esos segundos son $horas horas, $minutos minutos y $segs segundos. \n");

    printf("%02d:%02d:%02d", $horas , $minutos , $segs);