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
      $person1 = new Person();
      $person1->setName('Lukacs');
      echo $person1->name;

      $person2 = new Person();
      $person2->setName('Sanyi');
      echo $person2->name
    ?>
  </body>

</html>