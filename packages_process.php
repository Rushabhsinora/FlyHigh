<?php
include('config.php');

$quantity = $_POST['quantity'];
$pri = $_POST['price'];
$p_id= $_POST['id'];
$c_id= $_SESSION['c_id'];


	$sql="INSERT INTO `add_to_cart`(P_Id,C_Id,Quantity,Price) VALUES('$p_id','$c_id','$quantity','$pri')";
	
	if(mysqli_query($conn,$sql))
	{
		
	//echo "<script>alert('Data is gone to cart')</script>";
	echo "<script>window.location='packages.php'</script>";
	}
	else
	{
	echo "<script>alert('Data Not  inserted')</script>";
	echo "<script>window.location='packages.php'</script>";
	}
	mysqli_close($conn);
?>