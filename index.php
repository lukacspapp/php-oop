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

      $person1 = new Person("Lukacs", "Blue", 31);
      echo $person1->getName();
    ?>

  </body>

</html>