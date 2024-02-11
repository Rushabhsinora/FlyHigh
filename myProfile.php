<?php
	include('config.php');
	
?>
<html>
<head>
<title>My Profile</title>
<link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
<style>
*
{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	
}
.back
{
	height: 100vh;
	background-image: url("images/myprofileback.jpg");
	background-size: cover;
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
		margin-left:500px;
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
.shop
{
	text-align: center;
	color:    #ff9900	;
	font-size: 100px;
	margin-top: 200px;
	font-family:'Fjalla One', sans-serif;
	text-shadow: 0 0 10px  #000000, 0 0 10px  #000000,0 0 10px  #000000;
	letter-spacing: 10px;
}
.details
{
	background-color: black;
	padding-top: 10px;
	padding-bottom: 10px;
}
.details p
{
	color: black;
	font-family: 'Roboto Condensed';
	font-size: 20px;
	padding: 0;
	margin: 0;
	letter-spacing: 1px;
}
.details h1
{
	color: black;
	font-family: 'Roboto Condensed';
	font-size: 30px;
	letter-spacing: 2px;
	
}
.backg
{
	background-color:#ff4dff;
	background-attachment: fixed;
	margin-top: 60px;
	margin-bottom: 60px;
	margin-left: 300px;
	margin-right: 300px;
	
}
.update
{
position: relative;
display: inline-block;
padding: 15px 30px;
color: #1aff1a;
text-transform: uppercase;
text-decoration: none;
font-size: 20px;
overflow: hidden;
transition: 0.2s;
margin-top:25px;
font-family: 'Fjalla One', sans-serif;
background: #000000;
}	
.update:hover
{
	color:  #000000;
	background: #ffffff;
	box-shadow: 0 0 10px #ffffff, 0 0 40px #ffffff, 0 0 80px #ffffff;
	
}

</style>
</head>
<body>
<center>
<div class="back">
		<?php include('menu.php');?>
	<h1 class="shop">MY Profile </h1>
</div>

<?php
$c_id=$_SESSION['c_id'];
$query = "SELECT * FROM customer WHERE C_Id='$c_id' "; 
$result= mysqli_query($conn,$query);
if(mysqli_num_rows($result) == 1)
		{
			while ($row=mysqli_fetch_array($result))
			{
?>
<div class="details">
<div class="backg">
<br/> 
<h1>Name</h1> <br/><p><?php echo $row['C_Name'];?></p><br/><br/>
<h1>Email</h1><br/><p><?php echo $row['C_Email'];?></p><br/><br/>
<h1>Mobile No</h1><br/> <p><?php echo $row['C_Mobile'];?></p><br/><br/>
<h1>Age</h1> <br/><p><?php echo $row['C_Age'];?></p><br/><br/>
<h1>Gender</h1> <br/><p><?php echo $row['C_Gender'];?></p><br/><br/>
<h1>Address</h1> <br/><p><?php echo $row['C_Address'];?></p><br/><br/>
<a href="updateprofile.php" class="update">Update Your Profile</a><br/><br/>
</div>
</div>
		<?php
			}
		}

		?>



</center>
</body>
</html>
