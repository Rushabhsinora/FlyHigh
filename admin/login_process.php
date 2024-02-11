<?php
include('connect_to_database.php');
session_start();
$email=$_POST['Email'];
$pass=$_POST['Password'];
//echo $email;
//echo $pass;
$sql="SELECT * FROM admin where A_Email='$email' and A_Password='$pass'";
//echo $sql;
	$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)==1)
		{
			while ($row=mysqli_fetch_array($result))
			{
				$_SESSION['email1']=$row['A_Email'];
				$_SESSION['pass1']=$row['A_Password'];
				// echo $row['a_password'];
				echo "<script>window.location='index.php'</script>";

			
			}
		}
		else
		{
			echo "<script>window.location='login.php'</script>";

		}
		
?>