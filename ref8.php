<?php 
    $equipos = ["BAR" => 85000,
                "RMD" => 75000,
                "ATM" => 55000,
                "SEV" => 48000,
                "LEO" => 25600];

    $cont = 0; 
    echo "<inicio>\n";
    # estrategia --> sepador + equipo excepto el primero
    foreach($equipos as $clave => $valor) {
        $cont++;
        # El primero no lleva separador
        if ($cont != 1) echo "  <*|*>\n";
        echo "  <equipo><nombre>$clave</nombre><socios>$valor</socios></equipo>\n";
    }
    echo "<fin>\n";

    echo "\n\n******************************************************\n";

    $cont = 0; 
    echo "<inicio>\n";
    # estrategia --> equipo + sapardor excepto el último
    foreach($equipos as $clave => $valor) {
        $cont++;
        echo "  <equipo><nombre>$clave</nombre><socios>$valor</socios></equipo>\n";
        # El último no lleva separador
        if ($cont < count($equipos)) echo "  <*|*>\n";
        
    }
    echo "<fin>\n";