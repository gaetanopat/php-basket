<?php
  $giocatori = [];


  // creo 20 giocatori
  for ($i = 0; count($giocatori) < 20; $i++) {
    $codice = generatePlayerCode(3, 3);
    // controllo che il giocatore non esista già
    if(!array_key_exists($codice, $giocatori)) {
      $giocatori[$codice] = [
        'codice_giocatore' => $codice,
        'punti_fatti' => generatePointsMade(0, 100),
        'numero_rimbalzi' => generateRebounds(0, 100),
        'numero_falli' => generateFaults(0, 100),
        'percentuale_successo_tiri_da_2_punti' => generateTwoPointsPercentage(0, 100),
        'percentuale_successo_tiri_da_3_punti' => generateThreePointsPercentage(0, 100)
      ];
    }
  }

  // per la visualizzazione dei giocatori
  function visualizzaGiocatori($giocatori){
    foreach ($giocatori as $key => $value) {
      echo '<div class="card">';
        echo '<h3>Codice giocatore: <span>' . $value['codice_giocatore'] . '</span></h3>';
        echo '<h4>Punti fatti: <span>' . $value['punti_fatti'] . '</span></h4>';
        echo '<h4>Numero rimbalzi: <span>' . $value['numero_rimbalzi'] . '</span></h4>';
        echo '<h4>Numero falli: <span>' . $value['numero_falli'] . '</span></h4>';
        echo '<h4>% successo per tiri da 2 punti: <span>' . $value['percentuale_successo_tiri_da_2_punti'] . '</span></h4>';
        echo '<h4>% successo per tiri da 3 punti: <span>' . $value['percentuale_successo_tiri_da_3_punti'] . '</span></h4>';
      echo '</div>';
    }
  }
?>
