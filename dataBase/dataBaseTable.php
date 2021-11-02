<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <?php

      echo "<h4> Użytkownicy w Tabeli </h4>";

      if(!empty($_GET['message']))
        echo $_GET[message];


      $connect = new mysqli("localhost", "root", "123", "school_php");

      $sql = "SELECT * FROM `users`;";

      $result = $connect->query($sql);

      echo <<< Table
        <table>
          <tr>
            <th>Id</th>
            <th>Imie</th>
            <th>Nazwisko</th>
            <th>Data Urodzenia</th>
            <th>Usuń</th>
          </tr>
      Table;
      while($row = $result->fetch_assoc()) {
        echo <<< ROW
        <tr>
          <td>$row[id]</td>
          <td>$row[name]</td>
          <td>$row[surname]</td>
          <td>$row[birth_day]</td>
          <td><a href="./baseDelete.php?id=$row[id]">Usuń</a></td>
        </tr>
        ROW;
      }

      echo "<table>";
     ?>
  </body>
</html>
