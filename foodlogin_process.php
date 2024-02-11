<?php
include('config.php');
	$Email=$_POST['email'];
	$Password=$_POST['password'];
	$sql="SELECT * FROM foodcourt_executive WHERE  Fe_Email='$Email' and Fe_Password='$Password'";
	
	echo $sql;
$result=mysqli_query($conn,$sql);
		
		if(mysqli_num_rows($result) == 1)
		{
			while ($row=mysqli_fetch_array($result))
			{
			$_SESSION['femail']=$row['Fe_Email'];
			$_SESSION['fname']=$row['Fe_Name'];
			$_SESSION['fsalary']=$row['Fe_Salary'];
			$_SESSION['fage']=$row['Fe_Age'];
			$_SESSION['fgender']=$row['Fe_Gender'];
			$_SESSION['frid']=$row['Re_Id'];
		
			//$_SESSION['email']=$Email;
			header("location:foodcourtmain.php?You Successfully Login...".$msg);
			
			}
		}
		else
		{
			echo "<script>alert('InValid Email Id Or Password ')</script>";
			echo "<script>window.location='Foodlogin.html'</script>";
	
		}
	
	
	
	
?>