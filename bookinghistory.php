<?php
	include('config.php');
	
?>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
<title>Booking History</title>
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
	background-image: url("images/bookingback.jpg");
	background-size: cover;
}
.nav
{
		display: inline-flex;
		position: relative;
		/*overflow: hidden;*/
		width: 50%;
		background-color: #f2f2f2;
		border-radius: 30px;
		box-shadow: 0 10px 40px rgba(150,172,177,0.8);
		margin-left:450px;
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
.book
{
	text-align: center;
	color:    #99e600;
	font-size: 100px;
	margin-top: 200px;
	font-family:'Fjalla One', sans-serif;
	text-shadow: 0 0 10px  #000000, 0 0 10px  #000000,0 0 10px  #000000;
	letter-spacing: 3px;
}
.booking
{
height: 300px;
width: 100%;
padding: 10px;
text-align: center;	
	
}
.booking th
{
font-size: 25px;
font-family:'Rubik', sans-serif;
letter-spacing: 2px;
font-weight: lighter;
color: #000000;
background-color: #00cc00;
}
.booking td
{
font-size: 20px;
font-family:'Rubik', sans-serif;
letter-spacing: 2px;
font-weight: lighter;
color: #ffffff;	
background-color: #000000;
}
</style>
</head>
<body>
<center>
<div class="back">
		<?php include('menu.php');?>
	<h1 class="book">MY Booking </h1>
</div>
<?php
$c_id=$_SESSION['c_id'];
$query = "SELECT * FROM booking_details WHERE C_Id='$c_id'"; 
$result= mysqli_query($conn,$query);
if(mysqli_num_rows($result) > 0)
		{
			while ($row=mysqli_fetch_array($result))
			{
?>
<table border="1" cellspacing="0" class="booking">
<tr>
	<th>Product Name</th>
	<th>Quantity</th>
	<th>Price</th>
</tr>
<tr>
<td colspan="3">Order ID:<?php echo $row['B_Id'];?></td>

</tr>	
<?php
				$b_id=$row['B_Id'];
				$query1 = "SELECT * FROM order_details Natural join packages_details WHERE B_Id='$b_id'"; 
				$result1= mysqli_query($conn,$query1);
				if(mysqli_num_rows($result1) > 0)
					{
						while ($row1=mysqli_fetch_array($result1))
							{
?>								<tr>

								<td><?php echo $row1['P_Name'];?></td>
								<td><?php echo $row1['Quantity'];?></td>
								<td><?php echo $row1['p_price'];?> Rs</td>
								</tr>
<?php
							}
					}

?>	
	<tr>
	<td colspan="3">Total Price : <?php echo $row['Price'];?> Rs</td>
	
	</tr>
	

<?php
			}
		}

	else
	{

		echo "<h1 style=\"color: #ff00ff;font-family:'Rubik', sans-serif;padding-bottom: 60px;padding-top: 60px;background-color: black;font-size: 40px;\">You Haven't Book Tickets Do Book Now!!</h1> ";	
	} 
?>
</table>
<center>
</body>
</html>

