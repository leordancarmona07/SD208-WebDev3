<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <style>
        body{
            background-image:url("https://toppng.com/uploads/preview/1080p-abstract-design-wallpaper-11554124415uwrtckugcy.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }
        div div{
            text-align: center;
        }
        .container{
            width: 60%;
            background-color: rgba(255, 255, 255, 0.8);
            margin: 0 auto;
            padding: 2% 2%;
        }
        h1,h3{
            color: palevioletred;
        }
        table{
            border : 2px solid black;
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