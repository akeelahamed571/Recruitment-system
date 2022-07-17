
<?php


session_start();
$username="";

if(isset($_SESSION['username']))
{
	$username=$_SESSION['username'];
	echo"<form action='signup.php' method='post' target='_self'>

	<b><input type='submit' name='logout' value='logout' class='login'> <b>
	</form><br>";
}
else
{
	echo "<b><a href='Login.html'	class='login'>login</a><br>";
}


?>

<?php

if(isset($_POST['logout']))

{
	session_destroy();
	header("location:Login.html");
	
}

?>




<?php
require 'config.php';
	if(isset($_POST["submit"]))
	{
		$fname=$_POST["fname"];
		$lname=$_POST["lname"];
		$uname=$_POST["uname"];

		$dob=$_POST["dob"];
		
		
		$email=$_POST["email"];
		$mobile=$_POST["mobile"];
		$address=$_POST["address"];
		$gender=$_POST["gender"];
		
		 
		
		
		
		
		$password=$_POST["pwd"];

		$sql="INSERT INTO jobseeker (fname,lname,uname,gender,email,mobile,address,dob,password) VALUES ('$fname','$lname','$uname','$gender','$email','$mobile','$address','$dob','$password')";

		
		if($conn->query($sql))
		{
			header("location:Login.html");
			echo "successful";
			
			
		}
		else
		{
		echo "unsuccess".$conn->error;
		}
		
		
		
		$conn->close();
	}

	
	
?>

<! Doctype html>
<html>
 
  <head>
    <title>SignUp Page</title>
	
	<link rel="stylesheet" type="text/css" href="../CSS/homecss.css">
	<link rel="stylesheet" type="text/css" href="../CSS/signupcss.css">
	<script type="text/javascript" src="../JS/signupjs.js"></script>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  
   <body>
    
	
        <img class="logo1" src="../Images/jobfest1.png" >	
	<h1 class="head">JOBFEST RECRUITMENT (PVT) LIMITED</h1>

    	
	

    
    <ul class="Menu" >
      <li class="Menu"> <a href="Homepage.php" id="hov">Home</a> </li>
	  <li class="Menu"> <a href="newjobs.php" id="hov">New Jobs</a> </li>
	  <li class="Menu"> <a href="ContactUs.html" id="hov">Contact Us</a> </li>
	  <li class="Menu"> <a href="AdminPanel.php" id="hov">Admin Panel</a>  </li>
	  <li class="Menu"> <a href="SearchForJobs.php" id="hov">Search for Jobs</a> </li>
	  <li class="Menu"> <a href="Myjobs.php" id="hov">My Jobs </a> </li>
	  <li class="Menu"> <a href="Notification.php" id="hov">Notifications </a> </li>
	  <li class="Menu"> <A href="profile.php" id="hov">Profile </a> </li>
	  <li class="Menu"> <a href="AboutUs.html" id="hov">About Us </a> </li>
    </ul>	
 
	  
	<br><br>
	
	<h1 class="bg">SIGN UP</h1><br><br>
	
	
	
	
	<div class="form">
	<form action="signup.php" method="post"  onsubmit="checkpassword();"  >

	<br><br>
	<label>First Name</label><br>
	<input type="text" name="fname" id="fname" required  style="width:500px"  placeholder="first name">
	<br><br>

	<label>Last Name</label><br>
	<input type="text" name="lname" id="lname" required  style="width:500px" placeholder="last name" >
	<br><br>

	<label>User Name</label><br>
	<input type="text" name="uname" id="uname" required  style="width:500px" placeholder="username " >
	<br><br>


	
	<label>Gender</label><br><br>
	Male
	<input type="radio" name="gender" id="gender" value="male" >&nbsp&nbsp
	 &nbsp
	 
	Female
	<input type="radio" name ="gender" id="gender"  value="female">&nbsp&nbsp
	 &nbsp <br><br>
	 




	<label>Email</label><br>
	<input type="email" name="email" id="email" required style="width:500px" pattern="[a-zA-Z0-9%$#@&*&+-_.]+@[0-9a-z]{4}+\.[a-z]{2,3}" placeholder="eg:jillie123@gmail.com">
	<br><br>


	<label>Mobile No</label><br>
	<input type="mobile" name="mobile" id="mobile" required style="width:500px" pattern="[0-9]{10}" placeholder=" type 10 digit phone number">
	<br><br>

	
	<label>Address</label><br>
	<textarea name="address" id="address" rows="9" cols="9" style="width:500px" required  placeholder="address"> </textarea>
	<br><br>

	
	<label>Date Of Birth</label><br>
	<input type="date" name="dob" id="dob"  style="width:500px" required >
	<br><br>


	<label >Password</label><br>
	<input type="password" name="pwd" id="pwd" required  style="width:500px"  placeholder="atleast 3 characters and maximum 15 characters"  pattern="[a-zA-z0-9@#$%^&*]{3,15}" >
	<br><br>

	<label >Re enter-Password</label><br>
	<input type="password" name="rpwd" id="rpwd" required  style="width:500px" placeholder="retype same password"   pattern="[a-zA-z0-9@#$%^&*]{3,15}" >
	<br><br><br>


	<label>Accept privacy and policy term:</label>
	<input type="checkbox" name="policy" id="policy" required    onclick="policycheck()" >
	<br><br>

	<input type="submit" name="submit" class="submit" value="submit" id="submit"  disabled>
	
	
	<input type="reset" class="reset"  name="reset" value="reset" id="reset">

	
	</form></div> 
	<br><br>
	
	<div class="footerbox">
	<br><br>
	<div class="footer1" >
	<h3 >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	Follow Us On</h3>
	
	<a href="#" class="fa fa-facebook"></a>
	<a href="#" class="fa fa-twitter"></a>
	<a href="#" class="fa fa-linkedin"></a>
	<a href="#" class="fa fa-instagram"></a>
	<a href="#" class="fa fa-youtube"></a>

	

	</div>
	
	<div class="footer2" >
	<h3>Chat With Us</h3> 
	<a href="www.messenger.com">  <img src="../images/Messenegr1.jpg"  class="logo" > </a>  
	</div>
	
	<div class="footer3" >
	<h3>Mail to Us</h3>
	<a href="https://www.gmail.com">   <img src="../images/Gmail1.png"  class="logo" > </a>
    </div>
	
	</p>
	
	
	<div class="footer4">
 	<br><br><br><br><br><br>
	<hr>
	<a href="www.companyweb.com" id="alright"> @2020 JOBFEST sync all right reserved </a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
    <a href="www.companyweb.com" id="term" >Terms of Service </a>   &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp 
    <a href="www.companyweb.com" id="privacy" >Privacy Policy </a> 	
	</div>	
	
    </div>
	
    
	 
	 
	



 







</body>

</html>