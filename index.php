<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="css/index_style.css">
<link href="https://fonts.googleapis.com/css?family=Galada&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet">

<title>FlyHigh</title>
<script src="javascript/snake.js"></script>
<script src="https://cdn.jsdelivr.net/npm/baffle@0.3.6/dist/baffle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
<div class="back">
	<video autoplay loop class="video-background" muted plays-inline>
		<source src="amusement2.mp4" type="video/mp4"/>
	</video>
	<ul class="lightrope">
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
</ul>

	<?php include('config.php');?>
	<?php include('menu.php');?>
	<?php //include('loginmenu.php');?>

		<h1 class="typetext1">You Wanna Be On Roller Coaster!!</h1>
	<div class="text2">
		<h1 class="typetext">Have A Ride With Us.</h1>
	</div>
	 <?php if(isset($_SESSION['email'])){ ?> 
	 
	 
	<div class="button1">
		<a class="btn1_name" href="packages.php">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			Book Now
		</a>
	</div>
	 <?php } else { ?>
	 	<div class="button1">
		<a class="btn1_name" href="Userlogin.php ">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			Book Now
		</a>
	</div>
	 
	 <?php } ?>
	
</div>
<div class="div2">
			<h1 class="entertain">Entertainment</h1>
			<p class="slogan" >Entertainment is Life to Live.</p>
		<script>
			const text=baffle('.entertain');
				text.set({
				characters :'320923oncdsjnvskdnvoiejfown',
				speed: 50
		
		
			});
			text.start();
			text.reveal(10000);
			const text1 = baffle('.slogan');
	
				text1.set({
				characters :'assdnonsdsnsnsdsddsv',
				speed:100
		
			});
	text1.start();
	text1.reveal(25000);
			
			
	</script>
</div>
<div class="div3">
		<p class="entertain_text">
		Entertainment is important as it brings people together and is a good way for the entire family to bond. It diverts people’s attention from their demanding lives and amuses them in their leisure time. Usually, entertainment is fun, enjoyable and pleasurable. Entertainment can take various forms including music, drama, storytelling, movie, sports, dance and traditional performances.
		As life gets increasingly busy, it becomes more difficult for people to spend time with their loved ones. Thus, it is necessary to keep everyone entertained to ensure a relaxing time when a family break does become feasible. Entertainment provides a way to break away from everyday humdrum activity and enjoy a refreshing moment together.
		
		
		</p>
</div> 
<div class="blog-post-section">
<h1 class="customers">Our Quests Says</h1>
	<div class="containter">
		<div class="row">
		
		
			<div class="col-md-4">
				<div class="blog-entry">
					<div class="entry-cover">
						<a href=""><img src="images/person2.jpg" alt=""></a>
					</div>
					<div class="entry-hover">
						<div class="hover-cover real">
						</div>
						<div class="hover-info">
							<img src="images/person2new.jpg" alt="">
							<p class="hover-author">
						
							</p>
							<h2><a href="">BUSINESSWOMEN</a></h2>
							<p class="designation">" Nice place to chill and enjoy vacations<br/>.It releases stress "</p>
							<p class="hover-text">
							
							
							</p>
						</div>
					</div>

			    </div>
		    </div>
		  <div class="col-md-4">
				<div class="blog-entry">
					<div class="entry-cover">
						<a href=""><img src="images/person1.jpg" alt=""></a>
					</div>
					<div class="entry-hover">
						<div class="hover-cover real"></div>
						<div class="hover-info">
							<img src="images/person1new.jpg" alt="">
							<p class="hover-author">
							By John Dolers
							
							</p>
							<h2><a href="">PHOTOGRAPHER</a></h2>
							<p class="designation">" Exciting And Thrilling Rides And Shows.<br/>Highting Features is Parade and Firecrackers "</p>
							<p class="hover-text">
							
							
							</p>
							
						
						</div>
					
					
					
				</div>

			</div>
		</div>
		<div class="col-md-4">
				<div class="blog-entry">
					<div class="entry-cover">
						<a href=""><img src="images/person3.jpg" alt=""></a>
					</div>
					<div class="entry-hover">
						<div class="hover-cover real">
						</div>
						<div class="hover-info">
							<img src="images/person3new.jpg" alt="">
							<p class="hover-author">
							By John Dolers
							
							</p>
							<h2><a href="">NEWS REPORTER</a></h2>
							<p class="designation">" One of the best Amusement Park<br/> in between the Natures Kingdom "</p>
							<p class="hover-text">
							
							
							</p>
							
						
						</div>
				</div>

			</div>
		</div>  
		</div>
    </div>
