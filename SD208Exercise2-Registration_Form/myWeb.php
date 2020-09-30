<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>My Biography</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script> -->
<link href="style.css" rel="stylesheet" type="text/css"/>
<!-- <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet"> -->
<style>
    .main-agileinfo{
        width: 80%;
        
    }
    img{
        
        border: 2px solid black;
        width: 15%;
        height: 200px;
        margin: 0 auto;
        border-radius: 50%;
    }
    .myProfile, h2{
        text-align: center;
    }
    .personalInfo{
        float: left;
        width: 50%;
        border-right: 2px solid black;
    }
    .otherInfo{
        padding: 2px;
        margin-left: 50%;
        
    }
    
</style>
</head>
<body>
	<div class="main-w3layouts wrapper">
        <div class="myProfile">
            <img src="img/myProfile.jpg" alt=""><br>
            <h1><?php echo $_SESSION["user"][0]." ".$_SESSION["user"][1]; ?></h1>
        </div>
        <div class="main-agileinfo">
            <div class= "personalInfo">
                <h2>Personal Information</h2>
                <p>Age: <strong>21 years old</strong></p>
                <p>Email: <strong><?php echo $_SESSION["regDatas"][0] ?></strong></p>
                <p>Home Address: <strong><?php echo $_SESSION["user"][2] ?></strong></p>
                <h2>Family Background</h2>
                <p>Father: <strong>Danilo Revira Carmona</strong></p>
                <p>Mother: <strong>Leonora Orapa Carmona</strong></b></p>
                <p>Siblings:
                <strong>Genilyn Carmona,
                    Loren Carmona,
                    Leo Orapa,
                    Dante Carmona,
                    Dandy Carmona</strong>
                </p>
            </div>
            <div class= "otherInfo">
            <h2>Education Background</h2>
                <p>Elementary: <strong>Lubang Elementary School, Lubang, Buenavista, Bohol</strong> </p>
                <p>Junior High School: <strong>Pilar Technical Vocational High School,Poblacion, Pilar, Bohol</strong></p>
                <p>Senior High School: <strong>Danao National High School, Poblacion, Danao, Bohol</strong></p>
                <p>College: <strong>University of San Carlos , Talamban, Cebu City</strong></p>
                <p>Course: <strong>Certificate in Computer Technology (CCT)</strong></p>
            <h2>Motto in Life</h2>
            <p><strong>"Whatever your thoughts are shaped your future."</strong></p>
            </div>
        </div>
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
        </ul>
    </div>
    <div class="colorlibcopy-agile">
			<p>© 2020 My Biography. All rights reserved | Design by Leordan Carmona</p>
		</div>
</body>
</html>