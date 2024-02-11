<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $db = "fly_high";
 
 $conn = new mysqli($servername, $username, $password, $db);

 if($conn->connect_error){
    die("Failed Connection: " . $conn->connect_error);
  }

  session_start();
  $cName = $_SESSION['name'];
  $meName = $_SESSION['Me_name'];
  $msg = $_POST['message'];
  date_default_timezone_set('Asia/Kolkata');
  $dat = date("H:i:s");

  $sql = "INSERT INTO custoadm(C_Name, Me_Name, comment, tim) VALUES ('$meName', '$cName', '$msg', '$dat')";
  $sql1 = "INSERT INTO admtocus(C_Name, Me_Name, comment, tim) VALUES ('$cName', '$meName', '$msg', '$dat')";
  $query = "UPDATE customer SET Me_Status='1' WHERE C_Name='$cName'"; 
	if(!mysqli_query($conn,$query))
	{
		
	echo "<script>alert('Not Upadated')</script>";
		//echo "<script>window.location='Userlogin.html'</script>";
	}
	else
	{
	echo "<script>alert('Data updated')</script>";
	//echo "<script>window.location='index.php'</script>";
	}
	
	

if ($conn->query($sql) === TRUE) {
    $_SESSION['me'] = $meName;
    $_SESSION['msg'] = $msg;
    $_SESSION['dat'] = $dat;
    //$send = $_SESSION['id'];
    //header("location: help.php");

    if ($conn->query($sql1) === TRUE) {/*
        $_SESSION['me'] = $meName;
        $_SESSION['msg'] = $msg;
        $_SESSION['dat'] = $dat;
        //$send = $_SESSION['id'];*/
        
        header("location: help.php");
    } else {
        echo "Error: " . $sql1 . "<br>" . $conn->error;
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>