</div>
<div id="clock"><br>
	<div class="timenow"><h2>The Time is Now</h2></div>
	<div class="timing"><h1>OPENING TIMINGS<h1><p>Monday To Sunday<br/>10:00AM To 10:00PM <br/>Tuesday Closed</p></div>
	
	<div id="time">
	
		<div><span id="hour">00</span><span>Hours</span></div>
		<div><span id="minutes">00</span><span>Minutes</span></div>
		<div><span id="seconds">00</span><span>Seconds</span></div>
	
	</div>
</div>
	<script type="text/javascript">
		function clock()
		{
			var hours = document.getElementById('hour');
			var minutes = document.getElementById('minutes');
			var seconds = document.getElementById('seconds');
			var h = new Date().getHours();
			var m = new Date().getMinutes();
			var s = new Date().getSeconds();
			
			hours.innerHTML = h;
			minutes.innerHTML = m;
			seconds.innerHTML = s;
		}
		var interval = setInterval(clock,1000);


	</script>
<section class="numbers text-center" id="testimonials"><br/>
<h1 class="things_to_khow">Things To Khow</h1>
	<div class="container" > 
		<div class="row">
			<div class="col-md-3">
				<p class="count fs-35 color-fff fw-700">1500</p>
				<h3 class="color-aaa">+ Daily Visiters</h3>
			</div>
			<div class="col-md-3">
				<p class="count fs-35 color-fff fw-700">1345</p>
				<h3 class="color-aaa">+ Ratings</h3>
			</div>
			<div class="col-md-3">
				<p class="count fs-35 color-fff fw-700">1111</p>
				<h3 class="color-aaa">+ Awards</h3>
			</div>
			<div class="col-md-3">
				<p class="count fs-35 color-fff fw-700">11530</p>
				<h3 class="color-aaa">+ Visiters</h3>
			</div>
			
		</div>
	</div>
</section>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
	
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

<script>
	$(function(){
		$('.count').counterUp({
			delay: 17,
			time: 5000
			
		});
	});


