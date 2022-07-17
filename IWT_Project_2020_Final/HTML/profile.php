<?php
  
  session_start();
  $username="";
  if(isset($_SESSION["username"])) 
  { 
     //Already Logged
	$uname=$_SESSION["username"]; 
  }
  else 
 { 
    // Not valid login
	header("Location:login.html");  
 }
?>

<?php

   require 'config.php';

?>



<html>
 
  <head>
    <title>PROFILE</title>
	<link rel="stylesheet" type="text/css" href="../CSS/homecss.css">
	<link rel="stylesheet" type="text/css" href="../CSS/profilecss.css">
	<script type="text/javascript" src="../JS/homejs"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

#scrlBtn {
	position: fixed;
	bottom: 40px;
	right: 40px;
	display: none;
	z-index: 99;
	font-size: 25px;
	font-weight:bold;
	border: none;
	outline: none;
	background-color: yellow;
	color: black;
	cursor: grabbing;
	padding: 15px;
	border-radius: 40px;
	box-shadow:0px 0px 20px 1px yellow;
}

#scrlBtn:hover {
	background-color: white;
}

html{
	scroll-behavior:smooth;
}
</style>


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
  
	
	<div class="details user-profile">
 		  
	   <?php
	       
	      if(isset($_SESSION["username"]))
          {
		$un=$_SESSION["username"];

		$sql="SELECT uname,fname,lname,mobile,email FROM jobseeker where uname='$un' ";
			
		$result=$conn->query($sql);
		    
		if($result->num_rows>0)

		{   
		
		while($row=$result->fetch_assoc())
			{   
			echo "<br><br>";
			$title = '<h1 style="color:#333;font-weight:bold; font-size:60px; text-align: center;  "> User Profile</h1><br><br>';
					
			echo $title;		
					
	 echo    "<br><h1 style='color:#333'>Username</h1>"."<h2 style='color:red'>&nbsp&nbsp&nbsp&nbsp".$row["uname"]."</h2><br><br>"
		."<br><h1 style='color:#333'>First Name</h1>"."<h2 style='color:red'>&nbsp&nbsp&nbsp&nbsp".$row["fname"]."</h2><br><br>"
		."<br><h1 style='color:#333'>Last Name</h1>"."<h2 style='color:red'>&nbsp&nbsp&nbsp&nbsp".$row["lname"]."</h2><br><br>"
		."<br><h1 style='color:#333'>Email ID</h1>"."<h2 style='color:red'>&nbsp&nbsp&nbsp&nbsp".$row["email"]."</h2><br><br>"
		."<br><h1 style='color:#333'>Mobile Number</h1>"."<h2 style='color:red'>&nbsp&nbsp&nbsp&nbsp".$row["mobile"]."<h2>";
				}
			}
	        
		else
			{
				"No records";
			}
		  }
	   
	   ?>
	  
	  
	  </div>



	
<button onclick="topFunction()" id="scrlBtn" title="Go to top" > Top</button>

 <script>
   mybutton = document.getElementById("scrlBtn");

    window.onscroll = function() {scrollFunction()};

      function scrollFunction() {
 	if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) {
  	  mybutton.style.display = "block";
	  } else {
   	 mybutton.style.display = "none";
  	}
	}

	function topFunction() {
 	 document.body.scrollTop = 0; 
	   document.documentElement.scrollTop = 0; 
      }

</script>

	

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