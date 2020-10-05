<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
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
    #submit{
        margin: 20px;
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
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
            <p>First Name:</p>
            <input type="text" name="fname" id="">
            <p>Last Name:</p>
            <input type="text" name="lname" id="">
            <p>Email:</p>
            <input type="email" name="email" id="">
            <p>Address:</p>
            <input type="text" name="address" id=""><br>
            <input type="submit" value="Submit" id="submit">
            <p class="checker">
                <?php
               if (isset($_POST["fname"])){
                    if (strlen($_POST["fname"])>= 2 & strlen($_POST["fname"]) <= 25 & strlen($_POST["lname"])>= 2 & strlen($_POST["lname"]) <= 25){
                        session_start();
                        $_SESSION["datas"] = [$_POST["fname"], $_POST["lname"], $_POST["email"], $_POST["address"]];
                        header("Location: SD208Exercise4-2.php");
                    }else{
                        echo "Error! First name and last name must have at least two and a maximum of 25 characters!";
                    }
                }
                ?>
            </p>
        </form>
        </div>
        
    </div>
   
</body>
</html>