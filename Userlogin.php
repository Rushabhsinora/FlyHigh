<?php session_start();
					if(isset($_SESSION['email']))
					{ 
					 echo"<script>window.open('index.php','_self')</script>";
					
					}
					else 
					{
						 
					
					}
					?>

<html>
    <head>
	
		<link href="https://fonts.googleapis.com/css?family=Signika&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/userLogin1.css">
		
    </head>
    <body>
	<script type="text/javascript">
            function vpa()
            {
                var p=f.password.value;
                if(f.email.value=="")
                {
                    document.getElementById('pid2').innerHTML="**Email should not be empty";
                }
                
                
                if(p=='')
                {
                    document.getElementById('pid').innerHTML="**Please enter password";
                    return false;
                }
                  if(p.length<6||p.length>12)
                {
                    document.getElementById('pid').innerHTML="**Password should between 6 and 12";
                    return false;
                }
                if(!/[0-9]/.test(p))
                {
                    document.getElementById('pid').innerHTML="**password may contain digits";
                    return false;
                }
                if(!/[A-Z]/.test(p))
                {
                    document.getElementById('pid').innerHTML="**password should contain Uppercase character";
                    return false;
                }
                if(!/[a-z]/.test(p))
                {
                    document.getElementById('pid').innerHTML="**password should have lowercase character";
                    return false;
                }
                if(f.email.value!="")
                {
                    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(f.email.value))
                        {
                             return true;
                        }
                     else
                        {
                             alert("You have entered an invalid email address!")
                            return false;
                        }
                }

                
            }
        </script>
	<div class="menu">
	<?php include('menu.php');?>
	<div/>
	<div class="content">
	        <div class="mainText">
                <span>F</span>
                <span>l</span>
                <span class="red">y</span>
                <span>h</span>
                <span class="red">i</span>
                <span class="red">g</span>
                <span>h</span>
            </div>
    
            <form class="formBox" method="POST" action="userlogin_process.php" onsubmit="return vpa()" name="f">
                <div class="textForm">
                    <h4>Login in</h4>
                </div>
    
                <input type="text" placeholder="Username" class="usr" name="email"/> <br>
				<span id="pid2" style="color: #4dffa6; font-family: 'Signika', sans-serif;"></span><br>
				
                <input type="password" placeholder="Password" class="pwd" name="password"/> <br>
				 <span id="pid" style="color: #4dffa6; font-family: 'Signika', sans-serif;"></span><br>
				
                <input type="submit" class="btn" value="Login" /> <br><br>
                <a href="forgotpassword.php">Forgot Password?</a> <br><br>
                <a href="regis.php">Register Now</a>
            </form>
			<a href="foodlogin.html" style=" font-size: 27px;color: red;text-decoration: none;font-family: 'Signika', sans-serif;">You Are A Foodcourt Executive?</a><br><br>
			<a href="medicallogin.html" style=" font-size: 27px;color: red;text-decoration: none;font-family: 'Signika', sans-serif;">You Are A Medical Executive?</a>
            <div class="intro">
                
            </div>
        </div>
		<?php include('footer.php');?>
    </body>
</html>