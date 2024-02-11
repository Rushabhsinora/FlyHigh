<?php
include('connect_to_database.php');

if(isset($_POST['submit']))
{
		
	if(!empty($_FILES['uploaded_file']['name']))
	{
		$path="package_image/";
		$path1=$path.basename($_FILES['uploaded_file']['name']);
		if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'],$path1))
		{
			
		///echo "the file ". basename($_FILES['uploaded_file']['name'])."has been uploaded";

		}
		else
		{
		//	echo "there is error";

		}
	}
	else
	{
			$path1=$_POST['old'];
	}	$name=$_POST['name'];
		$price=$_POST['price']; 
		$details=$_POST['details'];
		$pid=$_GET['pid'];
	
			 
$sql="update packages_details SET P_Name='$name',P_Price='$price',P_Image='$path1',P_Details='$details' where P_Id='$pid'";
			///	echo $sql;
			if(mysqli_query($conn,$sql))
		{
			//echo "data not inserted";
			
	echo "<script> alert('Update')</script>";
	echo"<script>window.open('packages.php','_self')</script>";
	
		}
		else
		{
		///	echo "data inserted";
		
	echo "<script> alert('Error')</script>";
	echo"<script>window.open('packages.php','_self')</script>";
		}
}


$conn -> close();
?>




