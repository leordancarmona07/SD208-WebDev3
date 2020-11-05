<?php

            require "./connection.php";
            if (isset($_POST['submit'])){
                    if (strlen($_POST["fname"])>= 2 & strlen($_POST["fname"]) <= 25 & strlen($_POST["lname"])>= 2 & strlen($_POST["lname"]) <= 25){
                    $id = (int)$_GET['id'];
                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $add = $_POST['addrss'];
                    $email = $_POST['email'];
                    $pass = $_POST['pass'];
                    $sql = "UPDATE users SET 
                            `firstName` = '$fname',
                            `lastName` = '$lname', 
                            `address` = '$add',
                            `email` = '$email',
                            `password` = '$pass'
                            WHERE `id` = $id ;";

                    if(mysqli_query($conn, $sql)){
                        echo "
                        <script type='text/javascript'>
                            if (confirm('Record updated successfully!')){
                                location.href='../SD208Exercise7-2.php';
                            }
                        </script>";
                    }else{
                        echo "Error updating record : " . mysqli_error($conn);
                    }
                mysqli_close($conn);
                }else{
                    echo "
                    <script type='text/javascript'>
                    if (confirm('Error! First name and last name must have at least two and a maximum of 25 characters!')){
                        location.href='../SD208Exercise7-1.php';
                    }
                    </script>";
                }
            }
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
        <h1>Update Form</h1>
        <form action="" method="post">
            <p>First Name :</p>
            <input type="text" name="fname" required>
            <p>Last Name :</p>
            <input type="text" name="lname" required>
            <p>Address :</p>
            <input type="text" name="addrss" required>
            <p>Email :</p>
            <input type="email" name="email" required>
            <p>Password :</p>
            <input type="password" name="pass" required><br>
            <input type="submit" name="submit" value="Submit" id="submit">
            <p>

            </p>
        </form>
        </div>
        
    </div>
   
</body>
</html>
