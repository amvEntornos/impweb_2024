<?php
    $num = (int) readline("Dame un valor (positivo > 0): ");
    for($cont = $num; $cont >= 1; $cont--) {
        echo "$cont ";
    }
    echo "\n¡Fin!\n";