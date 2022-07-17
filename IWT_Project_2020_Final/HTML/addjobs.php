
<?php


session_start();
$username="";
if(isset($_SESSION['userName']))
{
	$username=$_SESSION['userName'];
}
else
{
	header("location:AdminPanel.php");
}


?>
<?php

if(isset($_POST['logout']))

{
	session_destroy();
	header("location:AdminPanel.php");
}

?>



<html>
 
  <head>
    <title>ADD JOBS</title>
	
	<link rel="stylesheet" type="text/css" href="../CSS/homecss.css">
	<link rel="stylesheet" type="text/css" href="../CSS/signupcss.css">
	<script type="text/javascript" src="../JS/signupjs.js"></script>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  
   <body>
    
	
	<form action="addjobs.php" method="post" target="_self">

	<b><input type="submit" name="logout" value="logout" class="login"> <b>
	</form><br>

        <img class="logo1" src="../Images/jobfest1.png" >	
	<h1 class="head">JOBFEST RECRUITMENT (PVT) LIMITED</h1>

    	
	

    
    <ul class="Menu" >
      <li class="Menu"> <a href="Homepage.php" id="hov">Home</a> </li>
	  <li class="Menu"> <a href="newjobs.php" id="hov">New Jobs</a> </li>
	  <li class="Menu"> <a href="ContactUs.html" id="hov">Contact Us</a> </li>
	  <li class="Menu"> <a href="AdminPanel.php" id="hov">Admin Panel</a>  </li>
	  <li class="Menu"> <a href="SearchForJobs.php" id="hov">Search for Jobs</a> </li>
	  <li class="Menu"> <a href="#" id="hov">My Jobs </a> </li>
	  <li class="Menu"> <a href="#" id="hov">Notifications </a> </li>
	  <li class="Menu"> <A href="#" id="hov">Profile </a> </li>
	  <li class="Menu"> <a href="AboutUs.html" id="hov">About Us </a> </li>
    </ul>	
 
	  
	<br><br>
	
	<h1 class="bg">ADD JOBS</h1><br><br>
	
	
	
	
	<div class="form">
	<form action="addjobs.php" method="get" target="_self">

	<b><input type="submit" name="logout" value="logout" class="login"> <b>
	</form><br>
	<label>JOB TITLE</label><br>
	<input type="text" name="jtitle" id="jtitle" required  style="width:500px"  placeholder="job title">
	<br><br>

	<label>QUALIFICATION NEEDED</label><br>
	<input type="text" name="qualification" id="qualification" required  style="width:500px" placeholder="qualification" >
	<br><br>

	<label>DATE POSTED</label><br>
	<input type="date" name="date" id="date" required  style="width:500px" placeholder="choose a date " >
	<br><br>


	
	
	
	 




	<label>EXPERIENCE NEED</label><br>
	<input type="text" name="experience" id="experience" required style="width:500px" placeholder="eg:1-2 years">
	<br><br>


	<label>location</label><br>

	<select name="location">

	<option value="colombo">colombo</option>
	<option value="gampaha">gampaha</option>
	<option value="kaluthara">kaluthara</option>
	</select>

	<br><br>

	<label>SKILL LEVEL NEEDED</label><br>

	<select name="skill_level">

	<option value="beginner">beginner</option>
	<option value="intermediate">intermediate</option>
	<option value="expert">expert</option>
	</select>

	<br><br>


	<label>TYPE</label><br>

	<select name="type">

	<option value="fulltime">fulltime</option>
	<option value="parttime">parttime</option>
	
	</select>

	<br><br>

	

	
	
	
	

	


	
	<input type="submit" name="submit" class="submit" value="submit" id="submit"  >
	
	
	<input type="reset" class="reset"  name="reset" value="reset" id="reset">

	
	</form></div> 
	<br><br>


	<?php


	require("config.php");
 	if(isset($_GET['submit']))
 	{

 		$jtitle=$_GET['jtitle'];
		$qualification=$_GET['qualification'];
		$location=$_GET['location'];
		$skilllevel=$_GET['skill_level'];
		$experience=$_GET['experience'];
		$dop=$_GET['date'];
		$type=$_GET['type'];

	}

	$sql= "INSERT INTO job (jtitle,experience,qualification,dateposted,location,type,skill_level) VALUES('$jtitle','$experience','$qualification','$dop','$location','$type','$skilllevel')";

 	
	

	if($conn->query($sql))
	{
		echo "success";
	}


	else
	{
		echo"unsuccess".$conn->error;

	}


	?>
	
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