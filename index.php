<?php
  include 'function.php';
  include 'data.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
    <h1>Giocatori</h1>
    <div class="container">
      <?php
        visualizzaGiocatori($giocatori);
      ?>
    </div>
  </body>
</html>
