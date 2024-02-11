<?php
include('connect_to_database.php');

if(isset($_POST['submit']))
{
		
	if(!empty($_FILES['uploaded_file']['name']))
	{
		$path="food_image/";
		 $path1=$path.basename($_FILES['uploaded_file']['name']);
		move_uploaded_file($_FILES['uploaded_file']['tmp_name'],$path1);
	} else
{
		 $path1=$_POST['oldimg'];
}
	
		$name=$_POST['name'];
		$type=$_POST['type']; 
		$contents=$_POST['contents'];
		$price=$_POST['price'];
		$select=$_POST['select'];
		$quantity=$_POST['quantity'];
	 
		$fid=$_GET['fid'];	
	
		//	echo $fid;
$sql="update fooditems SET F_Name='$name',F_Type='$type',F_Contents='$contents',F_Image='$path1',F_Price='$price',Re_Id='$select',Quantity='$quantity' where F_Id='$fid'";
			//	echo $sql;
			if(mysqli_query($conn,$sql))
		{
		echo "<script>alert('Food Items Update')</script>";
			echo"<script>window.open('fooditems.php','_self')</script>";
		}
		else
		{
		
		echo "<script>alert('Items Update Error')</script>";
			echo"<script>window.open('fooditems.php','_self')</script>";
			
		}
}


$conn -> close();
?>




