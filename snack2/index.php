<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->


<?php

  $name = $_GET["name"];
  $mail = $_GET["mail"];
  $age = $_GET["age"];


  echo $name;
  echo "<br/>";
  echo $mail;
  echo "<br/>";
  echo $age;


  // $name = "name";
  // $mail = "mail";
  // $age ="age";
  //
  // echo("name");
  // echo("mail");
  // echo("age");

?>
