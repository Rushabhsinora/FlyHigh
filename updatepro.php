<?php
include('config.php');
$name = $_POST['fname'];
$email= $_POST['email'];
$mobile = $_POST['num'];
$age = $_POST['age1'];
$gen = $_POST['gen'];
$address = $_POST['address'];
$c_id=$_SESSION['c_id'];
$sql="UPDATE customer SET C_Name='$name',C_Email='$email',C_Mobile='$mobile',C_Age='$age',C_Gender='$gen',C_Address='$address' WHERE C_Id='$c_id'";
if(!mysqli_query($conn,$sql))
	{
		
	echo "<script>alert('Not Upadated')</script>";
		//echo "<script>window.location='Userlogin.html'</script>";
	}
	else
	{
	echo "<script>alert('Updated')</script>";
	echo "<script>window.location='myprofile.php'</script>";
	}
	mysqli_close($conn);
?>