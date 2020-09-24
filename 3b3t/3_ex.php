<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Document</title>
    <style>
    p{
      text-decoration: underline;
        }
    </style>

  </head>
  <body>
    Poczatek pliku

    <?php

      echo "<p>Dane kontaktowe</p>";

      include 'katalog/imie.php';
      echo '<br>';
      include 'katalog/nazwisko.php';
      echo '<hr>';



     ?>

    Koniec pliku
  </body>
</html>
