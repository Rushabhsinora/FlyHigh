<?php
	include('config.php');
	
?>



<html>
<head>
<title>Restaurent's menu</title>
<link rel="stylesheet" href="css/restaurentmenu.css">
<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
</head>
<body background="images/bg3.jpg" style="background-size: cover;background-attachment: fixed;height: 84vh;">
<?php include('menu.php');?>
<h1 class="menuc"><center>Menu Cards</center></h1>
	<div class="container">
	
		<?php
			$query = "SELECT * FROM restaurants_details ORDER BY Re_Id ASC"; 
			$result= mysqli_query($conn,$query);
			if(mysqli_num_rows($result) > 0)
			{
				while ($row=mysqli_fetch_array($result))
				{
				$foodcategories = $row['F_Cat'];
				$split=explode('.',$foodcategories);
				//echo $split[0].".<br>".$split[1].".";
		?>
	
	
	
		<div class="card">
			<div class="imgBox">
				<img src="admin/<?php echo $row['F_Img'];?>">
				<h1 class="name"> <?php echo $row['Re_Name'];?></h1>
			</div>
			<div class="details">
				<h2>Favourites Items</h2>
				<p>
				<ul>
					<li><?php echo $split[0].".<br/><br/>"?></li>
					<li><?php echo $split[1].".<br/><br/>";?></li>
					<li><?php echo $split[2].".<br/><br/>";?></li>
					<li><?php echo $split[3].".<br/><br/>";?></li>
					<li><?php echo $split[4].".<br/><br/>";?></li>
					
				</ul>
				</p>
				
				<form method="GET" action="foods.php">
				<input type="hidden" value="<?php echo $row['Re_Name'];?>" name="resname"/>
				<input type="hidden" value="<?php echo $row['Re_Id'];?>" name="resid"/>
				<?php
				if(isset($_SESSION['c_id']))
				{
				
				?>
				<input type="submit" value="Buy Now"/>
				<?php
					
				}
				
				?>
				</form>
			</div>
		</div>
		
		<?php
				}
			}
		?>
		
		
		
		
		
		
	</div>
</body>
</html>