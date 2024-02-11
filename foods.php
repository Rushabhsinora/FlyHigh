<?php
	include('config.php');
	
?>
<html>
<head>
<title>Food items</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/foods.css">
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
		<source src="amusement6.mp4" type="video/mp4"/>
	</video>
<?php include('menu.php');?>
<a href="foodcourt_cart.php"><img src="images/bag1.png" style="height: 50px; width: 50px;  float:right; margin-right:30px;  margin-top:-50px;"/></a>
<h1 class="pack_text">	FOODS..</h1>
</div>
<?php

$rid=$_GET['resid'];
$resname=$_GET['resname'];
$query = "SELECT * FROM fooditems WHERE Re_Id='$rid'"; 
$result= mysqli_query($conn,$query);
if(mysqli_num_rows($result) > 0)
		{
			

?>

	<div class="container">
	<h1 class="res"><?php echo $resname ?></h1>
		<div class="row">
			<?php
				while ($row=mysqli_fetch_array($result))
					{
			?>
				
			
			<div class="col-md-3">
			
				<form method="POST" action="food_process.php">
					<div class="product-grid">
						<div class="product-image">
							
								<img src="admin/<?php echo $row['F_Image'];?>" alt=""/>
								
										<h3 class="title">
								<?php echo $row['F_Name'];?>
								</h3>
							
								<div class="price"> <?php echo $row['F_Price'];?>Rs </div>
							
						</div>
						<div class="product-content">
						
							<div class="product-button-group">
							
						
							
							<input type="submit" name="Buy Now" value="Add to Cart" class="add-to-cart">
							
							
							</div>
							
							
							<div class="box">
								<input type="number" name="quantity" class="form-control"  min="1" max="5"/>
							</div>
						</div>
						<input type="hidden" name="resname" value="<?php echo $resname;?>">
						<input type="hidden" name="reid" value="<?php echo $row['Re_Id'];?>">
						<input type="hidden" name="fimage" value="<?php echo $row['F_Image'];?>">
						<input type="hidden" name="foodname" value="<?php echo $row['F_Name'];?>">
						<input type="hidden" name="pric" value="<?php echo $row['F_Price'];?>">
						
					</div>
					</form>
				</div>
				
			
				<?php
					}
				?>
				
			
		</div>
	</div>
	<?php
		}
	?>
	

</body>
</html>
