<?php
	include('config.php');
	
	$ddate=date("d/m/Y"); 
	$b_date= $_SESSION['bdate'];
	
	$extra=$_SESSION['fr'];
	$c_id= $_SESSION['c_id'];
	$price=$_POST['pri'];
	$person=$_SESSION['per'];
	
	$sql="INSERT INTO booking_details(C_Id,Date,B_Date,Person,Price,Extra) 
						VALUES('$c_id','$ddate','$b_date','$person','$price','$extra')";
						
						
				
	if(mysqli_query($conn,$sql))
	{
		echo "<script>alert('Data inserted')</script>";
		//echo "<script>window.location='cart.php'</script>";
		$Or_Id = mysqli_insert_id($conn);
			$query = "SELECT * FROM add_to_cart WHERE C_Id='$c_id' "; 
			$result= mysqli_query($conn,$query);
			
			
				while ($row=mysqli_fetch_array($result))
				{
					$p_id=$row['P_Id'];
					$p_p=$row['Price'];
					$p_q=$row['Quantity'];

					$order="INSERT INTO order_details(B_Id,P_Id,p_price,Quantity)VALUES('$Or_Id','$p_id','$p_p','$p_q')";
					if(mysqli_query($conn,$order))
						{
							$delcart="DELETE FROM add_to_cart";
								if(mysqli_query($conn,$delcart))
								{
										echo "cart is empty";		
								}
							
							
						}
							
				}
	
	}
	else
	{
		echo "<script>alert('Data  not inserted')</script>";
	
	
	}
						
	
?>