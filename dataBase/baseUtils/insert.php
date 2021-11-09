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
    $sql = "Insert into users values (NULL, '$_POST[name]', '$_POST[surname]', '$_POST[date]','$_POST[cityId]');";
    $connect->query($sql);

    if($connect->affected_rows == 1) {
      $message = "Utworzono urzytkownika";
    }
    else {
      $message = "Wystpił błąd podczas tworzenia";
    }

    $connect->close();

    header("location: ../dataBaseTableWithInsert.php?message=$message&adduser=");
  }
 ?>
