<?php


session_start();
$username="";
if(isset($_SESSION['username']))
{
	$username=$_SESSION['username'];
}
else
{
	header("location:Login.html");
}


?>
	



<html>
 
  <head>
    <title>MY JOBS</title>
	<link rel="stylesheet" type="text/css" href="../CSS/homecss.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
<style>

.status
{

	border:2px solid black;
	background-color:orange;
	padding:10px 45px;
}
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



.pagedetails{
  	position: relative;
  	max-width: 750px;
  	margin: 0 auto;
	background-image: linear-gradient(to bottom, white ,rgba(0, 0, 0, 0.5));
	box-shadow: 0px 0px 100px 10px rgba(0, 0, 0, 0.5);
	}


.pagedetails .layout {
	position: absolute;
	bottom: 0; 
	background: rgba(0, 0, 0, 0.5);
	color: whitesmoke;
	width: 96.5%;
	padding: 13px;
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

	
<br><br>

<center> 
	
	<h2 style="background-color:grey;color:black;font-size:40px; font-family:georgia,garamond,serif;text-shadow: 0 0 10px white, 0 0 5px white;">Applied Jobs</h2>
		<br>
	<div class="pagedetails">
		<img src="../Images/sedeveloper.jpg"  style="width:65%;">
	<div class="layout">
    		<h1>Software Analyst</h1>
		<a href="ViewStatus1.php"><button  class="status"><b>VIEW STATUS<b></button></a>
     </div>
   </div>
<br>

	<div class="pagedetails">
		<img src="../Images/seanal.jpg"  style="width:65%;">
	<div class="layout">
		<h1>Network Engineer</h1>

		<a href="ViewStatus2.php"><button  class="status"><b>VIEW STATUS<b> </button> </a> 
     </div>
   </div>
<br>

	<div class="pagedetails">
		<img src="../Images/uxdesign.jpg" style="width:65%;">
	<div class="layout">
		<h1>IT Manager</h1>

		<a href="#"><button  class="status"><b>VIEW STATUS<b></button></a>
    </div>
 </center>
</div>

<br><br><br><br>

<center>
	<h2 style="background-color:grey;color:black;font-size:40px; font-family:georgia,garamond,serif;text-shadow: 0 0 10px white, 0 0 5px white;">Wishlist</h2>
	<br>

	<div class="pagedetails">
		<img src="../Images/cloudarchi.jpg"  style="width:65%;">
	<div class="layout">
		<h1>Cloud Architect</h1>
    </div>
  </div>
<br>

	<div class="pagedetails">
		<img src="../Images/mobapp.jpg"  style="width:65%;">
	<div class="layout">
		<h1>Mobile Apllication Developer</h1>
    </div>
  </div>
</center>
<br><br>

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
	
	<a href="#" class="fa fa-facebook"></a>&nbsp
	<a href="#" class="fa fa-twitter"></a>&nbsp
	<a href="#" class="fa fa-linkedin"></a>&nbsp
	<a href="#" class="fa fa-instagram"></a>&nbsp
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