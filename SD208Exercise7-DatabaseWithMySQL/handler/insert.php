<?php

require "./connection.php";

    if (isset($_POST["fname"])){
        if (strlen($_POST["fname"])>= 2 & strlen($_POST["fname"]) <= 25 & strlen($_POST["lname"])>= 2 & strlen($_POST["lname"]) <= 25){
            $sql = "INSERT INTO `users`(`firstName`, `lastName`, `address`, `email`, `password`)
            VALUES('".$_POST['fname']."', '".$_POST['lname']."', '".$_POST['addrss']."', '".$_POST['email']."', '".$_POST['pass']."')";
            if(mysqli_query($conn, $sql)){
                echo "
                <script type='text/javascript'>
                      if (confirm('New record created successfully!')){
                           location.href='../SD208Exercise7-2.php';
                      }
                </script>";
            }else{
                echo "Error : " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
            // header("Location: ../SD208Exercise7-2.php");
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
