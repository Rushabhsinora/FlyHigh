<?php
	include('config.php');
	
?>
  
<?php //   session_start();

	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
?> 

<html>
<head>
<title>Payment succus</title>
<link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
<style>
*
{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	
}

.nav
{
		display: inline-flex;
		position: relative;
		/*overflow: hidden;*/
		width: 48%;
		background-color: #f2f2f2;
		border-radius: 30px;
		box-shadow: 0 10px 40px rgba(150,172,177,0.8);
		margin-left:500px;
		margin-top:50px;
		height: 60px;
		margin-right: 220px;
		
}
.nav-item
{
	color:  #262626;
	padding: 20px;
	text-decoration: none;
	transition: 0.3s;
	margin: 0 7px;
	z-index: 1;
	font-family: 'Fjalla One', sans-serif;
	font-weight: 500;
	position: relative;
	
	
}
.nav-item:before
{
	content: "";
	position: absolute;
	bottom: -7px;
	left: 0;
	width: 100px;
	height: 5px;
	background-color: #000000;
	border-radius: 1px 1px 0 0 ;
	opacity: 0;
	transition: 0.3s;
}
.nav-item:not(.is-active):hover:before
{
	opacity:1;
	bottom: 0;
}
.nav-item:not(.is-active):hover
{
	color: #1aff1a;
	
}
.nav-indicator
{
	position: absolute;
	left: 0;
	bottom: 0;
	height: 4px;
	transition: 0.4s;
	height: 5px;
	z-index: 1;
	border-radius: 8px 8px 0 0;
	
}
.shop
{
	text-align: center;
	color:    #ff9900	;
	font-size: 100px;
	margin-top: 200px;
	font-family:'Fjalla One', sans-serif;
	text-shadow: 0 0 10px  #000000, 0 0 10px  #000000,0 0 10px  #000000;
	letter-spacing: 10px;
}
.details
{
	background-color: black;
	padding-top: 10px;
	padding-bottom: 10px;
}
.details p
{
	color: black;
	font-family: 'Roboto Condensed';
	font-size: 20px;
	padding: 0;
	margin: 0;
	letter-spacing: 1px;
}
.details h1
{
	color: black;
	font-family: 'Roboto Condensed';
	font-size: 30px;
	letter-spacing: 2px;
	
}
.backg
{
	background-color:#ff4dff;
	background-attachment: fixed;
	margin-top: 60px;
	margin-bottom: 60px;
	margin-left: 300px;
	margin-right: 300px;
	
}
.update
{
position: relative;
display: inline-block;
padding: 15px 30px;
color: #1aff1a;
text-transform: uppercase;
text-decoration: none;
font-size: 20px;
overflow: hidden;
transition: 0.2s;
margin-top:25px;
font-family: 'Fjalla One', sans-serif;
background: #000000;
}	
.update:hover
{
	color:  #000000;
	background: #ffffff;
	box-shadow: 0 0 10px #ffffff, 0 0 40px #ffffff, 0 0 80px #ffffff;
	
}

</style>
</head>
<body>
<center>
<div class="back">
		<?php include('menu.php');?>

</div><br><br>
<center>
 <h1>Thank You, Payment succus!!</h1>

<hr style="margin-left:100px;margin-right: 100px;">
<image src="a1.gif" width ="200" height="170">

		 <?php

include 'payment_gateway/src/instamojo.php';

$api = new Instamojo\Instamojo('test_92408ba4b8a39f57387ee61797d', 'test_6b3f5dcc59e9529032610ddd61e','https://test.instamojo.com/api/1.1/');

$payid = $_GET["payment_request_id"];

try {
    $response = $api->paymentRequestStatus($payid);
    echo "<h4>Payment ID: "    . $response['payments'][0]['payment_id'] . "</h4>" ;
    echo "<h4>Name: "          . $response['payments'][0]['buyer_name'] . "</h4>" ;
    echo "<h4>Email: "         . $response['payments'][0]['buyer_email'] . "</h4>" ;
    echo "<h4>Phone: "         . $response['payments'][0]['buyer_phone'] . "</h4>" ;
    echo "<h4>Total Amount : " . $response['payments'][0]['amount'] . "</h4>" ;
    echo "<h4>Payment Way : "  . $response['payments'][0]['status'] . "</h4>" ;
   
      $payment_id   =  $response['payments'][0]['payment_id'];
      $name         =  $response['payments'][0]['buyer_name'];
      $email        =  $response['payments'][0]['buyer_email'];
      $phone        =  $response['payments'][0]['buyer_phone'];
      $amount       =  $response['payments'][0]['amount'];
      $payment_way  =  $response['payments'][0]['status'];
 
  //echo "<pre>";
  //print_r($response);
//echo "</pre>";
    
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}
  ?> 
  <?php
	
	$ddate=date("d/m/Y"); 
	$b_date= $_SESSION['bdate'];
	
	$extra=$_SESSION['fr'];
	$c_id= $_SESSION['c_id'];
	$person=$_SESSION['per'];
	
	$sql="INSERT INTO booking_details(C_Id,Date,B_Date,Person,Price,Pay_Id,Extra) 
						VALUES('$c_id','$ddate','$b_date','$person','$amount','$payment_id','$extra')";
						
						
				
	if(mysqli_query($conn,$sql))
	{
	//	echo "<script>alert('Data inserted')</script>";
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
										//echo "cart is empty";		
								}
							
							
						}
							
				}
	
	}
	else
	{
	//	echo "<script>alert('Data  not inserted')</script>";
	
	
	}
						
	
?>


</center>
</body>
</html>

 
 
 
 
 
 
 
 