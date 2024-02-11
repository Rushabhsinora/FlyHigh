 <?php
include('connect_to_database.php');
if(isset($_GET['delete']))
{
$delete=$_GET['delete'];
$sql="DELETE FROM restaurants_details WHERE Re_Id=$delete";
if (mysqli_query($conn,$sql))
{
			echo "<script>alert('restaurant Delete')</script>";
			echo"<script>window.open('restaurant.php','_self')</script>";
}
else
{
			echo "<script>alert('restaurant Delete Error')</script>";
			echo"<script>window.open('restaurant.php','_self')</script>";
}
}

$conn -> close();
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

<?php include ('left_menu.php');?>
 
<section id="main-content">
	<section class="wrapper">
	<div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Restaurant  Add
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" name="restaurant" action="restaurant_add_process.php" method="POST" enctype="multipart/form-data">
								<div class="form-group" >
                                    <label for="exampleInputEmail1">Restaurant Name</label>
                                    <input type="text" class="form-control"   placeholder="Enter name" name="name" required>
                                </div>
								<div class="form-group" >
                                    <label for="exampleInputEmail1">Restaurant Type</label>
                                    <input type="text" class="form-control" placeholder="Enter type" name="type" required>
                                </div>
								<div class="form-group" >
                                    <label for="exampleInputEmail1">Restaurant Details</label>
                                    <input type="text" class="form-control"   placeholder="Enter details" name="details" required>
                                </div>
								<div class="form-group">
                                    <label for="exampleInputFile">Restaurant Front Image</label>
                                    <input type="file" name="file1">
                                    
                                </div>
								<div class="form-group" >
                                    <label for="exampleInputEmail1">Front Catelog Items Display</label>
                                    <input type="text" class="form-control" placeholder="Enter details" name="catelog" required>
                                </div>
								<div class="form-group">
                                    <label for="exampleInputFile">Catelog  Image</label>
                                    <input type="file"   name="file2">
                                    
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
     Basic table
    </div>
	
    <div>
      <table class="table">
        <thead>
          <tr>
		  <th>Re_Id</th>
		  <th>Re_Name</th>
		  <th>Re_Type</th>
		  <th>Re_Details</th>
		  <th>Re_Image</th>
		  <th>F_Cat</th>
		  <th>F_Img</th>
		  <th>P_Update</th>
		  <th>P_Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php
		  include('connect_to_database.php');
		$sql= "SELECT * FROM restaurants_details	";
		//echo $sql;
		if($result= mysqli_query($conn,$sql))
		{
			if(mysqli_num_rows($result)>0)
			{
				
				while($row = mysqli_fetch_assoc($result))
				{
					?>
					<tr>
					<td><?php echo $row['Re_Id']; ?></td>
					<td><?php echo $row['Re_Name']; ?> </td>
					<td><?php echo $row['Re_Type']; ?></td>
					<td><?php echo $row['Re_Details']; ?></td>
					<td><img src="<?php echo $row['Re_Image'];?>" width="75" height="75"></td>
					<td><?php echo $row['F_Cat']; ?></td>
					<td><img src="<?php echo $row['F_Img'];?>" width="75" height="75"></td>


					<td><a href="restaurant_update.php?update=<?php echo $row['Re_Id'];?>"><input type="button" value="Update"></a></td>
					<td><a href="restaurant.php?delete=<?php echo $row['Re_Id'];?>"><input type="button" value="Delete"></a></td>
					
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