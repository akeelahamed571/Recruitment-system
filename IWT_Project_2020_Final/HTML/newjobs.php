<?php


session_start();
$username="";

if(isset($_SESSION['username']))
{
	$username=$_SESSION['username'];
	echo"<form action='newjobs.php' method='post' target='_self'>

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
    
    <title>NEW JOBS</title>
	<link rel="stylesheet" type="text/css" href="../CSS/homecss.css">
	<link rel="stylesheet" type="text/css" href="../CSS/newjobs.css">
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
  	
	<h3 id="heading1"><br><b>New Jobs<br></b></h3>
	<br><br>

	<?php
	require 'config.php';

	$sql="select * from job";
	
	$result=$conn->query($sql);

	if($result->num_rows>0)
	{   $i=1;
		
		while($rows=$result->fetch_assoc())
		{   if($i%2==0)
			{

			  echo "<div id='details5'>"." job id:  "."<div class='font2'>".$rows['jid']."</div><br>  job title:  "."<div class='font2'>".$rows['jtitle'].
			      "</div><br> job experience:  "."<div class='font2'>".$rows['experience']."</div><br>qualification: "."<div class='font2'>".$rows['qualification']."</div><br> date posted:"."<div class='font2'>".$rows['dateposted']."</div><br> location:"."<div class='font2'>".$rows['location']."</div><br> type:<div class='font2'>".$rows['type']."</div><br> skill level needed:<div class='font2'>".$rows['skill_level']."</div><br><center><a href='applyforjob.php' class='apply'><b>	APPLY</b><br></a></center><br></div>";
			}

			else
			{
				echo "<div id='details1'>"." job id:  "."<div class='font2'>".$rows['jid']."</div><br>  job title:  "."<div class='font2'>".$rows['jtitle'].
			      "</div><br> job experience:  "."<div class='font2'>".$rows['experience']."</div><br>qualification: "."<div class='font2'>".$rows['qualification']."</div><br> date posted:"."<div class='font2'>".$rows['dateposted']."</div><br> location:"."<div class='font2'>".$rows['location']."</div><br> type:<div class='font2'>".$rows['type']."</div><br> skill level needed:<div class='font2'>".$rows['skill_level']."</div><br><center><a href='applyforjob.php' class='apply'><b>	APPLY</b><br></a></center><br></div>";
			}
			$i++;
		}
	}


  $conn->close();
	?>
	
	





<button onclick="topFunction()" class="top" id="myBtn" title="Go to top">Top</button>


	<br><br> 
    <br><br><br><br><br>
    
	
	
	<br>
	
	<script>


//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button

window.onscroll = function() {fun()};

function fun() {
  if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
    mybutton.style.display = "block";
  } 
  else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
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
	
   
	 
	<div onmouseover="resize(this, '125%')" onmouseout="resize(this, '100%')"
Text within div..
</div> 
	



</body> 
</html>