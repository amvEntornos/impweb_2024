<?php
    # Entrada de datos
    # ^^^^^^^^^^^^^^^^^^^^^
    # Leer dos números por teclado
    $num1 = (int) readline("Dime un número: ");
    $num2 = (int) readline("Dime otro número: ");

    # Procesamiento
    # ^^^^^^^^^^^^^
    # Cálculos aritméticos simples
    # $vble = expresión (inst. asignación)
    $suma = $num1 + $num2;
    $rest = $num1 - $num2;
    $mult = $num1 * $num2;
    $divi = $num1 / $num3;

    # Salida de resultados
    # ^^^^^^^^^^^^^^^^^^^^
    echo "$num1 + $num2 --> $suma\n";
    echo "$num1 - $num2 --> $rest\n";
    echo "$num1 x $num2 --> $mult\n";
    echo "$num1 / $num2 --> $divi\n";

    echo "\nbye!\n";
