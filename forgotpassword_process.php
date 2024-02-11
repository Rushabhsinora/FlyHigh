<?php
include('config.php');

$forgot_email=$_POST['email'];
 $sql="SELECT C_Password FROM customer WHERE C_Email='$forgot_email'";

$result=mysqli_query($conn,$sql);

	if(mysqli_num_rows($result)==1)
		{
			while ($row=mysqli_fetch_array($result))
			{	
				 $from='flyhighamusementpark@gmail.com';
				$subject='Recovery';
				$to = $forgot_email;
				$message='Your Password Is:'.$row['C_Password'];
				if (mail($to,$subject,$message))
				{	
					echo "<script>alert('The Password of your account will be send to Your Email')</script>";
					echo "<script>window.location='Userlogin.php'</script>";
				}
				else
				{
					
					echo 'Unable to send email.please try again';
				}
			}
			
		}
		
		else
		{
			echo "<script>alert('Your Email Id Does Not Matches')</script>";
			echo "<script>window.location='forgotpassword.php'</script>";
		}

?>




