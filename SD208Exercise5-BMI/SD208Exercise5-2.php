<?php
$height = $_POST["height"];
$weight = $_POST["weight"];

$result = $weight/ ($height* $height);
$bmi = $result * 10000;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI-Calculator</title>

    <style>
        .contents{
            margin: 0 auto;
            text-align: center;
            background-color: skyblue;
            width: 20%;
        }
        .submit{
            margin-top: 50px;
            margin-bottom: 50px;
        }
        p{
            width: 80%;
            margin: 0 auto;
            background-color: gray;
            color: yellow;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div>
    <div class="contents">
        <h1>Compute Your BMI</h1>
    <form action="SD208Exercise5-1.php" method="post">
        <h2>Results</h2> 
        <p>
            <?php
            if ($bmi < 18.5 ){
                echo "$bmi <br> Underweight!";
            }elseif( $bmi >= 18.5 AND $bmi < 25 ){
                echo "$bmi <br> Normal Weight";
            }elseif( $bmi >= 25 AND $bmi < 30 ){
                echo "$bmi <br> Overweight";
            }elseif($bmi >= 30){
                echo "$bmi <br> Obesity";
            }else{
                echo "$bmi <br> Error!! please check your input again!";
            }


            ?>
        </p>
        <input class="submit" type="submit" value="Go Back BMI">

    
    </form>
    </div>
    </div>
</body>
</html>