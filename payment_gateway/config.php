<?php $link=mysql_connect("localhost","balajiso","71D)Hdw4H6-biH");
	$db=mysql_select_db("balajiso_society",$link);
	@session_start();
	if($db)

/*$email=$_SESSION['email'];
	if($email)
	{	
		$query=mysql_query("SELECT * FROM member_reg  WHERE email='$email'");

		$row=mysql_fetch_assoc($query);
		$house_type=$row['house_type'];
		$member_name= $row['member_name'];
	}
	
/*
echo " sucessfull connect DB";

else
{
echo "Error";	
}
*/



?>
