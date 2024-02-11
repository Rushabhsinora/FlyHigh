

     
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">   

    <title>Thank You, Mojo</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme --
<
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>

  <body>
        <div class="container" align="center">
 
      <div class="page-header">
        <h1><a href="http://balaji-sourcecode.com/jigar/Client_side/index.php">Hall Booking</a></h1>
     
      </div>
<image src="su1.png" width ="150" height="150">

      <h2 style="color:#6da552">Hall Booking Thank You, Payment succus!!</h2>
  

 <?php

include 'src/instamojo.php';

$api = new Instamojo\Instamojo('test_92408ba4b8a39f57387ee61797d', 'test_6b3f5dcc59e9529032610ddd61e','https://test.instamojo.com/api/1.1/');

$payid = $_GET["payment_request_id"];


try {
    $response = $api->paymentRequestStatus($payid);


    echo "<h4>Payment ID: " . $response['payments'][0]['payment_id'] . "</h4>" ;
    echo "<h4>Name: " . $response['payments'][0]['buyer_name'] . "</h4>" ;
    echo "<h4>Email: " . $response['payments'][0]['buyer_email'] . "</h4>" ;
    echo "<h4>Total Amount : " . $response['payments'][0]['amount'] . "</h4>" ;
    echo "<h4>Payment Way : " . $response['payments'][0]['status'] . "</h4>" ;
   
    
   
   
    $payment_id=  $response['payments'][0]['payment_id'];
      $buyer_name=  $response['payments'][0]['buyer_name'];
    $buyer_email=  $response['payments'][0]['buyer_email'];
    $amount=  $response['payments'][0]['amount'];
  //  $status=  $response['payments'][0]['status'];
 
 
  //echo "<pre>";
  //print_r($response);
//echo "</pre>";
    ?>

     
    <?php
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}
  ?>
    </div> <!-- /container -->

<!---------------------------------------------------------------------->

			
				        
												    
							
<?php

include('config.php');


    $email=$_SESSION['email'];   
    
   $nm=$_SESSION['nm'];       
    $hl=$_SESSION['hl'];   
    $dt=$_SESSION['dt'];   
    $pb=$_SESSION['pb'];   
//	echo $email1;   
echo  $mobile=$_SESSION['number'];
	//if($email) 
              
	{	 
		
$sql = "INSERT INTO booking(date,hall_name,purpose_of_booking,hall_rent,mobile,email,name,server_id)
values('$dt','$hl','$pb','$amount','$nm','$buyer_email','$buyer_name','$payment_id') " or die("not work");
	$result = mysql_query($sql);
	//echo $sql;
	
			
if($result)
	{
    
	//echo"<script>alert('You Successfully Pay Now ')</script>";

}
else
{
echo"<script>alert('Your Payment Error')</script>";
}		

							}	
						
							
		?>
		
<div class="container" align="center">
	<a href="http://balaji-sourcecode.com/jigar/Client_side/index.php">BACK TO HOME</a>
		
</div>
		   			
 </body>
</html>