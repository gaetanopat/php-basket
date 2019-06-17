<?php
  // per generare i codici univoci
  function generatePlayerCode($char_length, $num_length){
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $numbers = '0123456789';
    $numbersLength = strlen($numbers);
    $code_player = '';

    for ($i = 0; $i < $char_length; $i++) {
      $code_player .= $characters[rand(0, $charactersLength - 1)];
    }

    for ($i = 0; $i < $num_length; $i++) {
      $code_player .= $numbers[rand(0, $numbersLength - 1)];
    }

    return $code_player;
  }

  // per generare il numero di punti fatti
  function generatePointsMade($min, $max){
    $points_made = rand($min, $max);

    return $points_made;
  }

  // per generare il numero di rimbalzi
  function generateRebounds($min, $max){
    $number_rebounds = rand($min, $max);

    return $number_rebounds;
  }

  // per generare il numero di falli commessi
  function generateFaults($min, $max){
    $number_faults = rand($min, $max);

    return $number_faults;
  }

  // funzione per generare la percentuale di successo per tiri da 2 punti
  function generateTwoPointsPercentage($min, $max){
    $percentage_twopoints = mt_rand($min * 10, $max * 10) / 10;

    return $percentage_twopoints;
  }

  // funzione per generare la percentuale di successo per tiri da 2 punti
  function generateThreePointsPercentage($min, $max){
    $percentage_threepoints = mt_rand($min * 10, $max * 10) / 10;

    return $percentage_threepoints;
  }
?>
