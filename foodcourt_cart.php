<?php
	include('config.php');
	if(isset($_GET['delete'])){
		$delete=$_GET['delete'];
		$sql="DELETE FROM foodcourt_cart WHERE Fc_id='$delete'";

	if(!mysqli_query($conn,$sql))
	{
		
	echo "<script>alert('Date Not Deleted')</script>";
		//echo "<script>window.location='Userlogin.html'</script>";
	}
	else
	{
	//echo "<script>alert('Data deleteted')</script>";
	echo "<script>window.location='foodcourt_cart.php'</script>";
	}
	
	}
	
	
	
	
?>
<html>
<head>
<title>Foodcart</title>
<link rel="stylesheet" href="css/foodcourt_cart.css">
<link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
</head>
<body>
<div class="back">
		<?php include('menu.php');?>
		<h1 class="shop">MY FOODS</h1>
</div>
<div class="items"><br/>
<h2 style="margin-bottom:20px;text-align: center;font-size:40px;font-family:'Fjalla One', sans-serif;letter-spacing:2px;color: white;">My Foods</h2>
<?php
$cid=$_SESSION['c_id'];

$sum=0;
$query="SELECT * FROM foodcourt_cart NATURAL JOIN restaurants_details";
$result= mysqli_query($conn,$query);
if(mysqli_num_rows($result) > 0)
		{
			
			while ($row=mysqli_fetch_array($result))
			{
				

?>
<div class="itms">

			<img src="admin/<?php echo $row['F_Image'];?>" height="150" width="150" style="border: solid 4px black; border-radius: 10px;margin-top: 10px;margin-left: 10px;" > <br/>
			<div class="details">
					
					<h2 class="rname"><?php echo $row['Re_Name'];?></h2><br/>
					<h2 class="fname"><?php echo $row['F_Name'];?></h2><br/>
					<h2 class="quan">Quantity: <?php echo $row['F_Quantity'];?></h2><br/>
					<h2 class="pri">Price: <?php echo $row['F_Price'];?> Rs</h2><br/>
					<p><a href="foodcourt_cart.php?delete=<?php echo $row['Fc_Id'];?>" class="rem">Remove</a></p>
			</div>
		
		<br/>
</div>


<?php
		$foodname=$row['F_Name'];
		$sum+=$row['F_Price']*$row['F_Quantity'];
		$re_id= $row['Re_Id'];
			}
		}
	else
	{
		
	?>
	<h1 style="margin-bottom:20px;text-align: center;font-size:30px;font-family:'Fjalla One', sans-serif;letter-spacing:2px; color: white;"> You Haven't Selected Any Items!!!</h1>
	<?php
	}
	?>
</div>
<?php
$c_id=$_SESSION['c_id'];
$query1 = "SELECT * FROM foodcourt_cart where C_Id='$c_id'"; 
$result= mysqli_query($conn,$query);
if(mysqli_num_rows($result) > 0)
		{
?>

<div class="checkout">
	<h1 class="tot"> Order Summary</h1>
	<h3 class="amount">Final Amount</h3>
	<p class="pro"><?php  echo $sum;?> Rs</p> 
	 <br>
	 <form method="POST" action="doneorder.php">
	 <input type="submit" name="submit" value="order Now" class="butt"/>
	 <input type="hidden" name="total" value="<?php  echo $sum;?>"/> 
	 <input type="hidden" name="r_id" value="<?php echo $re_id;?>"/> 
	 </form>
</div>

<?php

}
?>







</body>
</html>
