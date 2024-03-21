<?php
    # hh:mm:ss ---> ss
    # Entrada de datos

    $hh = (int) readline("horas: ");
    $mm = (int) readline("minutos: ");
    $ss = (int) readline("segundos:");

    # Cálculo (conversión)
    $total = $hh * 3600 + $mm * 60 + $ss;

    # Salida (con formato)
    echo "$hh:$mm:$ss son $total segundos\n";
    printf("%02d:%02d:%02d son %d segundos\n", $hh, $mm, $ss, $total);