<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration-db";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Connection failed : " . mysqli_connect_error());

}
// echo"<script type='text/javascript'>(alert('Connected Successfully!'))</script>"
?>