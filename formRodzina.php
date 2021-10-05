<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Średnia wieku</title>
  </head>
  <body>
    <?php

      if (!isset($_POST['persons']) and !isset($_POST['person0'])) {
        echo <<< EOF
        <h3>Ilość osób w rodzinie</h3>
        <form method="post">
          <input type="number" name="persons" placeholder="Ilość osób w rodzinie"/><br><br>
          <input type="submit" value="Zatwierdź">
        </form>
        EOF;
      }
      else {
        if (!empty($_POST['persons']) and !isset($_POST['person0'])) {
          $Persons = $_POST['persons'];
          echo "<h3>Ilość osób w rodzinie: $Persons </h3>";
          echo "<form method=\"post\">";
          for($i = 0; $i < $Persons; $i++) {
            echo "<input type=\"number\" name=\"person$i\" placeholder=\"Wiek osoby\"/><br><br>";
          }
          echo "<input type=\"submit\" value=\"Zatwierdź\"></form>";

      }
      else {
          $AgeSum = 0;
          $i = 0;
          while(!empty($_POST['person'.$i])) {
            $AgeSum += $_POST['person'.$i];
            $i++;
          }

          $AgeAvg = number_format($AgeSum / $i, 2);
          echo <<< EOF
          Ilość osób: $i
          Średnia wieku wynosi: $AgeAvg
          <br><a href="./formRodzina.php">Powrót</a>
          EOF;
         }
    }

     ?>
  </body>
</html>
