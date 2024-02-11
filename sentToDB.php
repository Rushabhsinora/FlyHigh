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
  $cName = $_SESSION['c_name'];
  $meName = $_SESSION['Me_name'];
  $msg = $_POST['message'];
  date_default_timezone_set('Asia/Kolkata');
  $dat = date("H:i:s");

  $sql = "INSERT INTO admtocus(C_Name, Me_Name, comment, tim) VALUES ('$meName', '$cName', '$msg', '$dat')";
  $sql1 = "INSERT INTO custoadm(C_Name, Me_Name, comment, tim) VALUES ('$cName', '$meName', '$msg', '$dat')";

if ($conn->query($sql) === TRUE) {
    $_SESSION['me'] = $meName;
    $_SESSION['msg'] = $msg;
    $_SESSION['dat'] = $dat;
    $send = $_SESSION['id'];
    
    //header("location: tryChat.php?action=done&id=$send");
    if ($conn->query($sql1) === TRUE) {/*
        $_SESSION['me'] = $meName;
        $_SESSION['msg'] = $msg;
        $_SESSION['dat'] = $dat;
        $send = $_SESSION['id'];*/
        
        header("location: tryChat.php?action=done&id=$send");
    } else {
        echo "Error: " . $sql1 . "<br>" . $conn->error;
    }

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>