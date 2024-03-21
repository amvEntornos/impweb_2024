<?php
    $cont = 0;
    for($n = 10; $n <= 80; $n++) {
        if ($n != 40 and $n != 75) {
            echo "$n ";
            # Contamos escrituras
            $cont++;
            if ($cont % 10 == 0) {
                echo "\n";
                $cont = 0;
            }
        }
            
    }