<?php
include('connect_to_database.php');
if(isset($_POST['submit']))
{
		$name=$_POST['name'];
		$email=$_POST['email']; 
		$pass=$_POST['pass'];
		$select=$_POST['select'];
		$age=$_POST['age'];
		$gender=$_POST['gender'];
		$salary=$_POST['salary'];
		$fid=$_GET['fid'];
	
			//echo $fid;
$sql="update foodcourt_executive SET Fe_Name='$name',Fe_Email='$email',Fe_Password='$pass',Re_Id='$select',Fe_Age='$age',Fe_Gender='$gender',Fe_Salary='$salary' where Fe_Id='$fid'";
				//echo $sql;
			if(mysqli_query($conn,$sql))
				{
					 
					
	echo "<script> alert('Update')</script>";
	echo"<script>window.open('food_executive.php','_self')</script>";
	
				}
			else
			{
	echo "<script> alert('Error')</script>";
	echo"<script>window.open('food_executive.php','_self')</script>";
			}
}


$conn -> close();
?>




