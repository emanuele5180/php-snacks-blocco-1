<!-- Utilizzare questo array: https://pastebin.com/CkX3680A.
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio
e i PM in un rettangolo verde. -->

<?php
  $db = [
    'teachers' => [
      [
        'name' => 'Michele',
        'lastname' => 'Papagni'
      ],
      [
        'name' => 'Fabio',
        'lastname' => 'Forghieri'
      ]
    ],
    'pm' => [
      [
        'name' => 'Roberto',
        'lastname' => 'Marazzini'
      ],
      [
        'name' => 'Federico',
        'lastname' => 'Pellegrini'
      ]
    ]
  ];

  // $type = array_keys($db);
  // //var_dump($type) ;
  // echo (array_values($type));

  $teachers = $db['teachers'];
  $pms = $db['pm'];

?>

<div style="background:grey">
    <?php
        foreach ($teachers as $teacher) {
            echo $teacher['name'] . " " . $teacher['lastname'] . "<br>";
        }
    ?>
</div>
<div style="background:green">
    <?php
        foreach ($pms as $pm) {
            echo $pm['name'] . " " . $pm['lastname'] . "<br>";
        }
    ?>
</div>
