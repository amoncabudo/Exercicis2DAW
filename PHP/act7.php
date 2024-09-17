<?php
echo "Escriu un número: ";
$n = (int) trim(fgets(STDIN)); 

$count = 0;
$num = 2;
echo "Els primers " . $n . " números primers són: \n";

while ($count < $n) {
    $isPrime = true;    
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }
    if ($isPrime) {
        echo $num . " ";
        $count++;
    }
    $num++;
}
echo "\n"; 
?>
