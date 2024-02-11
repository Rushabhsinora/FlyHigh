<?php
include('config.php');
$cid=$_GET['cid'];
$otp=rand(10,10000);
 
 
$rsid=$_SESSION['frid'];

$sql="UPDATE foodbooking_details SET F_Status='1',Otp='$otp' WHERE C_Id='$cid' and Re_Id='$rsid' ";

$sql1="SELECT * FROM customer WHERE C_Id='$cid'";
$result1=mysqli_query($conn,$sql1);
while ($row1=mysqli_fetch_array($result1))
{
	$email=$row1['C_Email'];
}


if(mysqli_query($conn,$sql))
	{ 
				$from='flyhighamusementpark@gmail.com';
				$subject='Order Accepted';
				$to = $email;
				$message='Your Order has been accepted And Your Otp Is'.$otp ;
			if (mail($to,$subject,$message))
				{	
					echo "<script>alert('Status is 1 now')</script>";
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
