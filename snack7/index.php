<!-- Creare un array contenente qualche alunno di un'ipotetica classe. Ogni
alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->


<?php

  $voti = [
    'Mario Rossi' => [
      5, 7, 9, 5, 5, 6, 7, 8
    ],
    'Francesca Bianchi' => [
      9, 10, 9, 9, 8, 9, 10, 10
    ]
  ];

  foreach ($voti as $name => $v) {
        echo $name . ": ";
        // VERSIONE 1
        // $sum = 0;
        // foreach ($v as $voto) {
        //
        //     $sum += $voto;
        // }
        // $avg = $sum / count($v);
        // VERSIONE 2
        $avg = array_sum($v) / count($v);
        echo $avg;
        echo "<br>";
  }






?>
