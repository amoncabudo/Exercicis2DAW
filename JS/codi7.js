<?php  $n = (int) readline("Enter the number of prime numbers to display: ");

  function isPrime($number) {
    if ($number <= 1) return false;
    for ($i = 2; $i <= sqrt($number); $i++) {
      if ($number % $i == 0) return false;
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