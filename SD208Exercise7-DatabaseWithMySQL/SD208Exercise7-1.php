<?php

require "./handler/connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
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
        width: 30%;
        background-color: rgba(255, 255, 255, 0.8);
        margin: 0 auto;
        padding: 2% 2%;
        
        
       
    }
    h1{
        color: palevioletred;
    }
    
    #submit{
        margin: 20px;
        background-color: palevioletred;
    }
    .checker{
        color: red;
        font-size: 150%;
        padding-bottom: 50px;
    }
    
</style>
<body>

    <div>
        <div class="container">
        <h1>Registration Form</h1>
        <form action="./handler/insert.php" method="post">
            <p>First Name:</p>
            <input type="text" name="fname" >
            <p>Last Name:</p>
            <input type="text" name="lname" >
            <p>Address:</p>
            <input type="text" name="addrss" >
            <p>Email:</p>
            <input type="email" name="email">
            <p>Password:</p>
            <input type="password" name="pass"><br>
            <input type="submit" value="Submit" id="submit">
            
        </form>
        </div>
        
    </div>
</body>
</html>