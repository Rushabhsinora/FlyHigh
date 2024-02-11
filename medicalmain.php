<?php
include('config.php');
 $_SESSION['mname'];

?>
<html>
<head>
<title>Medical Executitve</title>
<link rel="stylesheet" href="css/medicalmain.css">
<link href="https://fonts.googleapis.com/css?family=Galada&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet">

<style>
.dropbtn {
  background-color: #f2f2f2;
 font-family: 'Fjalla One', sans-serif;
	padding: 20px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  height:50px;
  color: black;
  text-align: center;
 

}

.dropdown {
  position: relative;
  display: inline-block;
  float: right;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 8px 10px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #f2f2f2;
}
</style>
</head>
<body>
<div class="first">
<?php 

if(isset($_SESSION['memail']))		
		{		
		
			
		?>
		<br />
		 <div class="dropdown"> 
		  <button class="dropbtn"> Hi  <?php echo $_SESSION['mname'];?></button>
		  <div class="dropdown-content">
		  <a href="myProfile.php" >My Profile</a>
		  <a href="bookinghistory.php">My Booking</a>
		  <a href="help.php">Help</a>
		 <a href="">Amusement Info</a>
		 <a href="lostthings.php">Things Lost</a>
		<a href="medicallogout.php">Log Out</a>
		
		  </div>
		</div>
		
		
		
		
		<?php 
		}
		else
		{
		?>
			<a href="medicallogin.html" style="float:right; margin-top:-40px;color: red;height: 7%;width: 10%; margin-right:40px;font-family: 'Fjalla One', sans-serif;">Login</a>
	
		<?php 
		}
		?>
	<h1 class="orders">Medical</h1>
</div>

 <?php
            $sql = "SELECT * from customer where Me_Status='1'";
            $res = mysqli_query($conn, $sql);
			if(mysqli_num_rows($res) > 0)
		{
		
            
                while($row = mysqli_fetch_array($res))
				{
        ?>
		<table border='2px' width='75%'>
        <tr>
            <th>Customer Name</th>
            <th>Customer Email</th>
            <th>Status</th>
            <th>Chat</th>
        </tr>
        <tr>
            <td><?php echo $row['C_Name'];?></td>
            <td><?php echo $row['C_Email'];?></td>
			<td><a>online</a></td>
			<td><a href="tryChat.php?action=startChat&id=<?php echo $row['C_Id'];?> & cname=<?php echo $row['C_Name'];?>">Start Chat</a></td>
        </tr>
		  
        <?php
                }
		}
		
		else
		{
			echo "<h1 style=\"color: #ff00ff;font-family:'Rubik', sans-serif;padding-bottom: 60px;padding-top: 60px;background-color: black;font-size: 40px; text-align: center;\">No Users Are Online</h1> ";
		}
            
        ?>
</table>
  
</body>
</html>
