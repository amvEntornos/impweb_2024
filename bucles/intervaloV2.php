<?php
    // $cont = 0;
    for($n = 10; $n <= 80; $n++) {
        if ($n != 40 and $n != 75) {
            echo "$n ";
            # Contamos escrituras
            $cont++;
            if ($cont == 10) {
                echo "\n";
                # Iniciamos una nueva cuenta
                $cont = 0;
            }
        }
            
    }