<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Practice Loops</title>
  </head>
  <body>
    <h1>Going to practice some PHP loops</h1>

<?php
// Make an if Statement w/ elseif and else to finally display "I love PHP"
code = "PHP"
if (code == "Java"){
  echo "I love coffee!";
} else if (code == "Python"){
  echo "Ooo, snakes are scary!";
} else if (code == "PHP"){
  echo "I love PHP!"
} else {
  echo "Sorry. I don't know that one."
}

// Me a forLoop that displays 10 numbers
for($i = 1; $i <= 512; $i*=2){
echo $i.', ';
}

//Make a switch statement that tests against one condition w/ 5 cases
$fruit = "durian";

switch($fruit){
  case "apple":
  echo "Red or green apple?";
    break;
  case "banana":
  echo "I like bananas. Especially banana bread.";
    break;
  case "canteloupe":
  echo "Melons are round.";
    break;
  case "durian":
  echo "Phew. What a smelly fruit.";
      break;
  case "eggplant":
  echo "That's not a fruit, silly.";
      break;
  default:
  echo "Don't know. What is it?";
    break; //not necessary
}

 ?>


  </body>
</html>
