<?php
	include('config.php');
	
?>
<!DOCTYPE html>
<head>
<title>Restaurents</title>
<link rel="stylesheet" href="css/restaurents.css">
<link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">


</head>
<body>
	<div class="back">
	<?php include('menu.php');?>
	<video autoplay loop class="video-background" muted plays-inline>
		<source src="amusement5.mp4" type="video/mp4"/>
	</video>
	<h1 class="pack_text">Restaurents..</h1>
	</div>

	 <nav id="locate">
				<button id="prev" class="locate-item" data-increment="-1">
						<img src="images/icon-prev.png" alt="prev" />
				</button>
				
				<button id="next" class="locate-item" data-increment="1">
						<img src="images/icon-next.png" alt="next" />
				</button>
    </nav>
	 <section class="carousel">
      <div class="stage">
	  <?php
		$query = "SELECT * FROM restaurants_details ORDER BY Re_Id ASC"; 
		$result= mysqli_query($conn,$query);
		if(mysqli_num_rows($result) > 0)
		{
			while ($row=mysqli_fetch_array($result))
			{
	  
	  ?>
	  
        
        <!-- coidea:slideshow:item START -->
        <div class="item">
          <div class="bcg" style="background-image: url('admin/<?php echo $row['Re_Image'];?>"></div>
          <div class="content">
            <div class="description">
              <p class="description-target"><?php echo $row['Re_Id'];?></p>
            </div>
            <div class="headline">
              <h2 class="headline-target"><?php echo $row['Re_Name'];?></h2>
            </div>
            <div class="discover-more">
              <a href="restaurentmenu.php" class="discover-more-target">View Menu</a>
			 
            </div>
          </div>
        </div>
		<?php
			}
			
		}
		?>
		
		
		
		
	 </div>
	 
    </section> 


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@4.1.4/imagesloaded.pkgd.min.js"></script>
    <script src="javascript/demo.js"></script>



</body>
</html>
