<?php
include('connect_to_database.php');

if(isset($_POST['submit']))
{
	
	if(!empty($_FILES['u_file']))
	{
		$path="ride_image/";
		$path1=$path.basename($_FILES['u_file']['name']);
		if(move_uploaded_file($_FILES['u_file']['tmp_name'],$path1))
		{
			// echo "the file ". basename($_FILES['u_file']['name'])."has been uploaded";

		}
		else
		{
			//echo "there is error";

		}
	}	
		$name=$_POST['name'];
		$details=$_POST['details'];
		$age=$_POST['age'];
		$status=$_POST['status'];
		$s_id=$_POST['s_id'];

			$sql="INSERT INTO rides_details(R_Name,R_Image,R_Details,Age,Status,S_Id) VALUES ('$name','$path1','$details','$age','$status','$s_id')";
				//echo $sql;
			if(mysqli_query($conn,$sql))
		{
		
		
	echo "<script> alert('Insert')</script>";
	echo"<script>window.open('rides.php','_self')</script>";
		}
		else
		{
		 
	echo "<script> alert('Error')</script>";
	echo"<script>window.open('rides.php','_self')</script>";
		}
}
$conn -> close();
?>










