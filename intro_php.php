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

     <hr>
<p> Conditional Statements</p>
<?php
// If Statement
if (3 < 10){
echo '3 is less than 10';
echo '<br />';
} else {
echo 'Oops. That is not right.';
echo '<br />';
}

// Switch Statement
$number = 10;

switch($number){
  case 1:
  echo "is it 1?";
    break;
  case 10:
  echo "is it 10?";
    break;
  case 20:
  echo "is it 20?";
    break;
  default:
  echo "Don't know. What is it?";
    break; //not necessary
}
echo '<p>The syntax for switch and while are like JS.</p>';
// While loop
$counter = 1;

while($counter <= 10){
echo $counter.', ';
$counter++;
}

echo '<p>The syntax for a For loop is too.</p>';
// For loop
for($i = 0; $i <= 100; $i+=10){
echo $i.', ';
}

echo '<p>Using a Foreach loop on an array.</p>';
// ForEach loop
$fruitArray = ['Apple', 'Banana', 'Cantaloupe', 'Durian', 'Kiwi', 'Orange', 'Starfruit'];

foreach($fruitArray as $fruit){
echo '<p>I like to eat '.$fruit.'!</p>';
}

?>

      </body>
    </html>
