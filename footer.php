<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet">
<style>
#contact
{
		background-color: #1c1c1d;
		padding-top: 50px;
		border-top: 5px solid rgba(0,0,0,0.1);
}
#contact-left h3,
#contact-right h3
{
		color: white !important;
		font-size: 27px;
		font-weight: 400px;
}
#contact-left p
{
	color: white;
	margin-bottom: 30px;
	font-family:'Fjalla One', sans-serif;
	letter-spacing: 2px;
	font-weight: lighter;
}
#contact-info
{
	background-image: url();
	background-repeat: norepeat;
	background-size: contain;
}
address
{
	color: white;
	font-family: arial;
	
}
address strong
{
		font-size: 16px;
		letter-spacing: 1px;
}

form .form-control
{
	background: transparent;
	border-radius: 0;
	border-color: white;
	font-size: 17px;
	font-weight: 300;
	padding: 8px 16px;
	margin-bottom: 20px;
	color: white;
}
#footer-bottom
{
	background-color: black;
	padding: 30px 0;
	margin-top: -25px;
}
#footer-copyrights p
{
	margin:0;
	color: white;
}
#footer-menu
{
		float: left;
		color: white;
		font-size:16px;
		font-weight: 300;
}
#footer-menu ul
{
	list-style: none;
	padding-left: 0;
	margin: 0;
	
}
#footer-menu ul li
{
	display: inline-block;
	
}
#footer-menu a
{
	color: white;
	font-synthesis: 16px;
	font-weight: 0 10px;
	text-decoration: none;
	font-family:'Fjalla One', sans-serif;
	letter-spacing: 2px;
}
#footer-menu a:hover
{
	color: orange;
}
ul.social-list
{
		display : flex;
		color: white;
		list-style: none;
		margin-left: -40px;
}
ul.social-list a
{
	margin-right: 50px;
	color: white;
}
.feed
{
padding: 10px;
background-color: black;
color: white;
height: 50px;
width: 100px;
margin-bottom: 10px;
font-family:'Fjalla One', sans-serif;
letter-spacing: 2px;
}
.feed1
{
padding: 10px;
background-color: black;
color: white;
height: 50px;
width: 100px;
margin-bottom: 10px;
font-family:'Fjalla One', sans-serif;
letter-spacing: 2px;	
display: block;
text-decoration: none;
text-align: center;
}
</style>


<div id="contact">
	<div class="container">
		<div class="row">
			<br><br>
			<div class="col-md-6">
				<div id="contact-left">
				<h3 style="font-family:'Galada', cursive;font-size: 30px;text-align: center;">Flyhigh</h3>
				<br>
				<p>
					We believe in <strong>Enjoy</strong>,<strong>Entertain</strong> & Make Your Day Wonderfull With Us.
					And Book the Tickets now.
				
				</p>
				<div id="contact-info">
					<address>
						<strong>Address</strong>
						<br>
						<p>Near Bhangardh<br>
						Rajasthan 239900
						
						</p>
					
					</address>
					<div id="phone-fax-email">
						<p>
							<strong>Phone:
								<span>9327495353</span><br/>
							</strong>
							
							<strong>Fax:
								<span>3232939</span><br/>
							</strong>
							
							<strong>Email:
								<span>flyhighamusementpark@gmail.com</span><br/>
							</strong>
						
						</p>
					
					
					</div>
				
				</div>
					<ul class="social-list">
						<li><a href="" class="social-icon"><i class="fa fa-facebook"></i></a></li>
						<li><a href="" class="social-icon"><i class="fa fa-twitter"></i></a></li>
						<li><a href="" class="social-icon"><i class="fa fa-youtube-play"></i></a></li>
						<li><a href="" class="social-icon"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			
			
			</div>
				<div class="col-md-6">
				<div class="contact-right">
					<h3 style="color: white;font-family:'Galada', cursive;font-size: 30px;text-align: center;">Give FeedBack</h3>
					<br>
					<form method="POST" action="footer_process.php">   
						<input type="text" name="full-name" placeholder="Full Name" class="form-control">
						<input type="email" name="email" placeholder="Email Id" class="form-control">
						<textarea name="message"  placeholder="Message.."rows="5" class="form-control"></textarea>
						
						<input type="submit" name="okk" class="feed" value="Submit">
					
						
						
					</form>
			
				</div>
			
			</div>
	
		</div>
	</div>
</div>

<br>

<div id="footer-bottom">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div id="footer-copyrights">
					<p>Copyrights &copy; 2019 All Rights Reserved by Flyhigh Inc.</p>
			
				</div>
			</div>
			<div class="col-md-6">
				<div id="footer-menu">
					<ul>
						<li><a href="index.php">Home</a></li>&nbsp
						<li><a href="rides.php">Rides</a></li>&nbsp
						<li><a href="restaurents.php">Restaurents</a></li>&nbsp
						<li><a href="packages.php">Tickets</a></li>&nbsp
						<li><a href="">About Us</a></li>&nbsp
					</ul>
				
				</div>
			</div>
			
			
			
			
		</div>
	</div>
</div>