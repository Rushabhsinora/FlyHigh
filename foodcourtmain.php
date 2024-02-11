<?php
include('config.php');
  $rsid=$_SESSION['frid'];


?>
<html>
<head>

<link rel="stylesheet" href="css/foodcourtmain.css">
<link href="https://fonts.googleapis.com/css?family=Galada&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<title>foodcourt</title>
</head>
<body>

<div class="first">

<?php 

if(isset($_SESSION['femail']))		
		{		
		
			 echo '<div class="nav">';
			echo '<div class="fixedBox">';
			//echo 'Hello,' . $_SESSION['fname'] . ' &nbsp;';
			echo '<button type="button" onclick="showNav()" class="button1" ">Hi! &nbsp'.$_SESSION['fname'] .'</button>';
			echo '</div>';
			echo '</div>';
		?>
		<br />
		<div class="listBox" id="nav">
				<button type="button" onclick="hideNav()">X </button>
				<br><br>
				<div><a href="myProfile.php">My Profile</a></div>
				<div><a href="order.php">My Order</a></div>
				<div><a href="foodcourtlogout.php">Log Out</a></div> 
		</div>
		
		
		
		
		<?php 
		}
		else
		{
		?>
			<a href="foodlogin.html" style="float:right; margin-top:-40px;color: red;height: 7%;width: 10%; margin-right:40px;font-family: 'Fjalla One', sans-serif;">Login</a>
	
		<?php 
		}
		?>
	<h1 class="orders">My Orders</h1>
</div>
 <?php 
 	$sql3 = "SELECT * FROM restaurants_details WHERE Re_Id='$rsid' ";
	$res3 = mysqli_query($conn, $sql3);

				while($row3 = mysqli_fetch_array($res3))
				{ 
					$rname=	$row3['Re_Name'];
			
				 }
?>
	<h3 style="text-align: center;color: red;font-size: 40px;font-family: arial"><?php echo $rname;?></h3>
	<?php 		
	//$sql1 = "SELECT * FROM foodbooking_details WHERE Re_Id='$rsid'";
	$sql1 = "SELECT * FROM foodbooking_details WHERE Re_Id='$rsid'";
	//$sql = " SELECT * FROM foodbooking_details fd join foodorder_details fo on (fo.Re_Id = 
	$res1 = mysqli_query($conn,$sql1);

				while($row1 = mysqli_fetch_array($res1))
				{ 
		 $cname=$row1["C_Name"];
		 $total=$row1["Total"]; 
		 $Fb_Id=$row1["Fb_Id"]; 
			
			 
		 ?>
		 <table class="table table-bordered" >
			<tr>
                <td colspan="6">Name: <?php echo   $cname;?> order id:  <?php echo   $Fb_Id;?> </td>
            </tr>
			<tr>
				<td><b>Sr.No</b></td>
				<td colspan="2"><b>Item Name</b></td>
				<td><b>Qty</b></td>
				<td><b>Price</b></td>
				<td><b>Total</b></td>
			</tr> 
			<?php  
				
		//	$sql = "SELECT * FROM foodcourt_cart WHERE Re_Id='$rsid' and C_Id='$cid' and (Status='1' or Status='2' or Status='3' or Status='4')";
		$sql = "SELECT * FROM foodorder_details WHERE Re_Id='$rsid' and Fb_Id='$Fb_Id'";
		$res = mysqli_query($conn, $sql);
		$cnt=1;
		$sum=0;
				while($row = mysqli_fetch_array($res))
				{ 
	    
            ?> 
		 
            <tr> 
                <td><?php  echo $cnt++;?>
                <td colspan="2"><?php echo $row["F_Name"]; ?></td>
                <td><?php echo $row["F_Quantity"]; ?></td>
                <td><?php echo $row["F_Price"]; ?></td>
				<td></td>
                
            </tr>
		    <?php
                  $sum+=$row["F_Price"];
				} 
            ?>
	
			
			 <tr>
				<td colspan="3"><h4>Total Amount</h4></td>
				<td colspan="2"></td>
				<td> <h4><b><?php echo $sum;    //$sum+=$row1['F_Price']*$row['F_Quantity']; 
				
				 ?></b></h4></td>
			</tr>
			<tr>
			<td colspan="6">
			<?php 
				if($row1["F_Status"]==0)
				{
			?>
			<a href="acceptFood.php?cid=<?php echo $row1["C_Id"];?>" class="btnAcc badge badge-primary">Accept</a> 
			<a href="rejFood.php?cid=<?php echo $row1["C_Id"];?>" class="btnAcc badge badge-primary">Reject</a> 
			<?php
				}
				if($row1["F_Status"]==1)
				{
			?>
			
			<a href="doneFood.php?cid=<?php echo $row1["C_Id"];?> & rname=<?php echo $rname;?>" class="btnAcc badge badge-primary">Order Done</a> 
			<?php
				echo '  The OTP Is : '.$row1["Otp"];
				}
			?>
			<?php  
			if ($row1["F_Status"]==2)
				{
					echo ' This Order Has Rejected !';
				}
			  
			if ($row1["F_Status"]==3)
				{
					echo 'Your Food Is Ready And Your OTP Is : '.$row1["Otp"];
				}
			?>

			
			</td>
			
			</tr>
			
</table>
	<?php 
				}
	?>


	<script>
 
  function showNav(){
  var slide = document.getElementById("nav");
  slide.style.display = "block";
  }
   
  function hideNav(){
  var slide = document.getElementById("nav");
  slide.style.display = "none";
  }

</script>

 


</body>
</html>	
	