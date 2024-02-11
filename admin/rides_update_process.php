<?php
include('connect_to_database.php');

if(isset($_POST['submit']))
{
			
	if(!empty($_FILES['uploaded_file']['name']))
	
	{
		$path="ride_image/";
		$path1=$path.basename($_FILES['uploaded_file']['name']);
		if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'],$path1))
		{
	//echo "<script>window.location='city_add.php'</script>";

	//	echo "the file ". basename($_FILES['uploaded_file']['name'])."has been uploaded";

		}
		else
		{
		//	echo "there is error";

		}
	} else{
		$path1	=	$_POST['old'];

		}
	
	
		$name=$_POST['name'];
		$details=$_POST['details']; 
		$age=$_POST['age'];
		$status=$_POST['status'];
		$cat=$_POST['cats'];
		$rid=$_GET['rid'];
	
			//echo $rid;
$sql="update rides_details SET R_Name='$name',R_Image='$path1',R_Details='$details',Age='$age',Status='$status',S_Id='$cat' where R_Id='$rid'";
				 
			if(mysqli_query($conn,$sql))
		{
			
	echo "<script> alert('Update ')</script>";
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




