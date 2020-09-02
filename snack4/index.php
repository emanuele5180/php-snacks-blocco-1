<!-- Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->



<?php
  $itemsNumber = 15;
  $min = 1;
  $max = 20;

  function arrayOfNumbers ($min, $max, $itemsNumber){


    $arr = [];

    while (count($arr) < $itemsNumber) {

      $randomNumber = rand($min,$max);

      if(!in_array($randomNumber,$arr)){
        $arr[] = $randomNumber;
      }

    }

    return $arr;
    var_dump($arr) ;



  }





?>
