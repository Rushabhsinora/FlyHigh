<link href="https://fonts.googleapis.com/css?family=Galada&display=swap" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
 <style>
.dropbtn {
  background-color: #f2f2f2;
 font-family: 'Fjalla One', sans-serif;
	padding: 20px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  height:60px;
  color: black;

}

.dropdown {
  position: relative;
  display: inline-block;
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

<nav class="nav">

		<a href="index.php" class="nav-item is-active" active-color="orange" style="text-decoration: none;">Home</a>
		<a href="rides.php" class="nav-item " active-color="green" style="text-decoration: none;">Rides</a>
		<a href="restaurents.php" class="nav-item" active-color="red" style="text-decoration: none;">Restaurents</a>
		<a href="packages.php" class="nav-item" active-color="blue" style="text-decoration: none;">Tickets</a>
		<a href="about.php" class="nav-item" active-color="rebeca" style="text-decoration: none;">About Us</a>
	    <span class="nav-indicator"> </span>
		
			<?php if(isset($_SESSION['email'])) { ?>
			

		 <div class="dropdown"> 
		  <button class="dropbtn"> Hi  <?php echo $_SESSION['name'];?></button>
		  <div class="dropdown-content">
		  <a href="myProfile.php" style="text-decoration: none;" >My Profile</a>
		  <a href="bookinghistory.php" style="text-decoration: none;">My Booking</a>
		  <?php 
		  
		  
		  $cdate= date("Y-m-d");
			$c_id=$_SESSION['c_id'];
	$query = "SELECT * FROM booking_details WHERE C_Id='$c_id'"; 
$result= mysqli_query($conn,$query);
if(mysqli_num_rows($result) > 0)
		{
			while ($row=mysqli_fetch_array($result))
			{
				$bdate=$row['B_Date'];
				if($cdate == $bdate)
					{
		  ?>
		  <a href="help.php" style="text-decoration: none;">Help</a>
		  <?php 
		  }
			else
				{
				}
		  
			}
		}
	else
		{
	
		}
?>
		
		
		  
		  
		 <a href="map.php" style="text-decoration: none;">Amusement Info</a>
		 <a href="lostthings.php" style="text-decoration: none;">Things Lost</a>
		<a href="Userlogout.php" style="text-decoration: none;">Log Out</a>
		
		  </div>
		</div>
		
			<?php } else {?>
		
				<a href="Userlogin.php" class="nav-item" active-color="rebeca" style="text-decoration: none;">Login</a>
		
			<?php }?>
		

	</nav>
	 	
<h1  style="margin-top:-50px;font-family:'Galada', cursive;margin-left: 50px;font-size: 30px;color: #ffffff;letter-spacing: 2px;font-weight: lighter;">FlyHigh</h1>
	
 