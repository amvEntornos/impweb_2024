<?php
    $negs = 0;
    for($cont = 1; $cont <= 4; $cont++) {    
        # Pedimos el número
        $num = (int) readline("Número $cont:");
        # ¿Es negativo?
        if ($num < 0) {
            # lo contamos
            $negs++;
        }
    }
    # Salida de resultados
    echo "Total negativos: $negs\n";