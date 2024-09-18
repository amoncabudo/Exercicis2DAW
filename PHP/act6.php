<?php
$a = 72;
$b= 50;


function mcd($a,$b) {
 while (($a % $b) != 0) {
  $c = $b;
  $b = $a % $b;
  $a = $c;
 }
 return $b;
}

function mcm($a,$b) {
 return ($a * $b) / mcd($a,$b);
}

echo "El mcd de $a i $b es: " . mcd($a, $b) . "<br>";
echo "El mcm de $a i $b es: " . mcm($a, $b);
?>