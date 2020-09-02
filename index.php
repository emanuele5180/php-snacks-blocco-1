<!-- Snack 1
Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema. -->



<?php

  $giornataUno = [
    "partitaUno" => [
      "squadra di casa" => "Olimpia Milano",
      "squadra ospite" => "Cantù",
      "punteggio squadra di casa" => 55,
      "punteggio squadra ospite" => 60
    ]

    // $partitaDue = [],
    // $partitaTre = [],
    // $partitaQuattro = [],
    // $partitaCinque = []
    //
  ];
  //echo $giornataUno["partitaUno"]["squadra di casa"]; per stampare il valore di una chiave

  //var_dump($giornataUno);
  foreach ($giornataUno as $partitaCorrente) {
    echo $partitaCorrente["squadra di casa"] . " "
    .$partitaCorrente["squadra ospite"]. " "
    .$partitaCorrente["punteggio squadra di casa"]."-"
    .$partitaCorrente["punteggio squadra ospite"]
    ."<br/>";
  }





?>
