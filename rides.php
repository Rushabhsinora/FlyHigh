<?php
	include('config.php');
	
?>
<!DOCTYPE html>
<head>
<title>Rides</title>
<link rel="stylesheet" href="css/rides.css">
<link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Galada&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">

</head>
<body>
	<div class="back">
	<?php include('menu.php');?>
	 
	<video autoplay loop class="video-background" muted plays-inline>
		<source src="amusement3.mp4" type="video/mp4"/>
	</video>
	<h1 class="pack_text">RIDES..</h1>
	</div>
	


<div class="bb">
	<h1 class="thrill">Thrilling Rides</h1>

 
<ul class="slider">
<?php
$query = "SELECT * FROM rides_details WHERE S_Id='1'"; 
$result= mysqli_query($conn,$query);
if(mysqli_num_rows($result) > 0)
		{
			while ($row=mysqli_fetch_array($result))
			{
				
?>
		<li class="" style="background-image: url('admin/<?php echo $row['R_Image'];?>');">
			<h6>
				<h1><?php echo $row['R_Name'];?></h1>
				<p>
					<?php echo $row['R_Details'];?>
				</p>
				
			
			</h6>
	
		</li>
		
<?php 
			}
		}
		
?>
	  
</ul>

	<h1 class="thrill">Shows</h1>

<ul class="slider">
<?php
$query = "SELECT * FROM rides_details WHERE S_Id='2'"; 
$result= mysqli_query($conn,$query);
if(mysqli_num_rows($result) > 0)
		{
			while ($row=mysqli_fetch_array($result))
			{
				
?>
		<li class="" style="background-image: url('admin/<?php echo $row['R_Image'];?>');">
			<h6>
				<h1><?php echo $row['R_Name'];?></h1>
				<p>
					<?php echo $row['R_Details'];?>
				</p>
				
			</h6>
	
		</li>
		
<?php 
			}
		}
		
?>
</ul>

<h1 class="thrill">Kides Rides</h1>

<ul class="slider">
<?php
$query = "SELECT * FROM rides_details WHERE S_Id='3'"; 
$result= mysqli_query($conn,$query);
if(mysqli_num_rows($result) > 0)
		{
			while ($row=mysqli_fetch_array($result))
			{
				
?>
		<li class="" style="background-image: url('admin/<?php echo $row['R_Image'];?>');">
			<h6>
				<h1><?php echo $row['R_Name'];?></h1>
				<p>
					<?php echo $row['R_Details'];?>
				</p>
				
			
			</h6>
	
		</li>
		
<?php 
			}
		}
		
?>
	</ul>
</div>	

<?php include('footer.php');?>

</body>
</html>