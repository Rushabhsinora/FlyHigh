 
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
						 $fid=$_GET['update'];
						 
		  include('connect_to_database.php');
		$sql= "SELECT * FROM fooditems where F_Id=$fid";
 
		if($result= mysqli_query($conn,$sql))
		{
		 	
				while($row = mysqli_fetch_assoc($result))
				{
					
					?><div class="panel-body">
                            <div class="position-center">
                                <form role="form" name="f" action="fooditems_update_process.php?fid=<?php echo $row['F_Id'];?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group" >
                                    <label for="exampleInputEmail1">Food Name</label>
                                    <input type="text" class="form-control" value="<?php echo $row['F_Name'];?>" name="name" required>
                                </div>
								<div class="form-group" >
                                    <label for="exampleInputEmail1">Food Type</label>
                                    <input type="text" class="form-control" value="<?php echo $row['F_Type'];?>" name="type" required>
                                </div>
								<div class="form-group" >
                                    <label for="exampleInputEmail1">Food Contents</label>
                                    <input type="text" class="form-control" value="<?php echo $row['F_Contents'];?>" name="contents" required>
                                </div>
								
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Food Price</label>
                                    <input type="text" class="form-control" value="<?php echo $row['F_Price'];?>" name="price" required>
                                </div>
								<div class="form-group">
                                <label for="cc-payment" >Restaurant Name</label>
                                </br>
								<?php $re_id= $row['Re_Id']; ?>
								<select name="select" class="form-control" required>
									
									<?php
									$sql1="select * from restaurants_details";
									$res1 = mysqli_query($conn,$sql1);
									if($res1->num_rows > 0)
									{
									   while($row1= mysqli_fetch_assoc($res1))
									   {
										?> 
										<option value="<?php echo $row1['Re_Id']; ?>"><?php echo $row1['Re_Name']; ?> </option>
										<?php
									   }
									}
									else
									{
									   echo '<option value="">restaurant is  not available</option>';
									}
									?>
								</select>
								</div>
								<div class="form-group">
                                    <label for="exampleInputPassword1">Quantity</label>
                                    <input type="text" class="form-control" value="<?php echo $row['Quantity'];?>" name="quantity" required>
                                </div>
								<div class="form-group">
                                    <label for="exampleInputFile">Upload Image</label>
									<img src="<?php echo $row['F_Image'];?>" height="70" width="70"><br><br>
                                    <input type="file" name="uploaded_file">
                                    <input type="text" name="oldimg" value="<?php echo $row['F_Image']; ?>">
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
	