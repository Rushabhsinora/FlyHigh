<?php
include('connect_to_database.php');
if(isset($_GET['delete']))
{
	$Fe_Id=$_GET['delete'];
	$sql="DELETE FROM foodcourt_executive WHERE Fe_Id=$Fe_Id";
	//echo $sql;
	if (mysqli_query($conn,$sql))
	{
			echo "<script> alert('Deleted')</script>";
			echo"<script>window.open('food_executive.php','_self')</script>";
	}
	else
	{
	echo "<script> alert('Deleted Error')</script>";
	echo"<script>window.open('food_executive.php','_self')</script>";
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
                            Executive Add
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" name="f" action="food_executive_add_process.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group" >
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control"   placeholder="Enter name" name="name" required>
                                </div>
								<div class="form-group" >
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control"   placeholder="Enter email" name="email" required>
                                </div>
								<div class="form-group" >
                                    <label for="exampleInputEmail1">Executive Password</label>
                                    <input type="password" class="form-control"   placeholder="Enter password" name="password" required>
                                </div>
								<div class="form-group">
                                <label for="cc-payment">Restaurant Name</label>
                                </br>
								
								<select name="select" class="form-control">
									<option value="0">Please Select </option>
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
									   echo '<option value="">restaurant is  not available</option>';
									}
									?>
								</select>
								</div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Age</label>
                                    <input type="text" class="form-control"  placeholder="Enter age" name="age" required>
                                </div>
								
								<div class="form-group">
                                    <label for="exampleInputPassword1">Gender</label>
                                    <input type="text" class="form-control" placeholder="Enter gender" name="gender" required>
                                </div>
								<div class="form-group">
                                    <label for="exampleInputPassword1">Salary</label>
                                    <input type="text" class="form-control" placeholder="Enter salary" name="salary" required>
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
     Executive  List
    </div>
	
    <div>
      <table class="table">
        <thead>
          <tr>
		  <th>#</th>
		  <th>  Name</th>
		  <th>  Email</th>
		 
		  <th>Restaurant Name</th>
		  <th>  Age</th>
		  <th>  Gender</th>
		  <th>  Salary</th>
		  <th>  Update</th> 
		  <th>  Delete</th> 
          </tr>
        </thead>
        <tbody>
          <?php
		  include('connect_to_database.php');
		$sql= "SELECT * FROM foodcourt_executive";
		//echo $sql;
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
					<td><?php echo $row['Fe_Name']; ?> </td>
					<td><?php echo $row['Fe_Email']; ?></td> 
					<td><?php echo $row['Re_Id']; ?></td>
					<td><?php echo $row['Fe_Age']; ?></td>
					<td><?php echo $row['Fe_Gender']; ?></td>
					<td><?php echo $row['Fe_Salary']; ?></td>
					<td><a href="food_executive_update.php?update=<?php echo $row['Fe_Id'];?>"><input type="button" value="Update"></a></td>
					<td><a href="food_executive.php?delete=<?php echo $row['Fe_Id'];?>"><input type="button" value="Delete"></a></td>
 
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