</script>
<h1 class="whyus">Why Us?</h1>
	<div class="cards">
			<div class="card">
				<span class="close"></span>
				<span class="arrow"></span>
				<article>
					<h2>Lost And Found</h2>
					<div class="title">Easy Finding Things</div>
					<div class="pic">
						<img src="images/lost1.png" alt="">
					</div>
					<div class="desc">
					Our amusement park will help you
					to find lost things quickly with the help of
					Web Application . It will also help 
					to find any lost family member inside the park.
					</div>
					
				</article>
			</div>
			<div class="card">
				<span class="close"></span>
				<span class="arrow"></span>
				<article>
					<h2>Wheelchairs or Stollers</h2>
					<div class="title">Help for Disables</div>
					<div class="pic">
						<img src="images/wheelchairs2.png" alt="">
					</div>
					<div class="desc">
					Through or Web Application you can also 
					apply the wheelchairs of stollers for 
					Disables.
					</div>
					
				</article>
			</div>
			<div class="card">
				<span class="close"></span>
				<span class="arrow"></span>
				<article>
					<h2>Rides and Shows</h2>
					<div class="title">Proper Planning</div>
					<div class="pic">
						<img src="images/rides.png" alt="">
					</div>
					<div class="desc">
					Our Web Application will provide you full Scheduling of
					all Rides And Shows with Timings.So Now Don't Worry about 
					missing Any Rides or Shows.
					</div>
					
				</article>
			</div>
			<div class="card">
				<span class="close"></span>
				<span class="arrow"></span>
				<article>
					<h2>FoodCourt On Phone</h2>
					<div class="title">Book Your Favourites Dishes</div>
					<div class="pic">
						<img src="images/food1.png" alt="">
					</div>
					<div class="desc">
					Through Web Application you can easily book you food
					from resturants and enjoy your food without
					wasteing time.
					</div>
					
				</article>
			</div>
		</div>
	<div class="cards">
			<div class="card">
				<span class="close"></span>
				<span class="arrow"></span>
				<article>
					<h2>Firecrackers And Parade</h2>
					<div class="title">Attraction Remainders</div>
					<div class="pic">
						<img src="images/firecrackers.png" alt="">
					</div>
					<div class="desc">
					Remainders will always be provided to you 
					for main attraction of amusement park like 
					firecrackers and parade.
					</div>
					
				</article>
			</div>
			<div class="card">
				<span class="close"></span>
				<span class="arrow"></span>
				<article>
					<h2>Medical On Phone</h2>
					<div class="title">Medical Help</div>
					<div class="pic">
						<img src="images/medical.png" alt="">
					</div>
					<div class="desc">
					Incase of Any Injury or any Emergency 
					you can contact to our medical executives through the 
					web application and they will help you fast.
					</div>
					
				</article>
			</div>
			<div class="card">
				<span class="close"></span>
				<span class="arrow"></span>
				<article>
					<h2>Information Centre</h2>
					<div class="title">Any Information</div>
					<div class="pic">
						<img src="images/info.png" alt="">
					</div>
					<div class="desc">
					You Contact us any time through information centre
					inside amusement park and we will try to solve any queries of yours.
					</div>
					
				</article>
			</div>
			
		</div>	
		
	
	<script>
		var closeBtn = document.querySelectorAll(".close"),
			card = document.querySelectorAll(".card"),
			btnActions = document.querySelectorAll(".btn");
			
			closeBtn.forEach(function(el){
			el.addEventListener("click",closeCard);
			
			});
		card.forEach(function(el){
			el.addEventListener("click", openCard);
		
			});
		btnActions.forEach(function(el){
			el.addEventListener("click", clickBtn);
		
			});
			
		function closeCard(event){
			event.stopPropagation();
			event.target.closest(".card").classList.add("closed");
		
		}
		function openCard(event){
			if(event.currentTarget.classList.contains("closed")){
			
			event.currentTarget.classList.remove("closed");
		
			}
		}
	</script>
<h1 class="serve">Our Restaurants Serves</h1>
<div class="food">
<div class="contain">
	<div class="cad">
		<div class="imgBx">
			<img src="images/milkshakes2.jpg">
		</div>
		<div class="cont">
			<div>
				<h2>Milkshakes & Smoothies</h2>
				<p>Here You will get all types of hot and soft drinkings including cold coffee and many more</p>
			
			</div>
		</div>
	</div>
	<div class="cad">
		<div class="imgBx">
			<img src="images/pizza2.jpg">
		</div>
		<div class="cont">
			<div>
				<h2>Fast Foods</h2>
				<p>Our Restaurants serves a large varity of fastfood including Pizza's,Burgers,French Fries and many more.</p>
			
			</div>
		</div>
	</div>
	<div class="cad">
		<div class="imgBx">
			<img src="images/idli2.jpg">
		</div>
		<div class="cont">
			<div>
				<h2>Types of Foods</h2>
				<p>Restaurants serves all types of foods including South Indian,Chineese,Gujarati,Punjabi and many more</p>
			
			</div>
		</div>
	</div>
	<div class="cad">
		<div class="imgBx">
			<img src="images/noodles2.jpg">
		</div>
		<div class="cont">
			<div>
				<h2>Breakfast Options</h2>
				<p>FoodCourt Serves large varity of Breakfast options with reasonable prices.</p>
			
			</div>
		</div>
	</div>
	<a  href="restaurents.php" name="more" class="more" value="Explore More" style="text-decoration: none;">Explore More</a>
