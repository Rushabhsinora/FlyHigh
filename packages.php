<?php
	include('config.php');
	
?>

<!DOCTYPE html>
<head>
<title>Packages</title>
<link rel="stylesheet" href="css/packages.css">
<link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
<link href="css/jquery.nice-number.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="javascript/jquery.nice-number.js"></script>
<script type="text/javascript">
	$(function(){

  $('input[type="number"]').niceNumber();

});

</script>
</head>

<body>
<div class="back">
<video autoplay loop class="video-background" muted plays-inline>
		<source src="amusement4.mp4" type="video/mp4"/>
	</video>
	
<?php include('menu.php');?>

<a href="cart.php"><img src="images/bag1.png" style="height: 50px; width: 50px;  float:right; margin-right:20px;  margin-top:-50px;"/></a>
<h1 class="pack_text">PACKAGES..</h1>
</div>
<?php
$query = "SELECT * FROM packages_details ORDER BY P_Id ASC"; 
$result= mysqli_query($conn,$query);
if(mysqli_num_rows($result) > 0)
		{
			while ($row=mysqli_fetch_array($result))
			{
				$pdetails = $row['P_Details'];
				$split=explode('.',$pdetails);
				//echo $split[0].".<br>".$split[1].".";
?>
<div class="pack1">
 <form method="POST" action="packages_process.php">
	<div class="ff">
	
			<div class="pack1_image">
				<img class="image" src="admin/<?php echo $row['P_Image'];?>"  alt="">
			</div>
	
			<div class="detail">
				<h1 class="p_name" name="name"> <?php echo $row['P_Name'];?></h1><br/>	
				
				<p name="details" class="p_details"><?php echo $split[0].".<br>".$split[1].".";?><p><br/><br/>
				
				<div class="box">
				<input type="number" name="quantity" min="1" max="5" class="form-control" value="1"/>
				</div>
				
				<input type="hidden" name="id" value="<?php echo $row['P_Id'];?>"/>
				<input type="hidden" name="price" value="<?php echo $row['P_Price'];?>"/>
				
			</div>
			<div class="price">
				<p class="prize">Per Person  : <?php echo $row['P_Price'];?>Rs &nbsp Inc All Taxes</p>
				
				<br/>
				<?php
				if(isset($_SESSION['c_id']))
				{
				?>
				<input type="submit" name="add_to_cart"  value="Add To Bag" class="bag"/>
				<?php
				}
				else
				{
				?>
				<a href="Userlogin.php" class="ba">Add To Bag</a>
				<?php
				}
				?>
				
			</div>
			
	
	</div>
 </form>
</div>

<?php


			}

		}
?>

	
</body>
</html>

