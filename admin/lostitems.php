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
<?php include('connect_to_database.php');
?>
<?php include ('left_menu.php');?>
<!--header end-->
<!--sidebar start-->
<!--sidebar end-->
<!--main content start-->
<section id="main-content">	
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
		  <th>Lost Item Id</th>
		  <th>Lost Item Name</th>
		  <th>Customer Id</th>
		  <th>Status</th>
        </tr>
        </thead>
        <tbody>
          <?php
		  include('connect_to_database.php');
		$sql= "SELECT * FROM lost_items";
		//echo $sql;
		if($result= mysqli_query($conn,$sql))
		{
			if(mysqli_num_rows($result)>0)
			{
				
				while($row = mysqli_fetch_assoc($result))
				{
					?>
					<tr>
					<td><?php echo $row['Lt_Id']; ?></td>
					<td><?php echo $row['Lt_Name']; ?> </td>
					<td><?php echo $row['C_Id']; ?></td>
					<td><?php echo $row['Status']; ?></td>
					
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