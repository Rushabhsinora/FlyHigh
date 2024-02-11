<?php
	include('config.php');
	$total=$_POST['total'];
	$c_id= $_SESSION['c_id'];
	$c_name= $_SESSION['name'];
	$r_id=$_POST['r_id'];
	
	$sql="INSERT INTO foodbooking_details(C_Name,C_Id,Total,Re_Id) 
						VALUES('$c_name','$c_id','$total','$r_id')";
						
						
				
	if(mysqli_query($conn,$sql))
	{
		//echo "<script>alert('Data inserted')</script>";
		//echo "<script>window.location='cart.php'</script>";
		$Or_Id = mysqli_insert_id($conn);
			$query = "SELECT * FROM foodcourt_cart WHERE C_Id='$c_id' "; 
			$result= mysqli_query($conn,$query);
			
			
				while ($row=mysqli_fetch_array($result))
				{
					$r_id=$row['Re_Id'];
					$f_name=$row['F_Name'];
					$f_q=$row['F_Quantity'];
					$f_pri=$row['F_Price'];

					$order="INSERT INTO foodorder_details(Fb_Id,Re_Id,F_Name,F_Quantity,F_Price)VALUES('$Or_Id','$r_id','$f_name','$f_q','$f_pri')";
					if(mysqli_query($conn,$order))
						{
							$delcart="DELETE FROM foodcourt_cart";
								if(mysqli_query($conn,$delcart))
								{
										echo "<script>window.location='thankyou.php'</script>";	
								}
							
							
						}
							
				}
	
	}
	else
	{
		echo "<script>alert('Data  not inserted')</script>";
	
	
	}
						
	
?>