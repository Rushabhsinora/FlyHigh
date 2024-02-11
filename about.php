<?php
include('config.php');
?>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">

<title>About us</title>
<style>
*
{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family:  'Open Sans',sans-serif;
}
body
{
	
	 
    background: url('images/aboutback.jpg');
    background-size: cover;
    background-attachment: fixed;
	height:auto;
	align-items: center;
	
}
.square
{
	
	width: 400px;
	height: 400px;
	display: block;
	justify-content: center;
	align-items: center;
	margin-top: 40px;
	margin-left: 450px;
}
.square span:nth-child(1)
{
	position: absolute;
	top: 10;
	left: 0;
	width: 90%;
	height: 90%;
	border: 2px solid #fff;
	border-radius: 38% 62% 63% 37% / 41% 44% 56% 59%;
	transition: 0.5s;
	animation: animate 6s linear infinite;
	margin-top: 300px;
	margin-left: 100px;
}
.square:hover span:nth-child(1)
{
	border: none;
	background: rgba(0,0,255,0.8);
}
.square span:nth-child(2)
{
	position: absolute;
	top: 10;
	left: 0;
	width: 90%;
	height: 90%;
	border: 2px solid #fff;
	border-radius: 38% 62% 63% 37% / 41% 44% 56% 59%;
	transition: 0.5s;
	animation: animate 4s linear infinite;
	margin-top: 300px;
	margin-left: 100px;
}
.square:hover span:nth-child(3)
{
	border: none;
	background: rgba(0,0,255,0.8);
}

.square span:nth-child(3)
{
	position: absolute;
	top: 10;
	left: 0;
	width: 90%;
	height: 90%;
	border: 2px solid #fff;
	border-radius: 38% 62% 63% 37% / 41% 44% 56% 59%;
	transition: 0.5s;
	animation: animate2 10s linear infinite;
	margin-top: 300px;
	margin-left: 100px;
}
.square:hover span:nth-child(2)
{
	border: none;
	background: rgba(0,0,255,0.8);
}
@keyframes animate
{
	0%
	{
		transform: rotate(0deg);
	}
	100%
	{
		transform: rotate(360deg);
	}
}
@keyframes animate2
{
	0%
	{
		transform: rotate(360deg);
	}
	100%
	{
		transform: rotate(0deg);
	}
}
.content
{
	position: relative;
	padding: 40px 60px;	
	color: #fff;
	text-align: center;
	transition: 0.5s;
	z-index: 1000;
	
}
.nav
{
		display: inline-flex;
		position: relative;
		/*overflow: hidden;*/
		width: 52%;
		background-color: #f2f2f2;
		border-radius: 30px;
		box-shadow: 0 10px 40px rgba(150,172,177,0.8);
		margin-left:360px;
		margin-top:50px;
		height: 60px;
		margin-right: 220px;

		
}
.nav-item
{
	color:  #262626;
	padding: 20px;
	text-decoration: none;
	transition: 0.3s;
	margin: 0 7px;
	z-index: 1;
	font-family: 'Fjalla One', sans-serif;
	font-weight: 500;
	position: relative;
	
	
}
.nav-item:before
{
	content: "";
	position: absolute;
	bottom: -7px;
	left: 0;
	width: 100px;
	height: 5px;
	background-color: #000000;
	border-radius: 1px 1px 0 0 ;
	opacity: 0;
	transition: 0.3s;
}
.nav-item:not(.is-active):hover:before
{
	opacity:1;
	bottom: 0;
}
.nav-item:not(.is-active):hover
{
	color: #1aff1a;
	
}
.nav-indicator
{
	position: absolute;
	left: 0;
	bottom: 0;
	height: 4px;
	transition: 0.4s;
	height: 5px;
	z-index: 1;
	border-radius: 8px 8px 0 0;
	
}
.content h1
{
	font-family: 'Fjalla One', sans-serif;
	letter-spacing: 2px;
	font-weight: lighter;
	font-size: 50px;
}
.content p
{
	font-family:'Rubik', sans-serif;
	letter-spacing: 1px;
	font-weight: bold;
	font-size: 20px;
	width: 300px;
	text-align: center;
	padding-top: 10px;
}



</style>


</head>
<body>
<div>
<?php include('menu.php');

?>
</div>
<div class="square">
	<span></span>
	<span></span>
	<span></span>
	<div class="content">
		<h1>Why Us?</h1>
		<p>
		 We provide best for customers in the matter of environment.
		 We also take care of customer's protection inside the amusement park.
		 We provide best day for a family to enjoy.
		</p>
	</div>
	<div class="content">
		<h1>Our Rides</h1>
		<p>
		Inside the amusemment park the rides and shows are totally unique.
		Which you have'nt seen in any other amusement park.
		Our rides are full of thrill and enjoyment.
		</p>	
	</div>
	<div class="content">
		<h1>Our System</h1>
		<p>
		Our systems is fully advance.
		Our system function fast with faster responsiveness.
		Faster upgradation better enhancements.
		</p>
	</div>
	<div class="content">
		<h1>We Provide</h1>
		<p>
		Better restaurents.
		Cheapest Tickets.
		Full Security.
		Any time help.
		[All On Phone]
		</p>
	</div>
	



</div>


</body>

</html>