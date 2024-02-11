<?php
include('connect_to_database.php');
if(isset($_GET['delete']))
{
	$delete=$_GET['delete'];
	$sql="DELETE FROM fooditems WHERE F_Id=$delete";
	//echo $sql;
	if (mysqli_query($conn,$sql))
	{
		echo "<script> alert('Item Deleted')</script>";
			echo"<script>window.open('fooditems.php','_self')</script>";
	}
	else
	{
	echo "<script> alert('Item Deleted Error')</script>";
	echo"<script>window.open('fooditems.php','_self')</script>";
	}
}
?>
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
<?php include('connect_to_database.php');
?>
<?php include ('left_menu.php');?>
<!--header end-->
<!--sidebar start-->
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
	<div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Food Items Add
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" name="f" action="fooditems_add_process.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group" >
                                    <label for="exampleInputEmail1">Food Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter food name" name="fname" required>
                                </div>
								<div class="form-group" >
                                    <label for="exampleInputEmail1">Food Type</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter food type" name="ftype" required>
                                </div>
								<div class="form-group" >
                                    <label for="exampleInputEmail1">Food Contents</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter food contents" name="fcontents" required>
                                </div>
							
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Food Price</label>
                                    <input type="text" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57' autocomplete="off" placeholder="Enter food price" name="fprice" required>
                                </div>
								<div class="form-group">
                                <label for="cc-payment" >Select  Restaurant</label>
                                </br>
								
								<select name="fselect" class="form-control" required>
									<option value="0">Please Select Restaurant  </option>
									<?php
									$sql="select * from restaurants_details";
									$res = mysqli_query($conn,$sql);
									if($res->num_rows > 0)
									{
									   while($row= mysqli_fetch_assoc($res))
									   {
										?>
										<option value="<?php echo $row['Re_Id']; ?>"><?php echo $row['Re_Name']; ?> </option>
										<?php
									   }
									}
									else
									{
									   echo '<option value="">Restaurant is  not Available</option>';
									}
									?>
								</select>
								</div>
								<div class="form-group">
                                    <label for="exampleInputPassword1">Quantity</label>
                                    <input type="text" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57' autocomplete="off" placeholder="Enter food quantity" name="fquantity" required>
                                </div>
								<div class="form-group">
                                    <label for="exampleInputFile">Upload Image</label>
                                    <input type="file" name="file" required>
                                    <p class="help-block">Example block-level help text here.</p>
                                </div>
								<button type="submit" class="btn btn-info" name="submit">Submit</button>
                            </form>
                            </div>

                        </div>
                    </section>
					
				  </div> 
     
        </div>
	</section>
	<section class="wrapper">
	
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
    Items List
    </div>
	
    <div>
      <table class="table">
        <thead>
          <tr>
		  <th>#</th>
		  <th>Food Name</th>
		  <th>Type</th>
		  <th>Contents</th>
		  <th>Image</th>
		  <th>Price</th>
		  <th>Restaurant</th>
		  <th>Quantity</th>
		  <th>Update</th>
		  <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php
		  include('connect_to_database.php');
		$sql= "SELECT * FROM fooditems";
	 	if($result= mysqli_query($conn,$sql))
		{
			if(mysqli_num_rows($result)>0)
			{
				$cnt=1;
				while($row = mysqli_fetch_assoc($result))
				{
					?>
					<tr>
					<td><?php echo $cnt++; ?></td>
					<td><?php echo $row['F_Name']; ?> </td>
					<td><?php echo $row['F_Type']; ?></td>
					<td><?php echo $row['F_Contents']; ?></td>
					<td><img src="<?php echo $row['F_Image'];?>" width="75" height="75"></td>
					<td><?php echo $row['F_Price']; ?></td>
					<td><?php 
					$rid=$row['Re_Id'];
					$sql1= "SELECT * FROM restaurants_details where Re_Id='$rid'";
					 $result1= mysqli_query($conn,$sql1);
					while($row1 = mysqli_fetch_assoc($result1))
				{
				echo $row1['Re_Name'];
				}
				
					
					
				   ?></td>
					<td><?php echo $row['Quantity']; ?></td>
					 
					<td><a href="fooditems_update.php?update=<?php echo $row['F_Id'];?>"><input type="button" value="Update"></a></td>
					<td><a href="fooditems.php?delete=<?php echo $row['F_Id'];?>"><input type="button" value="Delete"></a></td>
					
						</tr>
						
					<?php
				}
				?>
				</tbody>
				</table>
				<?php 
			}
			else
			{
				echo "no records found";
			}
		}?>
		
    </div>
  </div>
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
