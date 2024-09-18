<?php

$numusuari = intval(readline("Escriu un numero: "));

if ($numusuari < 0) {
    echo "El número debe ser mayor o igual a 0: $numusuari";
} elseif ($numusuari <= 1) {
    echo $numusuari;  
} else {
    $num0 = 0;
    $num1 = 1;

    for ($i = 2; $i <= $numusuari; $i++) {
        $num1 = $num0 + $num1;
        $num0 = $num1 - $num0;  
    }

    echo $num1;
}

?>
