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
      if(isset($_GET['adduser'])) {
        echo <<< FORMADDUSER
          <h4> Dodawanie Użytkownika </h4>
          <form class="" action="./baseUtils/insert.php" method="post">
            <input type="text" name="name" placeholder="Podaj imię"><br><br>
            <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
            <input type="date" name="date"><br><br>
            <input type="submit" value="Utwórz użytkownika">
          </form>
        FORMADDUSER;
      }
      else{
        echo "<br><a href=\"./dataBaseTableWithInsert.php?adduser=1\">Dodaj użytkownika</a>";
      }
     ?>

  </body>
</html>
