<?php

  echo "<h4> Użytkownicy </h4>";

  $connect = new mysqli("localhost", "root", "", "zsk4bgr2");

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
