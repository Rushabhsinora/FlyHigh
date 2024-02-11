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

  /*  $sql = "SELECT * from customer where C_id=" . $_GET['id'];
    $res = $conn->query($sql);
  
      if ($res->num_rows == 1) {
          while($row = $res->fetch_assoc()){
              $cName = $row['C_Name'];
          }
      }
  
      $_SESSION['name'] = $cName;
      $_SESSION['id'] = $_GET['id'];*/
?>

<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
    <style>
	
        .box{
            position: relative;
            width: 45%;
            height: 90%;
            border: 2px solid white;
            margin: auto;
            top: 5%;
			
        }

        .box .name{
            position: absolute;
            width: 100%;
            height: 20px;
            background: lightblue;
            text-align: center;
			font-family:'Rubik', sans-serif;
			color: black
			letter-spacing: 3px;
			font-weight: bold;
		
        }

        .box .content{
            padding: 20px 10px 0 20px;
            overflow: scroll;
            width: auto;
            height: 75%;
            background: lightgreen;
        }

        .box .text{
            position: absolute;
            width: 100%;
            bottom: 0;
        }

        .box .content p.time{
            text-align: right; 
            width: 100%;
        }

        .home{
            position: relative;
            top: 4%;
            left: 5%;
			
        }
		 .nav
{
		display: inline-flex;
		position: relative;
		/*overflow: hidden;*/
		width: 51%;
		background-color: #f2f2f2;
		border-radius: 30px;
		box-shadow: 0 10px 40px rgba(150,172,177,0.8);
		margin-left:400px;
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

		
    </style>
</head>
<body bgcolor="black" style="height:100vh;">
<?php include('menu.php');?>
<h1 style="color: red; font-family:'Rubik', sans-serif;font-weight: bolder;color:  #53ff1a;letter-spacing: 2px;padding-top: 30px;"><center>Need Any Help! Talk With Our Doctors</center></h1>

<div class="home">
        <a href="index.php" style="text-decoration: none;color: #53ff1a;border: 2px solid white;padding: 10px;font-family:'Rubik', sans-serif;">Go Back!</a>
    </div>
    <div class="box">
        <div class="name"><?php echo "You chat with Medical Executive"; ?></div>
        <div class="content">
            <?php
                $cName = $_SESSION['name'];
                $sql2 = "SELECT * from custoadm where C_Name='$cName' OR Me_Name='$cName'";
                $res2 = $conn->query($sql2);

                if ($res2->num_rows > 0) 
				{
                    while($row2 = $res2->fetch_assoc())
					{
                        //$usr = $row2['C_Name'];
                        if($row2['C_Name'] != $cName)
						{
			?>

						 <h3 id='cus' style="color:red; text-align: right"><?php $row2['Me_Name'];?></h3>
                        <p style=" text-align: right"><?php echo $row2['comment'];?></p>
			<?php
                        }
			
                        else
						{
			?>
                             <h3 id='cus' style="color:blue; text-align: left">Medical Executive</h3>
                             <p style="text-align: left"><?php echo $row2['comment'];?> </p>;
            <?php
                        }
                    }
                }
            ?>
        </div>
        <div class="text">
            <form method="post" action="sentToDB2.php">
                <textarea name="message" rows="5" cols="70" style="padding-top: 7px; margin-left: 45px; text-align: center;border:2px solid red; border-radius: 10px;" placeholder="Type something here..."></textarea><br/>
                <input type="submit" value="Send" style="margin-left: 250px;font-size: 20px; margin-bottom: -10px; border:2px solid red;border-radius: 30px;height: 30px;width: 100px;font-family:'Rubik', sans-serif;color: black;font-weight: bolder;"/>
            </form>
        </div>
    </div>
</body>
</html>