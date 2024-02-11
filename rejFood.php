<?php
include('config.php');
$cid=$_GET['cid'];

 
$sql="UPDATE foodbooking_details SET F_Status='2' WHERE C_Id='$cid'";

$sql1="SELECT * FROM customer WHERE C_Id='$cid'";
$result1=mysqli_query($conn,$sql1);
while ($row1=mysqli_fetch_array($result1))
{
	$email=$row1['C_Email'];
}


if(mysqli_query($conn,$sql))
	{ 
				$from='flyhighamusementpark@gmail.com';
				$subject='Order Rejected';
				$to = $email;
				$message='Your Order has not been accept because of some reasons please try it again after some times' ;
			if (mail($to,$subject,$message))
				{	
					echo "<script>alert('Status is 2 now')</script>";
					header("location:foodcourtmain.php");
				}
				else 
				{
					echo "<script>alert('Email Not Sent ')</script>";
					//header("location:foodcourtmain.php");
				}
				
		
	}
	else

	{
	echo"email is wrong";
	}


?>

