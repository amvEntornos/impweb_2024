<?php
    $res1 = 12 == "12";
    $res2 = 12 === "12";

    echo "¿12 == '12'? $res1\n";
    echo "¿12 === '12'?\n";
    if (12 === "12") {
        echo "Son exactamente iguales (en valor y tipo)";
    }
    else {
        echo "Son distintos";
    }
    