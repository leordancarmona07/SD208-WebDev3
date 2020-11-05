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
    .checker{
        color: red;
        font-size: 150%;
        padding-bottom: 50px;
    }
    </style>
</head>
<body>
    <div>
    <div class="contents">
    <h1>Compute Your BMI</h1>
    <form action="SD208Exercise5-2.php" method="post">
        <h2>Height (cm):</h2> 
        <input type="number" name="height" id="" required><br>
        <h2> Weight (cm):</h2>
        <input type="number" name="weight" id="" required> <br>
        <input class="submit" type="submit" value="Compute BMI">

    
    </form>
    </div>
    </div>
</body>
</html>