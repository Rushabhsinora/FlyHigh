<?php
include('connect_to_database.php');
if(isset($_POST['submit']))
{

		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$select=$_POST['select'];
		$age=$_POST['age'];
		$gender=$_POST['gender'];
		$salary=$_POST['salary'];
			
			
			$sql="INSERT INTO foodcourt_executive(Fe_Name,Fe_Email,Fe_Password,Re_Id,Fe_Age,Fe_Gender,Fe_Salary) VALUES ('$name','$email','$password','$select','$age','$gender','$salary')";
				//echo $sql;
			if(mysqli_query($conn,$sql))
		{ 
				echo "<script>alert('Executive  Add')</script>";
			echo"<script>window.open('food_executive.php','_self')</script>";
			
		}
		else
		{
				echo "<script>alert('Executive  Add Error')</script>";
			echo"<script>window.open('food_executive.php','_self')</script>";
		}
}

?>
