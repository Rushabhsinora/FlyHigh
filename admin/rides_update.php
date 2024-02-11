<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Form_component :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<?php include ('top_menu.php');?>

<?php include ('left_menu.php');?>

<!--header end-->
<!--sidebar start-->
<!--sidebar end-->
<!--main content start-->
<section id="main-content"><br>
	<section class="wrapper">
	<div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Basic Forms
                        </header>
						 <?php
						 $rid=$_GET['update'];
					 
		  include('connect_to_database.php');
		$sql= "SELECT * FROM rides_details where R_Id=$rid";
		 
		if($result= mysqli_query($conn,$sql))
		{
		 	
				while($row = mysqli_fetch_assoc($result))
				{
					
					?>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form"  action="rides_update_process.php?rid=<?php echo $rid;?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group" >
                                    <label for="exampleInputEmail1">Name of ride</label>
                                    <input type="text" class="form-control" value="<?php echo $row['R_Name'];?>" id="exampleInputEmail1" name="name" required>
                                </div>
							
								<div class="form-group" >
                                    <label for="exampleInputEmail1">Details of Rides</label>
                                    <input type="text" class="form-control"  value="<?php echo $row['R_Details'];?>"  name="details" required>
                                </div>
								<div class="form-group" >
                                    <label for="exampleInputEmail1">Age of rides</label>
                                    <input type="text" class="form-control"  value="<?php echo $row['Age'];?>"  name="age" required>
                                </div>
								<div class="form-group" >
                                    <label for="exampleInputEmail1">Enter status of rides </label>
                                    <input type="text" class="form-control"  value="<?php echo $row['Status'];?>"  name="status" required>
                                </div>
								
								<div class="form-group">
                                 <label for="exampleInputEmail1">Enter status id of Ride</label>
                                </br>
								
								<select  name="cats"  class="form-control" required>
									 	<option value="1">Thrilling Rides</option>
										<option value="2">Shows</option>
										<option value="3">Kides Rides</option> 
										 
								</select>
								</div>
								 
	<div class="form-group">
                                    <label for="exampleInputFile">Ride Image</label>
									
									<img src="<?php echo $row['R_Image'];?>" height="100" width="100"><br><br>
                                    <input type="file"   name="uploaded_file">
					<input type="hidden"   value="<?php echo $row['R_Image'];?>"  name="old" required>
                               
							   
                                   
                                </div>
								
                                <button type="submit" class="btn btn-info" name="submit">Submit</button>
                            </form>
                            </div>

                        </div>
		<?php } }?>
                    </section>
					
				  </div> 
     
        </div>
</section>
  
</section>

<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
