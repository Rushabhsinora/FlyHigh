 
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
						 $reid=$_GET['update'];
						 //echo $reid;
		  include('connect_to_database.php');
		$sql= "SELECT * FROM restaurants_details where Re_Id=$reid";
		//echo $sql;
		if($result= mysqli_query($conn,$sql))
		{
		 	
				while($row = mysqli_fetch_assoc($result))
				{
					
					?>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form"  action="restaurants_update_process.php?reid=<?php echo $reid;?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group" >
                                    <label for="exampleInputEmail1">Restaurant Name</label>
                                    <input type="text" class="form-control" value="<?php echo $row['Re_Name'];?>" id="exampleInputEmail1" name="name" required>
                                </div>
								<div class="form-group" >
                                    <label for="exampleInputEmail1">Restaurant Type</label>
                                    <input type="text" class="form-control"  value="<?php echo $row['Re_Type'];?>"  name="type" required>
                                </div>
								<div class="form-group" >
                                    <label for="exampleInputEmail1">Restaurant Details</label>
                                    <input type="text" class="form-control"  value="<?php echo $row['Re_Details'];?>"  name="details" required>
                                </div>
									
								<div class="form-group" >
                                    <label for="exampleInputEmail1">Front Catelog Items Display</label>
                                    <input type="text" class="form-control"  value="<?php echo $row['F_Cat'];?>"  name="menu" required>
                                </div>
								<div class="form-group">
                                    <label for="exampleInputFile">Restaurant Front Image</label>
									<img src="<?php echo $row['Re_Image'];?>" height="100" width="100"><br><br>
                                    <input type="file"   name="uploaded_file">
                                    <input type="hidden" class="form-control"  value="<?php echo $row['Re_Image'];?>"  name="old1" required>
                                  
                                </div>
							
								<div class="form-group">
                                    <label for="exampleInputFile">Catelog Image</label>
									<img src="<?php echo $row['F_Img'];?>" height="100" width="100"><br><br>
                                    <input type="file"   name="uploaded_file1">
                                     <input type="hidden" class="form-control"  value="<?php echo $row['F_Img'];?>"  name="old2" required>
                                 
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
