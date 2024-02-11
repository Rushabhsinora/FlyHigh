<?php
include('config.php');

$rest = $_POST['reid'];
$resname = $_POST['resname'];
$foodname = $_POST['foodname'];
$quan=$_POST['quantity'];
$c_id= $_SESSION['c_id'];
$c_name=$_SESSION['name'];
$price=$_POST['pric'];
$fimage=$_POST['fimage'];



	$sql="INSERT INTO `foodcourt_cart`(Re_Id,F_Name,F_Quantity,C_Id,F_Price,F_Image,C_Name) VALUES('$rest','$foodname','$quan','$c_id','$price','$fimage','$c_name')";
	echo $sql;
	if(mysqli_query($conn,$sql))
	{
		
	header("Location: foods.php?resid=$rest & resname=$resname");
	
	//echo "<script>window.location.href='foods.php?resid=$rest & resname=$resname'</script>";
	}
	else
	{
	echo "<script>alert('Data Not  inserted')</script>";
	//echo "<script>window.location='foods.php'</script>";
	}
	mysqli_close($conn);
?>