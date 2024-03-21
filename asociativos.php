<?php 
    
    $navegadores = [ 
        "chrome" => "118.0.5993.89 (64 bits)",
        "firefox" => "37.27.99",
        "safari" => "15.888",
        "brave" => "91.897.992 (64 bits)",
        "opera" => "12.12.18282",
        "edge" => "118.0.2088.57",
    ];

    # Recorrido 
    echo "Listado de navegadores:\n";
    foreach($navegadores as $nombre => $version) {
         printf("|%-15s| %25s|\n", $nombre, $version);
    }

    $clave = readline("¿Clave? ");
    echo "Valor: ".$navegadores[$clave];



