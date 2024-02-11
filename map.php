<?php
include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
<style>
* {box-sizing: border-box;}

.img-magnifier-container {
  position:relative;
  margin-left: 300px;
  
}

h1{
font-size:40px;
}


table {
  
  width: 60.5%;
  background-color:#fff;
  color:white;
  text-allign:left;
  
}

.img-magnifier-glass {
  position: absolute;
  border: 3px solid #000;
  border-radius: 50%;
  cursor: none;
  width: 200px;
  height: 200px;
  
}

	table {
  border: 1px solid black;
  margin-left: 304px;
} 
.a
{ 
Font-size:13px;
font-family:'Rubik', sans-serif;
color: #000;
 }
 .map
 {
 color: #53ff1a;
 text-align: center;
 font-family: 'Fjalla One', sans-serif;
 font-size: 50px;
 padding-top: 10px;
 letter-spacing: 2px;
 font-weight: lighter;
 
 }
 .nav
{
		display: inline-flex;
		position: relative;
		/*overflow: hidden;*/
		width: 51%;
		background-color: #f2f2f2;
		border-radius: 30px;
		box-shadow: 0 10px 40px rgba(150,172,177,0.8);
		margin-left:400px;
		margin-top:50px;
		height: 60px;
		margin-right: 220px;

		
}
.nav-item
{
	color:  #262626;
	padding: 20px;
	text-decoration: none;
	transition: 0.3s;
	margin: 0 7px;
	z-index: 1;
	font-family: 'Fjalla One', sans-serif;
	font-weight: 500;
	position: relative;
	
	
}
.nav-item:before
{
	content: "";
	position: absolute;
	bottom: -7px;
	left: 0;
	width: 100px;
	height: 5px;
	background-color: #000000;
	border-radius: 1px 1px 0 0 ;
	opacity: 0;
	transition: 0.3s;
}
.nav-item:not(.is-active):hover:before
{
	opacity:1;
	bottom: 0;
}
.nav-item:not(.is-active):hover
{
	color: #1aff1a;
	
}
.nav-indicator
{
	position: absolute;
	left: 0;
	bottom: 0;
	height: 4px;
	transition: 0.4s;
	height: 5px;
	z-index: 1;
	border-radius: 8px 8px 0 0;
	
}

</style>
<script>
function magnify(imgID, zoom) {
  var img, glass, w, h, bw;
  img = document.getElementById(imgID);
  
  glass = document.createElement("DIV");
  glass.setAttribute("class", "img-magnifier-glass");
  
  img.parentElement.insertBefore(glass, img);
  
  glass.style.backgroundImage = "url('" + img.src + "')";
  glass.style.backgroundRepeat = "no-repeat";
  glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
  bw = 3;
  w = glass.offsetWidth / 2;
  h = glass.offsetHeight / 2;
  
  glass.addEventListener("mousemove", moveMagnifier);
  img.addEventListener("mousemove", moveMagnifier);
  
  glass.addEventListener("touchmove", moveMagnifier);
  img.addEventListener("touchmove", moveMagnifier);
  function moveMagnifier(e) {
    var pos, x, y;
    
    e.preventDefault();
    
    pos = getCursorPos(e);
    x = pos.x;
    y = pos.y;
    
    if (x > img.width - (w / zoom)) {x = img.width - (w / zoom);}
    if (x < w / zoom) {x = w / zoom;}
    if (y > img.height - (h / zoom)) {y = img.height - (h / zoom);}
    if (y < h / zoom) {y = h / zoom;}
    
    glass.style.left = (x - w) + "px";
    glass.style.top = (y - h) + "px";
    
    glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
  }
  function getCursorPos(e) {
    var a, x = 0, y = 0;
    e = e || window.event;
    
    a = img.getBoundingClientRect();
    
    x = e.pageX - a.left;
    y = e.pageY - a.top;
    
    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return {x : x, y : y};
  }
}
</script>
</head>
<body bgcolor="black">
<?php include('menu.php');?>
	
<h1   class="map">FLYHIGH MAP<h1/>

<div class="img-magnifier-container">
  <img id="myimage" src="images/map1.jpg" width="802" height="402">
</div>








<script>

magnify("myimage", 2);
</script>


<table class="a">
<tr>
 <th>  Thrill Rides</th>      
  <th> Kids Rides</th>       
   <th> Shows   </th>              
 <th>  Restaraunts </th>
</tr> 

<tr>
   <td>1) Equinox 360 </td> 
<td>   1) Hourse Carrousel </td> 
 <td>  1) Space 360</td> 
<td>   1) Armada Cafe</td> 

<tr>
   <td>2) Skywheel </td> 
    <td> 2) Bang Bang</td>
	<td> 2) Detective Bow Wow Show</td>
	<td>2) Roberto Foodcourt</td>
<tr/> 
<tr>  
   <td>3) Recoil-Roller Coaster </td> 
     <td>3) Dholakpur the ride</td>
	 <td>3) Explore 7 Wonders of the show</td>
	 <td> 3) Ammos Restro</td>
</tr> 
<tr>  
   <td>4) Spacegun</td>
   </tr>

   <tr>
   <td>5) Flash Tower</td>
   <tr/>
   
   <tr>
   <td>6) Dinosaur River adventure</td>
   </tr>
   <tr>
   <td>7) Pirates water battle</td>
   </tr>
   
   <tr>
 <td>8) Salimgadh</td>
 </tr>
 

	</table>
	


</body>
</html>