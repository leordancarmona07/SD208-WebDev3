<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <style>
        body{
            background-color: gray;
        }
        div div{
            text-align: center;
        }
        .container{
            width: 30%;
            background-color: lavender;
            margin: 0 auto;
        }
        h3{
            padding-bottom: 10%;
        }
    </style>
</head>
<body>
    
    <div>
        <div class ="container">
            <h1>Inputted Datas</h1>
            <hr>
                <?php
                session_start();
                if (isset($_SESSION["datas"])){
                    echo "<h3>","First name is ". $_SESSION["datas"][0].
                    "<h3>","Last Name is ".$_SESSION["datas"][1].
                    "<h3>"," Email is ". $_SESSION["datas"][2].
                    "<h3>"," Address is ". $_SESSION["datas"][3]."</h3>";
                }
                    
                ?>
        </div>
    </div>
    
</body>
</html>