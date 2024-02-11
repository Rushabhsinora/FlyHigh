<?php
include('connect_to_database.php');
if(isset($_POST['submit']))
{
		
	if(!empty($_FILES['file']))
	{
		$path="food_image/";
		$path1=$path.basename($_FILES['file']['name']);
		if(move_uploaded_file($_FILES['file']['tmp_name'],$path1))
		{
	//echo "<script>window.location='city_add.php'</script>";

	//	echo "the file ". basename($_FILES['file']['name'])." has been uploaded";
	 		}
		else
		{
			//echo "there is error";

		}
	}

		$name=$_POST['fname'];
		$type=$_POST['ftype'];
		$contents=$_POST['fcontents'];
		$price=$_POST['fprice']; 
		$select=$_POST['fselect'];
		$quantity=$_POST['fquantity'];
		 	
			
			$sql="INSERT INTO fooditems(F_Name,F_Type,F_Contents,F_Image,F_Price,Re_Id,Quantity) VALUES ('$name','$type','$contents','$path1','$price','$select','$quantity')";
				//echo $sql;
			if(mysqli_query($conn,$sql))
		{ 
			echo "<script>alert('Items Add')</script>";
			echo"<script>window.open('fooditems.php','_self')</script>";
			
		}
		else
		{
		
		echo "<script>alert('Error Add')</script>";
			echo"<script>window.open('fooditems.php','_self')</script>";
			 
		}
}

?>
