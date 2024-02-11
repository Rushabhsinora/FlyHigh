<?php

include('config.php');

?>
<html>
<head>
<title>Update Profile</title>
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
.back
{
	height: 200vh;
	background-image: url("images/editprofileback.jpg");
	background-size: cover;
	background-attachment: fixed;
}
.nav
{
		display: inline-flex;
		position: relative;
		/*overflow: hidden;*/
		width: 52%;
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
.formBox
{
	padding-top: 100px;
	 background-color: rgba(0, 0, 0, 0.8);
	margin-top: 70px;
	margin-bottom: 50px;
	margin-left: 300px;
	margin-right: 300px;
	color: white;
	
}
.inp
{
	width: 60%;
    height: 3%;
    background-color:#ffffff;
    text-align: center;  
    font-size: 20px;
	font-family: 'Roboto Condensed';
	
}
.inp textarea{
    width: 60%;
    height: 7%;
    background-color:#ffffff;
    text-align: center;  
   
	
}

textarea{
	font-family: 'Roboto Condensed';
    resize: none;
    height: 15%;
	text-align: center;
	font-size: 16px;
}
.change
{
font-family: 'Fjalla One', sans-serif;
letter-spacing: 2px;
color:#66ff33;
text-shadow: 0 0 10px  #000000, 0 0 10px  #000000,0 0 10px  #000000;
font-weight:lighter;	
}
.btn
{
font-size: 25px;
color: black;
background-color:  #00ffff;
border: 2px solid black;
font-family: 'Fjalla One', sans-serif;
letter-spacing: 2px;
padding: 10px;
width: 150px;
border-radius: 12px;	
}


</style>
</head>
<body>
<center>
<div class="back">
<?php include('menu.php');?>
<?php
$c_id=$_SESSION['c_id'];
$query = "SELECT * FROM customer WHERE C_Id='$c_id' "; 
$result= mysqli_query($conn,$query);
if(mysqli_num_rows($result) == 1)
		{
			while ($row=mysqli_fetch_array($result))
			{
?>
 <form class="formBox"  action="updatepro.php" name="f"  method="POST" />
                  <h1 class="change">Change Profile</h1> <br/><br/>
                <input type="text" class="inp" name="fname" value="<?php echo $row['C_Name'];?>"> <br><br>
                <br>
			   
                <input type="email" class="inp" name="email" value="<?php echo $row['C_Email'];?>" readonly><br><br>
				<br>
				 
                <input type="text" class="inp" name="num" value="<?php echo $row['C_Mobile'];?>"><br><br>
                <br>
				
                <input type="text" class="inp" name="age1" value="<?php echo $row['C_Age'];?>" > <br><br>
				<br>
                
                <p>
                 <?php
	  $male_status = 'unchecked';
	  $female_status = 'unchecked';

    
       $selected_radio = $row['C_Gender'];
	
		if ($selected_radio == 'male') {
			$male_status = 'checked';
		}
		else if ($selected_radio == 'female') {
			$female_status = 'checked';
		}
	 
	?>
	
 <input type="radio" name="gen" value="Male" <?php echo $male_status; ?>> Male &nbsp;
			
  <input type="radio" name="gen" value="Female"value="female" <?php echo $female_status; ?>  > Female &nbsp;
                
				<input type="radio" name="gen" value="other"> Other <br><br><br><br>
                </p>	

                 <textarea rows="10" cols="60" name="address" value=""><?php echo $row['C_Address'];?></textarea><br>
                 <br><br>

                <button type="submit" class="btn" name="login">Submit</button><br><br><br><br>
            </form>






<?php
			}
		}

		?>
	</div>
</center>
</body>
</html>