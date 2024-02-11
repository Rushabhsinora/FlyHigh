<?php
include('connect_to_database.php');
if(isset($_GET['delete']))
{
$delete=$_GET['delete'];
$sql="DELETE FROM rides_details WHERE R_Id=$delete";
//echo $sql;
if (mysqli_query($conn,$sql))
{ 
	
	echo "<script> alert('Delete')</script>";
	echo"<script>window.open('rides.php','_self')</script>";
	
}
else
{


	echo "<script> alert('Error')</script>";
	echo"<script>window.open('rides.php','_self')</script>";
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
                            Basic Forms
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" name="restaurant" action="rides_add_process.php" method="POST" enctype="multipart/form-data">
								<div class="form-group" >
                                    <label for="exampleInputEmail1"> Ride Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="name" required>
                                </div>
								<div class="form-group">
                                    <label for="exampleInputFile">Ride Image</label>
                                    <input type="file" id="exampleInputFile" name="u_file" required>
                               
                                </div>
								<div class="form-group" >
                                    <label for="exampleInputEmail1">  Details</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter details" name="details" required>
                                </div>
								<div class="form-group" >
                                    <label for="exampleInputEmail1">Age of Ride</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter details" name="age" required>
                                </div>
								<div class="form-group" >
                                    <label for="exampleInputEmail1">Status of Ride</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter details" name="status" required>
                                </div>
								
								<div class="form-group">
                                 <label for="exampleInputEmail1">Enter status id of Ride</label>
                                </br>
								
								<select  name="s_id"class="form-control" required>
									 	<option value="1">Thrilling Rides</option>
										<option value="2">Shows</option>
										<option value="3">Kides Rides</option> 
										 
								</select>
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
		  <th>R_Id</th>
		  <th>R_Name</th>
		  <th>R_Image</th>
		  <th>R_Details</th>
		  <th>Age</th>
		  <th>Status</th>
		  <th>S_Id</th>
		  <th>P_Update</th>
		  <th>P_Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php
		  include('connect_to_database.php');
		$sql= "SELECT * FROM rides_details";
			//echo $sql;
		if($result= mysqli_query($conn,$sql))
		{
			if(mysqli_num_rows($result)>0)
			{
				
				
				while($row = mysqli_fetch_assoc($result))
				{
					?>
					<tr>
					<td><?php echo $row['R_Id']; ?></td>
					<td><?php echo $row['R_Name']; ?> </td>
					<td><img src="<?php echo $row['R_Image'];?>" width="75" height="75"></td>
					<td><?php echo $row['R_Details']; ?></td>
					<td><?php echo $row['Age']; ?></td>
					<td><?php echo $row['Status']; ?></td>
					<td><?php echo $row['S_Id']; ?></td>
					<td><a href="rides_update.php?update=<?php echo $row['R_Id'];?>"><input type="button" value="Update"></a></td>
					<td><a href="rides.php?delete=<?php echo $row['R_Id'];?>"><input type="button" value="Delete"></a></td>
					
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