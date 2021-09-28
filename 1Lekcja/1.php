<?php
echo "ZSK<br>";
echo "ZSK<br>";

$name = "Janusz";
echo 'Imie: $name <br>';
echo "Imie: $name <br>";

//typy danych

//calkowity
$calkowita = 10;
$bin = 0b1011; //11
$oct = 011; //9
$hex = 0xA;

echo "$hex<br>";

// konkatenacja
echo "tekst1"."teskt2";

// interpolacja
echo "teskt1", "tekst2";

// zmiennoprzecinkowa
$x = 10.5;

// logiczny
$prawda = true;
$falsz = false;

echo $falsz;


// skladnia heredoc

echo <<<ETYKIETA
<hr>
Imie: $name<br>
<h3>Poznan</h3>
<hr>
ETYKIETA;

$text = <<<ETYKIETA
<hr>
Imie: $name<br>
<h3>Poznan</h3>
<hr>
ETYKIETA;

echo $text;

echo <<<ETYKIETA
<hr>
Imie: $name<br>
<h3>Poznan</h3>
<hr>
ETYKIETA;

echo "wartosc zmiennej imie: $name, nazwa zmiennej name: \$name";
 ?>
