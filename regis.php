<html>
    <head>
		<link href="https://fonts.googleapis.com/css?family=Signika&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/regis.css">
    </head>
    <body>
	<script type="text/javascript">
        	function passwordcheck()
        	{
                
        		var pas=f.pass.value;
        		var pas2=f.pass2.value;
        		var mobileno=f.num.value;
        		var ages=f.yearsold.value;
				var add=f.address.value;
                var phoneno = /^\d{10}$/;
                if(f.fname.value=='')
                {
                    document.getElementById('errpassword5').innerHTML="**Name should not be empty";
                    return false;
                }
                 if(f.email.value=='')
                
                {
                    document.getElementById('errpassword1').innerHTML="**Email should not be empty";
                    return false;
                    
                }
                if(pas.length=='')
                {
                    document.getElementById('errpassword').innerHTML="**Please fill the password first";
                    return false;
                    
                }
                if(pas.length<6||pas.length>12)
                {
                    document.getElementById('errpassword').innerHTML="**Password should between 6 and 12";
                    return false;
                }
                if(pas2.length=='')
                {
                document.getElementById('errpassword2').innerHTML="**Please fill the confirm password";
                return false;
                }
                if(pas!=pas2)
                {
                    document.getElementById('errpassword2').innerHTML="**Password doesn't match";
                    return false;
                }
                
                if(!/[0-9]/.test(pas))
                {
                    document.getElementById('errpassword').innerHTML="**password may contain digits";
                    return false;
                }
                if(!/[A-Z]/.test(pas))
                {
                    document.getElementById('errpassword').innerHTML="**password should contain Uppercase character";
                    return false;
                }
                if(!/[a-z]/.test(pas))
                {
                    document.getElementById('errpassword').innerHTML="**password should have lowercase character";
                    return false;
                }
                if(mobileno=='')
                {
                    document.getElementById('mobilenumber').innerHTML="**Please fill the mobile number";
                    return false;
                }
                if(isNaN(mobileno))
                {
                    document.getElementById('mobilenumber').innerHTML="**Only numbers are allowed";
                    return false;
                }
               
                if(isNaN(ages))
                {
                    document.getElementById('age').innerHTML="**Age must be in digits only";
                    return false;
                }
				
                if(ages.length=='')
                {
                    document.getElementById('age').innerHTML="**Age should not be empty";
                    return false;
                }
				
                if(add.length=='')
                {
                    document.getElementById('addressid').innerHTML="**Address should not be empty";
                    return false;
                }
				var option=document.getElementsByName('gender');

					if (!(option[0].checked || option[1].checked)) 
						{
							alert("Please Select Your Gender");
								return false;
						}
	
				 if(mobileno.match(phoneno))
                {
                    return true;
                }
                else
                {
                    alert("Not a valid Phone Number");
                    return false;
                }
        		
        	}
        	
        </script>
		<div class="menu">
	<?php include('menu.php');?>
	<div/>
    
        <div class="content">
		<br/>
            <h2 class="mainText">Registration</h2><br/>
            <form class="formBox"  action="regis_process.php" name="f" onsubmit="return passwordcheck()" method="POST" /><br>
                    <div class="textForm">
                        <h4>Registration Form</h4>
                    </div><br/>

                <input type="text" class="inp" name="fname" placeholder="Name"> <br>
                <span id="errpassword5" style="color: #4dffa6; font-family: 'Signika', sans-serif;"></span>
                <br><br>
			   
                <input type="email" class="inp" name="email" placeholder="Email"><br>
                 <span id="errpassword1" style="color: #4dffa6; font-family: 'Signika', sans-serif;"></span>
				 <br><br>
				 
                <input type="Password" class="inp" name="pass" placeholder="Password"><br>
                <span id="errpassword" style="color: #4dffa6;font-family: 'Signika', sans-serif;"></span>
				<br><br>
				
                <input type="Password" class="inp" name="pass2" placeholder="Confirm Password"><br>
				<span  id="errpassword2" style="color: #4dffa6;font-family: 'Signika', sans-serif;"></span> 
				<br><br>
				
                <input type="text" class="inp" name="num" placeholder="Mobile Number"><br>
                <span id="mobilenumber" style="color: #4dffa6;font-family: 'Signika', sans-serif;"></span>
				<br><br>
				
                <input type="number"  min="18" max="50" class="inp" name="yearsold" placeholder="Age" > <br>
                <span id="age" style="color: #4dffa6;font-family: 'Signika', sans-serif;"></span>
				<br><br>
                
                <p>
                Gender:  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                <input type="radio" name="gender" value="male"> Male &nbsp;
                <input type="radio" name="gender" value="female"> Female &nbsp;
                <input type="radio" name="gender" value="other"> Other <br><br><br>
                </p>

                <textarea rows="10" cols="60" name="address" placeholder="Address"></textarea><br>
                <span id="addressid" style="color: #4dffa6; 
     font-family: 'Signika', sans-serif;"></span> <br><br>

                
				 <a href="Userlogin.php">I Already Have An Account?</a> <br><br><br>
                <button type="submit" class="btn" name="login">Submit</button>
            </form>
        </div>
		<?php include('footer.php');?>
    </body>
</html>