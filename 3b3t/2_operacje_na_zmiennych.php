<head>

  <style>
  body{
    background-color: #202020
  }
  </style>

</head>

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

      echo "<hr><br>";



      if ($x==$y){
        echo "sa rowne.";
      }
      else {
        echo "sa rozne";
      }


      echo gettype($x);
      echo gettype($y);

      /*
        preinkrementacja ++$x
        predekrementacja --$x
        postin $x++
        postde $x--
      */

      $x=1;
      $x=$x++;
      echo $x;

      $x=++$x;
      echo $x;

      $y=$x++;
      echo $x;
      echo $y;

      $y=++$x * 2 -1;
      echo $x;
      echo $y;

      $x=2;
      echo $x++; //2
      echo ++$x; // 4
      echo $x; // 4
      $y=$x++; //5
      echo $y; //4
      $y=++$x; //5
      echo $y; //6
      echo ++$y; //7

      //operatory rzutowania
      // bool, int, float, string, array, object, unset

      $test = '123abc';
      $test1=0;
      $test2=20;

      $x=(int)$test;

      echo "<hr>$x<hr>";


      $x=(bool)$test1;
      echo "<br>$x<br>";//false
      echo 'Typ danych $x: '.gettype($x);

      $test2=20;
      echo "<hr>$test2<br>";
      $test2=(unset)$test2;
      echo "$test2<br>";
      echo 'Typ danych $x: '.gettype($test2);

      //rozmiar typu integer
      echo PHP_INT_SIZE; //8

      








 ?>
