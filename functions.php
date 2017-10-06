<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Functions in PHP</title>
  </head>
  <body>
    <h1>Functions in PHP</h1>

<?php
// Define a function
function greeting($name)){
  echo "Hello, ".$name;
}
greeting('Joe');

function addNumbers($num1, $num2){
  $sum = $num1 + $num2;
  echo $sum
}
addNumbers(13, 67);




?>




  </body>
</html>
