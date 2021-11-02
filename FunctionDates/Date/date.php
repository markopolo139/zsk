<?php

  setlocale(LC_ALL, 'polish');

  echo "dzien-miesiac-rok: ", date('d-m-Y'), "r<br>";
  echo date('m-d-y'), "r<br>";
  echo date('d-M-y'), "r<br>";
  echo date('d-F-Y'), "r<br>";

  echo strftime('%d %B %Y'),"r.<br>";

  echo date("G:i:s"), "<br>";
?>
<script>
  setTimeout(function(){
    window.location.reload();
  }, 1000);
</script>
<?php
  echo date("h:i:s a"), "<br>";
  echo date("g:i:s a"), "<br>";

  $date = getdate();
  echo "<pre>";
  print_r($date);
  echo "</pre>";

  echo date("L"); //spr czy rok jest przestępny

  //mktime

  $today = mktime(0, 0, 0, date('m'), date('d'), date('y'));
  echo "<br> $today";

  /*
    ile lat mineło od 1 stycznia 1970;
  */

  echo "<br>";
  $year = $today/(60*60*24*365);
  echo (int)$year;

  $lastYear = mktime(0, 0, 0, date('m'), date('d'), date('y') - 1);
  echo "<br> $lastYear";

  /*
    ile lat mineło od 1 stycznia 1970;
  */

  echo "<br>";
  $year = $lastYear/(60*60*24*365);
  echo (int)$year;
 ?>
