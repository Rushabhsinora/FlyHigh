<?php
include('config.php');
$name = $_POST['fname'];
$email= $_POST['email'];
$pass = $_POST['pass'];
$mobile = $_POST['num'];
$age1 = $_POST['yearsold'];
$gen = $_POST['gender'];
$address = $_POST['address'];


if(isset($_POST['login']))
{
	
	$sql="INSERT INTO customer(C_Name,C_Email,C_Password,C_Mobile,C_Age,C_Gender,C_Address) 
	VALUES('$name','$email','$pass','$mobile','$age1','$gen','$address')";
	
	if(!mysqli_query($conn,$sql))
	{
		
	echo "<script>alert('This Email Id Already Exsist')</script>";
	echo "<script>window.location='regis.php'</script>";
	}
	else
	{
	echo "<script>alert('You Have Been Regsitered Now')</script>";
	echo "<script>window.location='Userlogin.php'</script>";
	}
	mysqli_close($conn);
}









?>