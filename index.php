<?php
  include 'data.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="public/css/app.css" type="text/css">
  </head>
  <body>

    <div class="container">

      <h2>Codici giocatori</h2>
      <?php
      foreach ($giocatori as $key => $singolo_giocatore) {
        echo $singolo_giocatore['codice']. '<br>';
        // foreach ($singolo_giocatore as $key => $value) {
        //   echo $value;
        // }
      }
      ?>
    </div> <!-- fine container -->

    <!-- <div class="opzione2">
      <?php
        foreach ($codici_giocatori as $value) {
          echo $value;
        }
      ?>
    </div> -->

  </body>
</html>
