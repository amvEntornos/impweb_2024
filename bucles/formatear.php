<?php
    echo "Dime tu edad: ";
    $edad = (int) readline();

    if ($edad <= 10) {
        echo "Tienes $edad, el precio de tu entrada es gratis";
    }
    elseif ($edad <= 16) {
        echo "Tienes $edad, el precio de la entrada es 3€";
    }
    elseif ($edad <= 25) {
        echo "Tienes $edad, el precio de la entrada es 4€";
    }
    elseif ($edad <= 64) {
        echo "Tienes $edad, el precio de la entrada es 9€";
    }
    else {
        echo "Tienes $edad, el precio de la entrada es 2€";
    }