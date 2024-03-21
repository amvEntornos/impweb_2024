<?php
    $cursos = ["af1", "af2", "asir1", "asir2", "dam1", "dam2", "ga1", "ga2", "rpae1", "rpae2"];
    echo "Cursos en la lista: ".count($cursos)."\n";
    echo "Cursos: |";
    for($pos = 0; $pos < count($cursos); $pos++) {
        echo " $cursos[$pos] |";
    }
    
    echo "\n**** Bucle foreach() ****\n";
    echo "Cursos: |";
    foreach($cursos as $c) {
        echo " $c |";
    }
    echo " Ok!\n";
    # Cambiamos los valores del array $cursos
    echo "Modif.: |";
    foreach($cursos as $c) {
        $c = "<ASIR2>";
    }
    echo " Ok!\n";

    for($p = 0; $p < count($cursos); $p++) {
        $cursos[$p] = "17ENISE";
    }
    
    # Mostramos su contenido
    echo "\n**** Tras la modificación ****\n";
    echo "Cursos: |";
    foreach($cursos as $c) {
        echo " $c |";
    }
    echo " Ok!\n";

