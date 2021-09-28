<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Prostokat</title>
  </head>
  <body>

    <h3>Prostokat</h3>

    <form method="get">
      <input type="text" name="sideA" placeholder="Podaj długość boku"><br><br>
      <input type="text" name="sideB" placeholder="Podaj długość boku"><br><br>
      <input type="submit" value="Oblicz" />
    </form>

    <?php
      if (!empty($_GET['sideA']) && !empty($_GET['sideB'])) {
        $sideA = str_replace(",", ".", $_GET['sideA']);
        $sideB = str_replace(",", ".", $_GET['sideA']);
        $area = $sideA * $sideB;
        $circuit = 2 * $sideA + 2 * $sideB;
        echo <<< EOF
          <hr />
          Pole powierzchni: $area cm<sup>2</sup> <br>
          Obwod: $circuit cm
        EOF;

      }
      else {
        echo "<br>Podaj dlugość boku";
      }

    ?>
  </body>
</html>
