<?php

  //wersja PHP
  echo PHP_VERSION;
  echo '<br>';

  //echo phpinfo();

  $pow = 2 ** 8;
  echo $pow; //255

  echo '<br>';
  echo 'a', 'b', 'c'; //abc
  echo '<br>';
  echo 'a'.'b'.'c'; //a+b+c => abc

  //operatory bitowe

    //and &, or |, xor ^, not ~, <<, >>
    $x = 0b1010;

    echo "<hr>$x<br>";

    $x = $x << 2; //101000(2) => 8+32 = 40
    echo "$x<br>";

    echo "<hr>";

    $x = 0b1010;
    $x = $x << 1; //101000(2) => 8+32 = 20
    echo "$x.<hr>";


    //porownanie <=>
      $x = 10;
      $y = 20;
      echo $x <=> $y;
      $result = $x <=> $y;

      echo $result;

 ?>
