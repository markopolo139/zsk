<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3> Usuwanie danych w tabeli </h3>
    <?php

    if (!empty($_GET['id'])) {

      $message;

      require "./baseUtils/connect.php";

      $sql = "Delete FROM `users` where id = $_GET[id];";

      $connect->query($sql);

      if($connect->affected_rows) {
        $message = "Usunięto wiersz";
      }
      else {
        $message = "Nie Usunięto wiersza";
      }

      //header("location: ./dataBaseTable.php?message=$message");
      header("location: ./dataBaseTableWithInsert.php?message=$message");
    }
     ?>
  </body>
</html>
