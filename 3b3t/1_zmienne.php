<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Zmienne</title>
  </head>
  <body>
    <?php

    $name = 'Janusz';
    $surname = 'Olszowy';

    echo "Imie: $name<br>";

    //konkatenacja
    echo "Nazwisko: $surname<br>".'<hr>';
    echo 'test';


    //typy danych

      //bolean
      $prawda = true;
      $falsz = false;

      echo $prawda;
      echo $falsz;

      echo '<hr>';


      //integer
      $bin = 0b1010; //10
      $oct = 010; //8
      $dec = 20; //20
      $hex = 0xB; //11

      echo $hex,'<br>';
      echo $bin,'<br>';
      echo $dec,'<br>';
      echo $oct,'<br>';

      //skladnia heredoc

      $text = <<< ETYKIETA

        Imie: $name<br>
        Nazwisko: $surname<hr>

ETYKIETA;


      echo $text;

      echo <<< E

      Heredoc 2<br>
      Imie: $name<hr>

E;

      echo <<< 'E'

      Nowdoc<br>
      Imie: $name<hr>

E;

  $city = 'Poznan';
  echo "Nazwa zmiennej: \$city, wartosc: $city";

     ?>
  </body>
</html>
