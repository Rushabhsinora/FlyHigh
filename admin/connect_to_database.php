<?php
$conn=mysqli_connect("localhost","root","","fly_high") or die(mysqli_error());
if($conn)
{
	//echo "connected successfully"."</br>";
	
}
else
{
echo "not connected".mysqli_connect_error();
}?>