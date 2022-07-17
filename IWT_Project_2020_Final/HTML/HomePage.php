

<?php


session_start();
$username="";

if(isset($_SESSION['username']))
{
	$username=$_SESSION['username'];
	echo"<form action='HomePage.php' method='post' target='_self'>

	<b><br><input type='submit' name='logout' value='logout' class='login'> <b>
	</form><br>";

	
}
else
{
	echo "<br><b><a href='Login.html'	class='login'>login</a><br><br>
	<b><a href='signup.php'	class='login'>sign up</a><br>";
}


?>

<?php

if(isset($_POST['logout']))

{
	session_destroy();
	header("location:Login.html");
}

?>







<html>
 
  <head>
    <title>JOB FEST</title>
	<link rel="stylesheet" type="text/css" href="../CSS/homecss.css">
	<script type="text/javascript" src="../JS/homejs.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  
  <body>
	
    
	
	
    <img class="logo1" src="../Images/jobfest1.png" >	
	<h1 class="head">JOBFEST RECRUITMENT (PVT) LIMITED</h1>

    	
    <ul class="Menu" >
      <li class="Menu"> <a href="HomePage.php" id="hov">Home</a> </li>
	  <li class="Menu"> <a href="newjobs.php" id="hov">New Jobs</a> </li>
	  <li class="Menu"> <a href="ContactUs.html" id="hov">Contact Us</a> </li>
	  <li class="Menu"> <a href="AdminPanel.php" id="hov">Admin Panel</a>  </li>
	  <li class="Menu"> <a href="SearchForJobs.php" id="hov">Search for Jobs</a> </li>
	  <li class="Menu"> <a href="Myjobs.php" id="hov">My Jobs </a> </li>
	  <li class="Menu"> <a href="Notification.php" id="hov">Notifications </a> </li>
	  <li class="Menu"> <a href="profile.php" id="hov">Profile </a> </li>
	  <li class="Menu"> <a href="AboutUs.html" id="hov">About Us </a> </li>
    </ul>	
  
  
	  <center>
	  
		<br><br><br><br>
		<h1 id="title"> WELCOME TO JOBFEST RECRUITMENT <br>COMPANY WEBSITE</h1>
		<br>
		
		<p id="parag"><b>We will save your time, we know how hard can it be to come through hundreds<br> 
		or thousands of CVs to find the right candidate for your job role.<br>
		We will interview your potential perfect employee before we send him or her to company; <br>
		thereby eliminating the first few interview phases which will take a lot of your precious time. <br>
		And of course, partnering with us will reduce or completely eliminate your advertising costs.</b>
		</p>
	 
	<form action="newjobs.php" method="get" target=_self" >
	<div class="para">  
	<input type="text" id="job" name="job"    required placeholder="Ex:Software Engineer" style="margin:10px; padding:10px 200px ;text-align:left " ><br>
	   
		<select style="margin:10px; padding:10px 230px">
		   <option>Location</option>
		   <option>Ampara</option>
		   <option>Anuradhapura</option>
		   <option>Bsdulla</option>
		   <option>Batticaloa</option>
		   <option>Colombo</option>
		   <option>Galle</option>
		   <option>Gampaha</option>
		   <option>Hambantota</option>
		   <option>Jaffna</option>
		   <option>Kalutara</option>
		   <option>Kandy</option>
		   <option>Kegalle</option>
		   <option>Kilinochi</option>
		   <option>Kurunagala</option>
		   <option>Mannar</option>
		   <option>Matale</option>
		   <option>Matara</option>
		   <option>Monaragala</option>
		   <option>Mullaitivu</option> 
		   <option>Nuwara Eliya</option> 
		   <option>Polannaruwa</option> 
		   <option>Puttalam</option>
		   <option>Ratnapura</option> 
		   <option>Trincomalee</option>
		   <option>Vavuniya</option>
		</select> <br>
		
		<select style="margin:10px; padding:10px 200px" >
		   <option>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Category</option>
		   <option>Accounting/Finance</option>
		   <option>Sales/Marketing</option>
		   <option>Technical/IT/Networking</option>
		   <option>Enginnering</option>
		   <option>Shipping</option>
		   <option>Warehouse</option>
		   <option>Customer Service</option>
		</select> <br> 
		
		<input  type="submit"class="bttn" onclick="loadDetails()"  value="SEARCH " id="bttn">	<br><br>	
		<a class="search" href="SearchForJobs.php" id="Advance" ><b>For Advance Search Click Here<b></a>
        
		</div>
	</form>
		</center>
	
	<br><br>
	<center>	
	<a href="signup.php"><button class="bttn2">REGISTER</button></a><br><br><br>
	<a href="Login.html"><button class="bttn2">LOGIN</button></a><br><br><br><br>
	
	  </center>
	  
	
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