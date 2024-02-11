<?php
//echo $booking_date =  $_GET['booking_date'];
//echo $hall_name = $_GET['hall_name'];       
//echo $purpose_Of_booking = $_GET['purpose_Of_booking'];   

	  session_start();	
	  
     $product_name = "Ticket Book";
	 
	 $_SESSION['bdate']=$_POST['bdate'];
	 $_SESSION['fr']=$_POST['fr'];
	 $_SESSION['per']=$_POST['per'];
	 
	 $phone = $_SESSION['mobile'];
	 $email = $_SESSION['email'];
	 $cname = $_SESSION['name'];
 
	 
				/*$_SESSION['sheet'] = $_GET['sheet'];
	 
					$sheet=$_SESSION['sheet'];
					
					$a= explode(",",$sheet);
					 $size=sizeof($a);
					$train_price=$_SESSION['train_price'];
	 */
	//	echo '<script type="text/javascript">alert("' . $train_price. '")</script>';
		 
	   
		$total = $_POST['total'];
 
		
  include 'src/instamojo.php';     
  $api = new Instamojo\Instamojo('test_92408ba4b8a39f57387ee61797d', 'test_6b3f5dcc59e9529032610ddd61e','https://test.instamojo.com/api/1.1/');

  
//$api = new Instamojo\Instamojo('test_5d6fe26764e4bad7c4b5378a425','test_2ec736fa8097018387d7383d36f','https://test.instamojo.com/api/1.1/');


try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => $product_name,
        "amount" => $total,
        "buyer_email" => $email,
		"buyer_phone" => $phone,
		"phone" => $phone,
		"buyer_name" => $cname,
        "send_email" => true,
	    "send_sms" => true,
		"sms_status"=> "Sent",
		"email_status"=> "Sent",
        "email" => $email,
        'allow_repeated_payments' => false,
		
        "redirect_url" => "http://localhost/flyhigh_new/booking_process.php",
        "webhook" => "http://webhook.php"
        ));
    print_r($response);

    $pay_ulr = $response['longurl'];
    
    //Redirect($response['longurl'],302); //Go to Payment page

    header("Location: $pay_ulr");
    exit();

}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}    

  ?>