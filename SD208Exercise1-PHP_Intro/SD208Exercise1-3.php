<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count Words</title>
</head>
<body>
    <?php
function countWords($str) {
    
    $set = str_word_count(strtolower("$str"), 1);
    $words = array_count_values($set);
    echo "This is the statement:<h3> $str </h3>";
    print_r($words);
    // foreach( as $key => $value){
    //     echo $key . " : " . $value . "<br>";
    // }
  }
  countWords("Nory was a Catholic because her mother was a Catholic, and Nory’s mother was a Catholic because her father was a Catholic, and her father was a Catholic because his mother was a Catholic, or had been a Catholic.");

    ?>
</body>
</html>
