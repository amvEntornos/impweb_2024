<?php
    $cursos = ["af1", "af2", "asir1", "asir2", "dam1", "dam2", "ga1", "ga2", "rpae1", "rpae2"];
    echo "Cursos en la lista: ".count($cursos)."\n";
    echo "Listado de cursos:\n";
    for($pos = 0; $pos < count($cursos); $pos++) {
        echo " \$cursos[$pos] > $cursos[$pos]\n";
    }
    echo "----------------\n";

    echo "\n**** Bucle foreach() ****\n";
    echo "Cursos: |";
    foreach($cursos as $c) {
        echo " $c |";
    }
    echo " Ok!\n";


