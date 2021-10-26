<?php

  echo "<h4> Użytkownicy w Tabeli </h4>";

  $connect = new mysqli("localhost", "root", "", "zsk4bgr2");

  $sql = "SELECT * FROM `users`;";

  $result = $connect->query($sql);

  echo <<< Table
    <table>
      <tr>
        <th>Id</th>
        <th>Imie</th>
        <th>Nazwisko</th>
        <th>Data Urodzenia</th>
      </tr>
  Table;
  while($row = $result->fetch_assoc()) {
    echo <<< ROW
    <tr>
      <td>$row[id]</td>
      <td>$row[name]</td>
      <td>$row[surname]</td>
      <td>$row[birth_day]</td>
    </tr>
    ROW;
  }

  echo "<table>";
 ?>
