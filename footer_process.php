<?php
include('config.php');
$name=$_POST['full-name'];
$email=$_POST['email'];
$message=$_POST['message'];

	$sql="INSERT INTO feedback_details(Fd_Message,C_Email,Fdc_Name) VALUES('$message','$email','$name')";
	
	if(mysqli_query($conn,$sql))
	{
	echo "<script>alert('Thanks for Us Giving Feedback')</script>";
	echo "<script>window.location='index.php'</script>";
	
	}
	else
	{
	echo "<script>alert('Please Fill Up All Fields')</script>";
	
	}
	mysqli_close($conn)


?>