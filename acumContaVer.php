<?php 
    $datos = [ 1, 1, 3, 5];

    # Inicio de contadores, acumuladores,...
    $pares = 0; $suma = 0; 
    # Recorrido
    echo "Array: |";
    for($pos = 0; $pos < count($datos); $pos++ ) {
        # Mostrar el valor
        echo " $datos[$pos] |";
        # ¿Es par?
        if ($datos[$pos] % 2 == 0) {
            $pares++;
        }
        # suma total 
        $suma += $datos[$pos]; // $suma = $suma + $datos[$pos];
    }
    # Salida de resultados
    printf("\nPares: %d Impares: %d\n", $pares, count($datos) - $pares);
    printf("Suma total: %d\n", $suma);
    printf("Media: %.2f\n", $suma / count($datos));