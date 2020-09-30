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