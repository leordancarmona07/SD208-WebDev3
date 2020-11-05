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
          body{
            background-image:url("https://www.thehivegym.uk/wp-content/uploads/2017/07/bmi-background-2048px.png");
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }
    div div{
        text-align: center;
        
    }
    .contents{
        width: 30%;
        background-color: rgba(255, 255, 255, 0.8);
        margin: 0 auto;
        padding: 2% 2%;
        margin-top: 10%;
        
        
       
    }
    h1{
        color: palevioletred;
    }
    
    .submit{
        margin: 20px;
        background-color: palevioletred;
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