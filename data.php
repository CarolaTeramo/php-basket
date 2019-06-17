<?php

  $codici_giocatori = [];

  // funzione per generare un codice Giocatore
  // fatto da lettere e is_numeri

  // al posto del 3 nel for avrei potuto passare
  //dentro genera_codici_giocatori() la variabile $n
  // genera_codici_giocatori($n)
  // e nel for al posto di 3 mettere $n

  function genera_giocatore() {

    $codice_giocatore = "";

    $lettere = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $lunghezza_alfabeto = strlen($lettere);

    for ($i=0; $i < 3; $i++) {
      $tre_lettere = rand(0, $lunghezza_alfabeto - 1);
      $codice_giocatore .= $lettere[$tre_lettere];
      //var_dump($codice_giocatore);
      //echo '<br>';
      //echo $codice_giocatore;
    }

    for ($i=0; $i < 3; $i++) {
      $tre_numeri = rand(1,9);
      $codice_giocatore .= $tre_numeri;
      //var_dump($codice_giocatore);
      //echo '<br>';
      //echo $codice_giocatore;
    }

    // ho ottenuto il codice ora lo inserisco nell'array
    $codici_giocatori[] = $codice_giocatore;

    // genero numero di punti, rimbalzi e Falli
    $punti = rand(0, 40);
    $rimbalzi = rand(0,200);
    $falli = rand(0,5);

    // genero le percentuali per i tiri da 2 e 3 punti
    $perc_2 = (rand(0,1000) / 10);
    //echo '<br>';

    // echo '<prev>';
    // var_dump($perc_2);
    // echo '</prev>';
    $perc_3 = (100 - $perc_2);

    $giocatore = [
      'codice' => $codice_giocatore,
      'punti' => $punti,
      'rimbalzi' => $rimbalzi,
      'falli' => $falli,
      'perc_2' => $perc_2,
      'perc_3' => $perc_3,
    ];

    // echo '<br>';
    // var_dump($giocatore);

    return $giocatore;
  };// fine funzione genera codici


  $giocatori = [];

  for ($i=0; $i <100 ; $i++) {
    $giocatore = genera_giocatore();
    $prova = array_push($giocatori,$giocatore);
    //var_dump($giocatori);
  }

  foreach ($giocatori as $key => $singolo_giocatore) {
    echo $singolo_giocatore['codice']. '<br>';
    // foreach ($singolo_giocatore as $key => $value) {
    //   echo $value;
    // }
  }


?>
