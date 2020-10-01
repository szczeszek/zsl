<?php

$text = <<< T
    zsl - Zespol
    Szkol
    Łacznosci<br>
T;

    echo $text;
    echo nl2br($text);

    $name = 'jaNUSZ';

    $name = strtolower($name);
    echo $name;

    $name = 'KrysTYNA';
    echo strtoupper($name);

    $name = 'aNna NoWAK';
    echo ucfirst($name);

    echo ucwords(strtolower($name));

$lorem = <<< LOREM
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem vero, voluptate velit et consequuntur ipsa doloremque quibusdam facere dolor assumenda! Maxime sunt nihil distinctio minima aspernatur, libero alias ipsa accusamus?
LOREM;
    echo $lorem;
    echo '<br>';

    $col = wordwrap($lorem, 40, '<br>');
    echo $col;

    $col = wordwrap($lorem, 40, '<hr>');
    echo $col;


    //czyszczenie zawartosci bufora
    ob_clean();

    //usuwanie białych znaków
    $name = 'Anna';
    $name1 = '     Anna    ';
    echo 'Dlugosc zmiennej $name: ',strlen($name); //4
    echo 'Dlugosc zmiennej $name: ',strlen($name1); //13

    echo strlen(ltrim($name1));
    echo strlen(rtrim($name1));
    echo strlen(trim($name1));

    echo strlen($name1);

    $address = "Poznań, ul. Polna 2, tel. (61)123-45-67";
    $search = strstr($address, 'tel', true); //true Poznań, ul... //false tel.
    echo "<br>$search<br>";

    $address = "Poznań, ul. Polna 2, tel. (61)123-45-67";
    $search = stristr($address, 'tel', true); //stristr 
    echo "<br>$search<br>";

    echo strstr('zsl@gmail.com','@');
    echo strstr('zsl@gmail.com',64);

    $domain = substr(strstr('zsl@gmail.com','@'), 1);
    echo $domain;



?>