<?php
  if(empty($_POST)) {
    $message = "Nie było tablicy POST";
    header("location: ../dataBaseTableWithInsert.php?message=$message&adduser=");
  }
  else {
    foreach ($_POST as $key => $value) {
      if(empty($value)) {
        $message = "Wypełnij wszyskie pola";
        header("location: ../dataBaseTableWithInsert.php?message=$message&adduser=");
        exit();
      }
    }

    require_once "./connect.php";
    $sql = "Insert into users values (NULL, '$_POST[name]', '$_POST[surname]', '$_POST[date]');";
    $connect->query($sql);
    $connect->close();
    $message = "Utworzono urzytkownika";
    header("location: ../dataBaseTableWithInsert.php?message=$message&adduser=");
  }
 ?>
