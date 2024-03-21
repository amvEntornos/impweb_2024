<?php
    $colores = ["rojo", "verde", "azul", "negro", "blanco", "naranja"];

    echo "Formato 1:\n";
    echo "^^^^^^^^^^\n";

    for($pos = 0; $pos < count($colores); $pos++) {
        echo " > \$colores[$pos] = $colores[$pos]\n";
    }
    echo "^^^^^^^^^^\n";
    echo "Formato 2:\n";
    echo "^^^^^^^^^^\n";
    echo "|";
    for($pos = 0; $pos < count($colores); $pos++) {
        echo " $colores[$pos] #";
    }
    echo " |\n";
    echo "^^^^^^^^^^\n";
    echo "Formato 2B:\n";
    echo "^^^^^^^^^^\n";
    echo "|";
    foreach($colores as $cc) {
        echo " $cc #";
    }
    echo " |\n";
    echo "^^^^^^^^^^\n";
    echo "Formato 3:\n";
    echo "^^^^^^^^^^\n";
    echo "[";
    $cont = 1;
    foreach($colores as $cc) {
        # Cuerpo del formato
        # > , (excepto el primero)
        # > bloque de llaves con el color
        if ($cont == 1)
            echo "\n";
        else  
            echo ",\n";
        $cont++;
        echo "\t{\n";
        echo "\t\t'color': $cc\n";
        echo "\t}";
    }
    echo "\n]\n";
    echo "^^^^^^^^^^\n";
    echo "Formato 3B:\n";
    echo "^^^^^^^^^^\n";
    echo "[\n";
    $cont = 1;
    foreach($colores as $cc) {
        # Cuerpo del formato
        # > bloque de llaves con el color
        # > , (excepto el último)
        
        echo "\t{\n";
        echo "\t\t'color': $cc\n";
        echo "\t}";

        if ($cont == count($colores))
            echo "\n";
        else 
            echo ",\n";
        $cont++;
    }
    echo "\n]\n";
    
