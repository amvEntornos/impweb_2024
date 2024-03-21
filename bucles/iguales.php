<?php 
    $num1 = (int) readline("Número 1: ");
    $num2 = (int) readline("Número 2: ");

    if ($num1 === $num2) {
        echo "$num1 y $num2 son iguales\n";
    }
    else {
        echo "$num1 y $num2 son distintos\n";
    }
    echo "Ciao!";