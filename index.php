<?php
  include 'includes/Person.php';
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Document</title>
  </head>

  <body>

    <?php

  echo Person::$drinkingAge;
  Person::setNewDrinkingAge(21);
  echo Person::$drinkingAge;

    ?>

  </body>

</html>