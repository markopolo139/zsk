<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kwadrat</title>
  </head>
  <body>

    <h3>Kwadrat</h3>

    <form method="get">
      <input type="text" name="side" placeholder="Podaj długość boku"><br><br>
      <input type="submit" value="Oblicz" />
    </form>

    <?php
      if (!empty($_GET['side'])) {
        $sideA = str_replace(",", ".", $_GET['side']);
        $area = pow($sideA, 2);
        $circuit = 4 * $sideA;
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