</div>
</div>
<div class="choice">
 <div class="selection">
 <h1 class="sel">Choices</h1>
         <div class="select">
             <img class="select-image" src="images/packages3.jpg" alt="">
             <div class="select-title">
                 <a href="" class="toggle-info btn">
                     <span class="left"></span>
                     <span class="right"></span>
                 </a>
                 <h2>
                  PACKAGES 
                 </h2>
             </div> 
             <div class="select-flap flap1">
                 <div class="select-description">
                     Packages are reasonable so book your rides now.
                 </div> 
                 <div class="select-flap flap2">
                     <div class="select-actions">	
                         <a href="packages.php" class="btn">READ MORE</a>
                     </div>
				 
                 </div>
					
             </div> 
 			 
         </div>
         
         
         
          <div class="select">
             <img class="select-image" src="images/rides5.jpg" alt="">
             <div class="select-title">
                 <a href="" class="toggle-info btn">
                     <span class="left"></span>
                     <span class="right"></span>
                 </a>
                 <h2>
                  RIDES
				</h2>
             </div>
             
             <div class="select-flap flap1">
                 <div class="select-description">
                     All the rides and shows are best in amusement park.
                 </div>
                 <div class="select-flap flap2">
                     <div class="select-actions">
                         <a href="rides.php" class="btn">READ MORE</a>
                     </div>
                 </div>
             </div>          
         </div>
         
         
          <div class="select">
             <img class="select-image" src="images/map3.jpg" alt="">
             <div class="select-title">
                 <a href="" class="toggle-info btn">
                     <span class="left"></span>
                     <span class="right"></span>
                 </a>
                 <h2>
                  PARK MAP
                 </h2>
             </div>
             
             <div class="select-flap flap1">
                 <div class="select-description">
                     See the map of our park from here.
                 </div>
                 <div class="select-flap flap2">
                     <div class="select-actions">
                         <a href="" class="btn">READ MORE</a>
                     </div>
                 </div>
             </div>          
         </div>
		</div>
	</div>
    <script>
     
     $(document).ready(function(){
  var zindex = 10;
  
  $("div.select").click(function(e){
    e.preventDefault();

    var isShowing = false;

    if ($(this).hasClass("show")) {
      isShowing = true
    }

    if ($("div.selection").hasClass("showing")) {
      // a card is already in view
      $("div.select.show")
        .removeClass("show");

      if (isShowing) {
        // this card was showing - reset the grid
        $("div.selection")
          .removeClass("showing");
      } else {
        // this card isn't showing - get in with it
        $(this)
          .css({zIndex: zindex})
          .addClass("show");

      }

      zindex++;

    } else {
      // no cards in view
      $("div.selection")
        .addClass("showing");
      $(this)
        .css({zIndex:zindex})
        .addClass("show");

      zindex++;
    }
    
  });
});
</script>
<h1 class="gallary">Gallary</h1>
	<div class="rec">
	
         <div class="recbox">
             <img src="images/hh.JPG" alt="">
             <span>Recoil-Reverse Roller Coaster</span>
         </div>
         
         <div class="recbox">
             <img src="images/hh1.JPG" alt="">
             <span>Horse Carousel</span>
         </div>
         
         
          <div class="recbox">
             <img src="images/hh2.JPG" alt="">
             <span>Space Gun</span>
         </div>
         
          
          <div class="recbox">
             <img src="images/hh4.jpg" alt="">
             <span>Equninox 360</span>
         </div>
          
     </div>
<h1 class="followus">Follow Us On</h1>
<div class="icon">

	<ul class="foll">
		<li id="facebook_icon"><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
		<li id="twitter_icon"><a href="https://twitter.com/login"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
		<li id="g_plus_icon"><a href="https://aboutme.google.com"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
		<li id="linkedin_icon"><a href="https://www.linkedin.com/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
		<li id="instagram_icon"><a href="https://www.instagram.com/flyhighamusementpark/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
	</ul>
</div>
     
<?php include('footer.php');?>
 <?php 
 
if(isset($_SESSION['c_id']))
{	
 $cid=$_SESSION['c_id'];
 $query = "UPDATE customer SET Me_Status='0' WHERE C_Id='$cid' "; 
	if(!mysqli_query($conn,$query))
	{
		
	//echo "<script>alert('Not Upadated')</script>";
		//echo "<script>window.location='Userlogin.html'</script>";
	}
	else
	{
	//echo "<script>alert('Data updated')</script>";
	//echo "<script>window.location='index.php'</script>";
	}
   
}  



?>
</body>
</html>