<?php echo 'Hello World from PHP!'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dynamic Text</title>
  </head>
  <body>

    <?php
      $title = 'What a Wonderful World!';
      $firstName = "Bob";
      $lastName = "Smith";
      // Hi, I'm a comment. And above is a variable (denoted w/ $)
      /* And I'm a multi-line
      comment. Look familiar? */
    ?>

        <h1><?php echo $title; ?></h1>
        <p><?php echo 'My name is '.$firstName.' '.$lastName /*concatenated string*/?></p>
        <p> Arrays are created w/ array() function.</p>

    <?php
    //Arrays
    $numberList = array(1,3,'5',7,'9','<em>11</em>');
    echo '<p>Number list array using echo: '.$numberList.'</p>';
    echo '<p>Number list array index 0 using echo: '.$numberList[0].'</p>';
    echo '<p>Number list array using print_r: </p>';
    print_r($numberList);

    //Associative Arrays
    $names = array("first_name" => 'Mary', "last_name" => 'Johnson', "city" => 'Madison');
    echo '<p>Associative array using print_r: </p>';
    print_r($names);
    echo '<p>First name is: '.$names['first_name'].'</p>';
     ?>

      </body>
    </html>
