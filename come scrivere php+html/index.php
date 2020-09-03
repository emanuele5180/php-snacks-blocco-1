<?php
    $arr = [1, 2, 3];
?>
<!-- VERSIONE 1 -->
<div class="">
    <?php foreach ($arr as $val) {
        echo $val . "<br>";
    } ?>
</div>
<!-- VERSIONE 2 -->
<?php
    foreach ($arr as $val) {
        echo "<div>" . $val . "</div>";
    }
 ?>
 <!-- VERSIONE 3 -->
 <?php
     foreach ($arr as $val) {
         ?>
            <div>
                <?php echo $val; ?>
            </div>
Z
         <?php
     }
  ?>
