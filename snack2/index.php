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
  echo "<br/>";

  $lenghtName = strlen($name);
  echo "<br/>";
  $isDotInMail = strpos($mail,".");
  $isAtInMail = strpos($mail, "@");
  echo "<br/>";


  echo $lenghtName;
  echo "<br/>";

  // $isAgeAnumber = is_int($age);
  $isAgeAnumber = is_numeric($age);
  var_dump($isAgeAnumber);
  echo "<br/>";


  if ($lenghtName>3 & $isDotInMail !== false & $isAtInMail !== false & $isAgeAnumber ) {
    echo "Accesso riuscito";
  } else {
    echo "Accesso negato";
  }


  // $name = "name";
  // $mail = "mail";
  // $age ="age";
  //
  // echo("name");
  // echo("mail");
  // echo("age");

?>
