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
        input{
            background-color: palevioletred;
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
            <table style='width:100%'>
                        <tr>
                            <th>ID</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Address</th>
                            <th>Email</>
                        </tr>
                <?php
                
                require "./handler/connection.php";

                $sql = "SELECT `id`, `firstName`, `lastName`, `address`, `email` FROM users";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result)> 0 ){
                    while($row = mysqli_fetch_assoc($result)){
                        echo "
                        <tr>
                            <td>".$row['id']."</td>
                            <td>".$row['firstName']."</td>
                            <td>".$row['lastName']."</td>
                            <td>".$row['address']."</td>
                            <td>".$row['email']."</td>
                            <td><a href='./handler/update.php?id=".$row['id']."'><input class='myclass' type='button' value='Update'/></a></td>
                            <td><a href='./handler/delete.php?id=".$row['id']."'><input class='myclass' type='button' value='Delete'/></a></td>
                        </tr>";
                    }
                }else{
                    echo"
                    <script type='text/javascript'>
                    if (confirm('Zero Result! Database is Empty! Please click [OK] to add datas!')){
                         location.href='./SD208Exercise7-1.php';
                    }
                    </script>";
                }
                mysqli_close($conn);
                    
                ?>
                </table>
                <br>
                <hr>
                <a href="SD208Exercise7-1.php"><input type="button" value="Add Another User"></a>
                
        </div>
    </div>
    
</body>
</html>