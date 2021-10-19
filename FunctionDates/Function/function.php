<?php

  function show() {
    echo "SHOW<br>";
  }

  function show1($name) {
    return $name;
  }

  function stringValidate($string, $length) {
    $string = ucfirst(strToLower(trim($string)));
    return substr($string, 0, $length);
  }

 ?>
