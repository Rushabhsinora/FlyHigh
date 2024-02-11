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
						 $pid=$_GET['update'];
						 
		  include('connect_to_database.php');
		$sql= "SELECT * FROM packages_details where P_Id=$pid";
		//echo $sql;
		if($result= mysqli_query($conn,$sql))
		{
		 	
				while($row = mysqli_fetch_assoc($result))
				{
					
					?>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form"  action="packages_update_process.php?pid=<?php echo $pid;?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group" >
                                    <label for="exampleInputEmail1">Package Name</label>
                                    <input type="text" class="form-control" value="<?php echo $row['P_Name'];?>" id="exampleInputEmail1" name="name" required>
                                </div>
								<div class="form-group" >
                                    <label for="exampleInputEmail1">Price </label>
                                    <input type="text" class="form-control"  value="<?php echo $row['P_Price'];?>"  name="price" required>
                                </div>
								
								
								
								<div class="form-group" >
                                    <label for="exampleInputEmail1">Details</label>
                                    <input type="text" class="form-control"  value="<?php echo $row['P_Details'];?>"  name="details" required>
                                </div>
								
                                <div class="form-group">
                                    <label for="exampleInputFile">Image</label>
									
									<img src="<?php echo $row['P_Image'];?>" height="100" width="100"><br><br>
                                    <input type="file"   name="uploaded_file">
                                    <input type="hidden"  value="<?php echo $row['P_Image'];?>"   name="old" required>
                                   
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
