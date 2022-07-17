


<?php


session_start();

$username="";

if(isset($_SESSION['username']))
{
	$username=$_SESSION['username'];
	
	echo"<form action='applyforjob.php' method='post' target='_self'>

	<b><input type='submit' name='logout' value='logout' class='login'> <b>
	</form><br>";

}
else
{
	header("location:Login.html");
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
    <title>Apply For Job Page</title>
	<link rel="stylesheet" type="text/css" href="../CSS/homecss.css">
	<link rel="stylesheet" type="text/css" href="../CSS/applyforjobcss.css">
	<script type="text/javascript" src="../JS/applyforjobjs.js"></script>
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
	  <li class="Menu"> <A href="profile.php" id="hov">Profile </a> </li>
	  <li class="Menu"> <a href="AboutUs.html" id="hov">About Us </a> </li>
    </ul>	
  
    <br><br>
     
	
	<h1 class="bg" >APPLY  FOR    JOB</h1><br><br>
	
	<div class="form">
	
	<form action="applyforjob.php" method="post" target="_self" onsubmit="return filecase()">
	<br><br>

	<label>first Name</label><br>
	<input type="text" name="fname" id="fname" required  style="width:500px"  placeholder="firstname">
	<br><br>
	<label>Last Name</label><br>
	<input type="text" name="lname" id="lname" required  style="width:500px"  placeholder="lastname">
	<br><br>


	<label>Email</label><br>
	<input type="email" name="email" id="email" required style="width:500px" pattern="[a-zA-Z0-9#%_+-]+@[a-z0-9]+\.[a-z]{2,3}" placeholder="eg: john@gmail.com">
	<br><br>

	<label>Mobile No:</label><br>
	<input type="mobile" name="mobile" id="mobile" required style="width:500px" pattern="[0-9]{10}" placeholder="mobile number">
	<br><br>


	
	<label>Qualification & Skills</label><br>
	<textarea name="qual" id="qual" rows="9" cols="9" style="width:500px" placeholder="  mention qualifications and skills here"></textarea>
	<br><br>

	
	<label>Upload Resume:</label><br><br>
	&nbsp &nbsp
	
	<input type="file" name="file" id="file"   style="width:500px"   >
	<br><br><br>

	<label>Accept privacy and policy term</label>
	<input type="checkbox" name="policy" id="policy" required   onclick="policycheck()  " >
	<br><br>


	
	
	<input type="submit" name="submit" class="submit" value="Submit" id="submit"  disabled>

	
	<input type="reset" class="reset"  name="reset" value="Clear all" id="reset">
	
	</form>
	</div>


	<?php
	require("config.php");

	if(isset($_POST['submit']))
	{
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$mobile=$_POST['mobile'];
		$qual==$_POST['qual'];
	}


	$sql= "INSERT INTO application(fname,lname,email,mobile,qualification)VALUES ('$fname','$lname','$email','$mobile','$qual')";
	
	if($conn->query($sql))
	{
		echo "success";
	}		
	else
	{
		echo "unsuccess".$conn->error;
	}






	?>



<br><br>
	
	
	<div class="footerbox">
	<br><br>
	<div class="footer1" >
	<h3 >	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
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