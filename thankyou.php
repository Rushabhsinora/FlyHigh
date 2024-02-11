<html>
<head>
<title>Thank You For Ordering</title>
<link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
<style>
.nav
{
		display: inline-flex;
		position: relative;
		/*overflow: hidden;*/
		width: 52%;
		background-color: #f2f2f2;
		border-radius: 30px;
		box-shadow: 0 10px 40px rgba(150,172,177,0.8);
		margin-left:500px;
		margin-top:50px;
		height: 60px;
		margin-right: 200px;
		
		
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


</style>
</head>
<body bgcolor="#006666">
<center>
<?php include('menu.php');?>
<br/>
<br/>
<h1>THANK YOU FOR ORDERING WITH US YOU WILL GET EMAIL FOR ORDER CONFIRMATION.....</h1>


</center>



</body>
</html>

