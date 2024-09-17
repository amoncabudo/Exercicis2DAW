<?php  $n = (int) readline("Escriu un numero ");

  function isPrime($num) {
    if ($num <= 1) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
      if ($num % $i == 0) return false;
    }
    return true;
  }

  $count = 0;
  $num = 2;
  while ($count < $n) {
    if (isPrime($num)) {
      echo $num . " ";
      $count++;
    }
    $num++;
  }
?>