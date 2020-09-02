<!-- Snack 1
Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema. Olimpia Milano - Cantù | 55-60-->



<?php

  $giornataUno = [
    "partitaUno" => [
      "squadra di casa" => "Olimpia Milano",
      "squadra ospite" => "Cantù",
      "punteggio squadra di casa" => 55,
      "punteggio squadra ospite" => 60
    ],

    "partitaDue" => [
      "squadra di casa" => "Pallacanestro Varese",
      "squadra ospite" => "Los Angeles Lackers",
      "punteggio squadra di casa" => 150,
      "punteggio squadra ospite" => 2
    ],
    "partitaTre" => [
      "squadra di casa" => "Virtus Bologna",
      "squadra ospite" => "Fortitudo Bologna",
      "punteggio squadra di casa" => 75,
      "punteggio squadra ospite" => 89
    ],
    "partitaQuattro" => [
      "squadra di casa" => "Pallacanestro Brescia",
      "squadra ospite" => "New Basket Brindisi",
      "punteggio squadra di casa" => 65,
      "punteggio squadra ospite" => 64
    ],
    "partitaCinque" => [
      "squadra di casa" => "Aquila Basket Trento",
      "squadra ospite" => "Pallacanestro Reggiana",
      "punteggio squadra di casa" => 72,
      "punteggio squadra ospite" => 69
    ]


  ];
  //echo $giornataUno["partitaUno"]["squadra di casa"]; per stampare il valore di una chiave

  //var_dump($giornataUno);
  foreach ($giornataUno as $partitaCorrente) {
    echo $partitaCorrente["squadra di casa"] . " "
    .$partitaCorrente["squadra ospite"]. " " ."|". " "
    .$partitaCorrente["punteggio squadra di casa"]."-"
    .$partitaCorrente["punteggio squadra ospite"]
    ."<br/>";
  }

?>
