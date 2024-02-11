<?php
include('connect_to_database.php');

if(isset($_POST['submit']))
{
		
	if(!empty($_FILES['uploaded_file']))
	{
		$path="package_image/";
		$path1=$path.basename($_FILES['uploaded_file']['name']);
		if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'],$path1))
		{
	//echo "<script>window.location='city_add.php'</script>";

		//echo "the file ". basename($_FILES['uploaded_file']['name'])."has been uploaded";

		}
		else
		{
		//	echo "there is error";

		}
	}

		$name=$_POST['name'];
		$price=$_POST['price']; 
		$details=$_POST['details'];
			
			
			$sql="INSERT INTO packages_details (P_Name,P_Price,P_Image,P_Details) VALUES ('$name','$price','$path1','$details')";
				//echo $sql;
			if(mysqli_query($conn,$sql))
		{
			//echo "data not inserted";
			
	echo "<script> alert('Add')</script>";
	echo"<script>window.open('packages.php','_self')</script>";
	
		}
		else
		{
	echo "<script> alert('Error')</script>";
	echo"<script>window.open('packages.php','_self')</script>";
		}
} 
$conn -> close();
?>




