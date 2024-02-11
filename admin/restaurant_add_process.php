<?php
include('connect_to_database.php');
if(isset($_POST['submit']))
{
		
	if(!empty($_FILES['file1']))
	{
		$path="res_image/";
		$path1=$path.basename($_FILES['file1']['name']);
		if(move_uploaded_file($_FILES['file1']['tmp_name'],$path1))
		{
	//echo "<script>window.location='city_add.php'</script>";

		//	 echo "the file ". basename($_FILES['file1']['name'])."has been uploaded";

		}
		else
		{
			echo "there is error";

		}
	}
	
	
	if(!empty($_FILES['file2']))
	{
		$path2="res_image/";
		$path3=$path.basename($_FILES['file2']['name']);
		if(move_uploaded_file($_FILES['file2']['tmp_name'],$path3))
		{
	//echo "<script>window.location='city_add.php'</script>";

			// echo "the file ". basename($_FILES['file2']['name'])."has been uploaded";

		}
		else
		{
			echo "there is error";

		}
	} 
		$name=$_POST['name'];
		$type=$_POST['type'];
		$details=$_POST['details'];
		$catelog=$_POST['catelog']; 
		
			$sql="INSERT INTO restaurants_details (Re_Name,Re_Type,Re_Details,Re_Image,F_Cat,F_Img)
			VALUES ('$name','$type','$details','$path1','$catelog','$path3')";
			//	echo $sql;
			if(mysqli_query($conn,$sql))
				{
					
			echo "<script>alert('Restaurants Add')</script>";
			echo"<script>window.open('restaurant.php','_self')</script>";
			
				}
			else
			{
			echo "<script>alert('Restaurants Add Error')</script>";
			echo"<script>window.open('restaurant.php','_self')</script>";
			}
	
}
$conn -> close();
?>