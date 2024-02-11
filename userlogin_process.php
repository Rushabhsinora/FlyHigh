<?php
	include('config.php');
	$Email=$_POST['email'];
	$Password=$_POST['password'];
	$sql="SELECT * FROM customer WHERE  C_Email='$Email' and C_Password='$Password'";
	
	
$result=mysqli_query($conn,$sql);
		
		if(mysqli_num_rows($result) == 1)
		{
			while ($row=mysqli_fetch_array($result))
			{
			$_SESSION['email']=$row['C_Email'];
			$_SESSION['name']=$row['C_Name'];
			$_SESSION['mobile']=$row['C_Mobile'];
			$_SESSION['age']=$row['C_Age'];
			$_SESSION['gender']=$row['C_Gender'];
			$_SESSION['c_id']=$row['C_Id'];
			
		
			//$_SESSION['email']=$Email;
			header("location:index.php?You Successfully Login...".$msg);
			
			}
		}
		else
		{
			echo "<script>alert('InValid Email Id Or Password ')</script>";
			echo "<script>window.location='Userlogin.php'</script>";
			
		}
	
	
	
	
?>