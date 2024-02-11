<?php
include('config.php');
	$Email=$_POST['email'];
	$Password=$_POST['password'];
	$sql="SELECT * FROM medical_executive WHERE  Me_Email='$Email' and Me_Password='$Password'";
	
	echo $sql;
$result=mysqli_query($conn,$sql);
		
		if(mysqli_num_rows($result) == 1)
		{
			while ($row=mysqli_fetch_array($result))
			{
			$_SESSION['memail']=$row['Me_Email'];
			$_SESSION['mname']=$row['Me_Name'];
			$_SESSION['msalary']=$row['Me_Salary'];
			$_SESSION['mage']=$row['Me_Age'];
			$_SESSION['mgender']=$row['Me_Gender'];
			$_SESSION['mstatus']=$row['M_Status'];
		
			//$_SESSION['email']=$Email;
			header("location:medicalmain.php");
			
			}
		}
		else
		{
			echo "<script>alert('InValid Email Id Or Password ')</script>";
			echo "<script>window.location='medicallogin.html'</script>";
	
		} 
?>