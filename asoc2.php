<?php
    # Crear el array (1 min)
    # Sin acentos, sin eñes para evitar problemas de formato
    $paises = [
        "Espana" => 48.532,
        "Alemania" => 78.821,
        "Francia" => 67.923,
        "Italia" => 60.124,
        "Grecia" => 35.674,
        "Portugal" => 25.4
    ]; 
    # Calcular la población total (1 min)
    $total = 0;
    # Recorrido para generar el listado (1 min)
    echo "Listado de países:\n";
    foreach($paises as $pais => $hab) {
        # Formato de los datos: columnas, alineaciones, decimales,... (1 min)
        printf("| %-12s | %6.2f mill. de habitantes|\n", $pais, $hab);
        # Acumulamos la población del país que estamos procesando
        $total += $hab;
    }
    # Resultados finales (con formato)
    printf("Población total: %.2f mill. de habs.\n", $total);
    echo "¡Fin!";