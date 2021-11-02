<?php

  echo "<h4> Użytkownicy </h4>";

  require "./baseUtils/connect.php";

  $sql = "SELECT * FROM `users`;";

  $result = $connect->query($sql);

  while($row = $result->fetch_assoc()) {
    echo <<< ROW
      Id: $row[id] <br>
      Imie: $row[name], Nazwisko: $row[surname] <br>
      Data: $row[birth_day] <br>
      <hr>
    ROW;
  }
 ?>
