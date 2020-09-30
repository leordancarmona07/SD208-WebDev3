<?php 

?>
<!DOCTYPE html>
<html>
<head>
<title>Registration Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css"/>




</head>
<body>

	<div class="main-w3layouts wrapper">
		<h1>Registration Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
                    <input class="text" type="text" name="fname" placeholder="Your First Name!" required="">
                    <input class="text" type="text" name="lname" placeholder="Your Last Name!" required="">
					<input class="text" type="text" name="address" placeholder="Your Address!" required="">
					<input class="text email" type="email" name="email" placeholder="Your Email" required="">
					<input class="text email" type="email" name="c-email" placeholder="Confirm Your Email" required="">
					<input class="text" type="password" name="password" placeholder="Your Password" required="">
					<input class="text w3lpass" type="password" name="c-password" placeholder="Confirm Your Password" required="">
					<?php
					if (isset($_POST["fname"])){
						session_start();
						$_SESSION["user"] = [$_POST["fname"], $_POST["lname"], $_POST["address"]];
						$_SESSION["regDatas"] = [$_POST["email"],$_POST["password"]];
						if($_POST["email"] != $_POST["c-email"] || $_POST["password"] != $_POST["c-password"]){
							echo '<p style="color:#8B0000;"> Email and Password are not yet set! Please be careful!</p>';
						}else{
							header("Location: SD208Exercise2-2.php");
						}
					}
						?>
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" value="SIGNUP">
				</form>
				<p>Already have an Account? <a href="SD208Exercise2-2.php"> Login Now!</a></p>
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