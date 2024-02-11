<html>
<head>
<title>Forget Password</title>
<link rel="stylesheet" href="css/forgotpassword.css">
<link href="https://fonts.googleapis.com/css?family=Signika&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Signika&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
</head>
<body>
<div class="menu">
	<?php include('menu.php');?>
<div/>
<form method="post" action="forgotpassword_process.php">
		<div class="forgot">
			<center> <h1 class="pass">Forgot Password</h1></center>
			<h3 class="enter">Enter Your Email </h3> <input type="email" name="email" class="Email" />
			<br/><br/>
			<input type="submit" name="submit" class="submit"/>
		</div>
		<div class="intro">
                <p>&copy; User login Form. All Rights Reserved</p>
         </div>
</form>


</body>
</html>