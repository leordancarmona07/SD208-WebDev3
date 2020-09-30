<!DOCTYPE html>
<html>
<head>
<title>Log-in Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script> -->
<link href="style.css" rel="stylesheet" type="text/css"/>
<!-- <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet"> -->
</head>
<body>
	<div class="main-w3layouts wrapper">
		<h1>Log-in Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
					<input class="text email" type="email" name="email" placeholder="Your Email" required="">
					<input class="text" type="password" name="password" placeholder="Your Password" required="">
					<input type="submit" value="SIGNUP">
					<?php 
					if (isset($_POST["email"]))	{
						session_start();
						$_SESSION["logDatas"] = [$_POST["email"], $_POST["password"]];
						if ($_SESSION["regDatas"] != $_SESSION["logDatas"]){
							echo '<p style="color:#8B0000;"> Email or Password is not yet registered! Please sign-up first!</p>';
						}else{
							header("Location: myWeb.php");
						}
					}
					?>
				</form>
				<p>Don't have an Account? <a href="SD208Exercise2-1.php"> Sign-Up Now!</a></p>
			</div>
		</div>
		<div class="colorlibcopy-agile">
			<p>© 2020 My Biography. All rights reserved | Design by Leordan Carmona</p>
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
</body>
</html>