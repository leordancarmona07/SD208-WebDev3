<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FizzBuzz</title>
</head>
<body>
    <?php

function fizzBuzz() {
    $x = 0;
    while ($x < 100){
        $x++;
        if ($x % 3 == 0){
            echo "<h3>  <font color=yellow>Fizz</font></h3>";
        }elseif ($x % 5 == 0) {
            echo "<h3>  <font color=red>Buzz</font></h3>";
        }else{
            echo $x;
            echo "<br>";
        }
    }
    
  }
  fizzBuzz();

    ?>
</body>
</html>