<?php
include('config.php');

	if(isset($_GET['delete'])){
		$delete=$_GET['delete'];
		$sql="DELETE FROM add_to_cart WHERE ca_id='$delete'";

	if(!mysqli_query($conn,$sql))
	{
		
	echo "<script>alert('Date Not Deleted')</script>";
		//echo "<script>window.location='Userlogin.html'</script>";
	}
	else
	{
	//echo "<script>alert('Data deleteted')</script>";
	echo "<script>window.location='cart.php'</script>";
	}
	
	}
	

?>
<!DOCTYPE html>
<head>
<title>Cart</title>
<link rel="stylesheet" href="css/cart.css">
<link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
</head>
<body>
<div class="back">
		<?php include('menu.php');?>
		<h1 class="shop">MY BAG </h1>
</div>
<div class="items"> <br/>
	<h2 style="margin-bottom:20px;text-align: center;font-size:40px;font-family:'Fjalla One', sans-serif;letter-spacing:2px;">My Items</h2>
<?php
$per=0;
$sum=0;
$query = "SELECT * FROM add_to_cart  INNER JOIN packages_details ON packages_details.P_Id=add_to_cart.P_Id"; 
$result= mysqli_query($conn,$query);
if(mysqli_num_rows($result) > 0)
		{
			
			while ($row=mysqli_fetch_array($result))
			{
				
				
?>
	
	<div class="itms">
		<img src="admin/<?php echo $row['P_Image'];?>" height="150" width="150" style="border: solid 4px black; border-radius: 10px;margin-top: 10px;margin-left: 10px;" > <br/>
		<div class="details">
			<h1 class="name"><?php echo $row['P_Name'];?></h1><br/>
			<p class="quan">Quantity : <?php echo $row['Quantity'];?></p>
			<h3 class="pre"> <?php echo $row['Price'];?> Rs</h3><br/>
			<p><a href="cart.php?delete=<?php echo $row['Ca_Id'];?>" class="rem">Remove</a></p>
		</div>
	</div>

<?php
			$sum+=$row['Price']*$row['Quantity'];
			$per+=$row['Quantity'];
			}
			
			
		}
		else
		{
				
		?>
		<h1 style="margin-bottom:20px;text-align: center;font-size:30px;font-family:'Fjalla One', sans-serif;letter-spacing:2px;"> You Haven't Selected Any Items!!!</h1>
		
<?php
		}
		?>
		
</div>
<div class="checkout">
	<h1 class="tot"> Order Summary</h1>
	<h3 class="amount">Final Amount</h3>
	<p class="pro"><?php  echo $sum;?> Rs</p>
	

</div>
<?php 
$c_id=$_SESSION['c_id'];
$query1 = "SELECT * FROM add_to_cart where C_Id='$c_id'"; 
$result= mysqli_query($conn,$query);
if(mysqli_num_rows($result) > 0)
		{
			
			
?>
<div class="take">
	<h1 class="need">Need Some Details??</h1>
	<form class="deta" method="POST" action="payment_gateway/pay.php" onsubmit="return validateForm()" name="f">
 </br>
		Write Date Of Booking: &nbsp &nbsp <input type="date"  name="bdate" id="datee" required style="text-align: center"/>
		
		<br/><br/>
		Need Any Stollers or chairs? &nbsp
			<input type="radio" name="fr" value="yes"/>Yes
			<input type="radio" name="fr" value="no"/>No
 		<input type="hidden" name="total" value="<?php  echo $sum;?>"/>
		<input type="hidden" name="per" value="<?php  echo $per;?>"/>
		
		<input type="submit" name="check" value="Check Out And Proceed" class="butt" style="color: black;"/>
		

	</form>
</div>
<?php

}
?>
<script>
function validateForm() 
{
	
	var option=document.getElementsByName('fr');

	if (!(option[0].checked || option[1].checked)) 
	{
    alert("Please Select That you need stollers/chairs or not ");
    return false;
	}
	 
}
</script>



</body>
</html>
