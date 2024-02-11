<?php
include('config.php');
$cid=$_GET['cid'];
$rname=$_GET['rname'];


$rsid=$_SESSION['frid'];

$sql="UPDATE foodbooking_details SET F_Status='3' WHERE C_Id='$cid' and Re_Id='$rsid'";

$sql1="SELECT * FROM customer WHERE C_Id='$cid'";
$result1=mysqli_query($conn,$sql1);
while ($row1=mysqli_fetch_array($result1))
{
	$email=$row1['C_Email'];
}


if(mysqli_query($conn,$sql))
	{ 
				$from='flyhighamusementpark@gmail.com';
				$subject='Order Ready';
				$to = $email;
				$message='Your Order is ready from  '.$rname.'  Please pickup it fast' ;
			if (mail($to,$subject,$message))
				{	
					echo "<script>alert('Status is 3 now')</script>";
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

