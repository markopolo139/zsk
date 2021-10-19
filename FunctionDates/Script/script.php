<?php

require_once "../Function/function.php";

show();

if (!empty($_POST['name'])) {
  echo show1($_POST['name']);
}

$result = stringValidate($_POST['name'], 5);

echo "<br><br>".$result."<br>Długość ciągu: ".strlen($result);


 ?>
