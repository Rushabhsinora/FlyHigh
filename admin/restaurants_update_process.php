<?php
include('connect_to_database.php');

if(isset($_POST['submit']))
{	

	if(!empty($_FILES['uploaded_file']['name']))
	
	{
		$path="res_image/";
		$path1=$path.basename($_FILES['uploaded_file']['name']);
		if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'],$path1))
		{
	//echo "<script>window.location='city_add.php'</script>";
	//	echo "the file ". basename($_FILES['uploaded_file']['name'])."has been uploaded";

		}
		else
		{
			//echo "there is error";

		}
	}
	else {
	
	$path1=$_POST['old1'];
	
	}
	
		if(!empty($_FILES['uploaded_file1']['name']))
	
	{
		$path="res_image/";
		$path3=$path.basename($_FILES['uploaded_file1']['name']);
		if(move_uploaded_file($_FILES['uploaded_file1']['tmp_name'],$path3))
		{
	//echo "<script>window.location='city_add.php'</script>";
	//	echo "the file ". basename($_FILES['uploaded_file1']['name'])."has been uploaded";

		}
		else
		{
			//echo "there is error";

		}
	}
	else {
	
	$path3=$_POST['old2'];
	
	}	$name=$_POST['name'];
		$type=$_POST['type']; 
		$details=$_POST['details'];
		$menu=$_POST['menu'];
		$reid=$_GET['reid'];
	
			//echo $reid;
$sql="update restaurants_details SET Re_Name='$name',Re_Type='$type',Re_Details='$details',Re_Image='$path1',F_Cat='$menu',F_Img='$path3' where Re_Id='$reid'";
				echo $sql;
			if(mysqli_query($conn,$sql))
		{
			
		echo "<script>alert('Update')</script>";
			echo"<script>window.open('restaurant.php','_self')</script>";
			
		}
		else
		{
			
		echo "<script>alert('Update Error')</script>";
			//echo"<script>window.open('restaurant.php','_self')</script>";
		}
}


$conn -> close();
?>




