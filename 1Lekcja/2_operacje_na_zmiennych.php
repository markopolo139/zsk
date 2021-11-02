<?php
echo PHP_VERSION;
echo 2**10;

echo "<br>";

$x = 100;
$y = 10;
echo $x<=>$y;

$x = 1;
$y = 1.0;

echo gettype($x);
echo gettype($y)."<br>";

if ($x==$y) {
  echo "rowne";
} else {
  echo "rozne";
}

if ($x===$y) {
  echo "identyczne";
} else {
  echo "rozne";
}

/*
 preinkrementacja ++$x
 postinkrementacja $x++

 predekrementacja --$x
 postdekrementacja $x--
*/

echo "<br>";

$x = 5;
$x = ++$x;

echo $x;

$x = $x++;

echo $x;

$x = 1;
echo $x;  // 1
$x = $x++;
echo $x;  // 1
$x = ++$x;
echo $x;  // 2
$y = ++$x;
echo $x;  // 3
echo $y;  // 3
$y = $x++;
echo $x;  // 4
echo $y;  // 3

?>
