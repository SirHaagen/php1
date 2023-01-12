<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP PROJECT - STRINGS</title>
</head>

<body>
  
  <?php

  $string= "This is plane text";
  $age= 30;
  $money= 35.8;
  $isMale= true;

  echo ("Hello world <hr>");
  echo "<h1>Hello world</h1>";

  echo "<h1>$string</h1><hr><p>He is $age</p>";
  echo 75.3 ."<br>";
  echo $isMale."<br> I have $".$money;

  //OPERATIONS WITH STRINGS

  $string2= "Operation With STRINGS";

  echo "<br><hr>". $string2;
  echo "<br>".strtolower($string2);
  echo "<br>".strtoupper($string2);
  echo "<br>".strtoupper("dog");
  echo "<br>".strlen($string2);
  echo "<br>".$string2[0];
  echo "<br>"."dog"[2];
  $string2[0]= "o";
  echo "<br>".$string2;
  echo "<br>".str_replace("operation", "operations", $string2); //strings to replace, replace with
  echo "<br>".str_replace("opera", "play", $string2);
  echo "<br>".substr($string2, 10); //start substracting
  echo "<br>".substr($string2, 10, 4); //start substracting, how many characters
  echo "<br>".trim("        hello     ");

  ?>

</body>

</html>