

<?php


session_start();
$username="";

if(isset($_SESSION['username']))
{
	$username=$_SESSION['username'];
	echo"<form action='SearchForJobs.php' method='post' target='_self'>

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
    <title>Search For Jobs Page</title>
	<link rel="stylesheet" type="text/css" href="../CSS/homecss.css">
	<link rel="stylesheet" type="text/css" href="../CSS/searchjob.css">
	<script type="text/javascript" src="../JS/searchforjobjs.js"></script>



	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<br>
	
	
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
  
	 
	<br><br>
	 
	
	<h1 class="bg" > SEARCH JOBS</h1><br><br>
	<div class="form">

	
	<form action="SearchForJobs.php" method="get" target="_self" onsubmit="return loccheck()">
	
	<br>
	
	<label>Job Title</label><br>
	<input type="text" name="title" id="jtitle"  required  style="width:500px"  placeholder="Job Title">
	<br><br>
         
	

	<label>location</label><br>

	<select  required  name="location" style="width:500px">
	
	<option value="colombo" >colombo</option>
	<option value="gampaha" >gampaha</option>
	<option value="kaluthara"  >kaluthara</option>
	
	</select><br><br>

         

	<label>Skill Level</label><br>

	<select name="skill level" required   style="width:500px">
	
	<option value="beginner">beginner</option>
	<option value="intermediate">intermediate</option>
	<option value="expert">expert</option>
	
	</select><br><br>

	

	<label>Industry</label><br>

	<select name="industry" required style="width:500px">  

	<option value="information technology">information technology</option>
	<option value="engineering">engineering</option>
	<option value="construction">construction</option>
	<option value="marketing">marketing</option>
	<option value="business">business</option>
	

	
	
	</select > <br><br>



	<label> Type</label><br><br>
	
	<label>Fulltime</label>
	<input type="radio" name="type" id="type" checked value="full time" >
	

	<label>Part time</label>
	<input type="radio" name="type" id="type" value="part time" >
	

	<label>Any</label>
	<input type="radio" name="type" id="type" value="any"  >
	<br><br>

	
	<label>Experience </label><br>
	
	<select    required    style="width:500px">
	<option value="less than 1 year"> less than 1year</option>
	<option value="1-2 years">1-2years</option>
	<option value="2-3 years">2-3years</option>
	<option value="more than 3 years">more than 3years</option>
	
	
	
	</select><br><br>
	

	<input type="submit" name="submit" class="submit" value="Search" id="submit"  >
	
	<input type="reset" name="reset" class="reset" value="Clear all" id="reset"  >
	 
	
	</form>
	</div>


	<?php
	
	require("config.php");
	
	if(isset($_GET['submit']))
	{
		$title=$_GET['title'];
		$location=$_GET["location"];

	
	
		$sql="SELECT * from job where jtitle like'%$title%' and location='$location' ";


		$result=$conn->query($sql);

		echo"<br><center><hr><b style='color:red;font-size:25px'> SEARCHED  RESULTS </b></center><br><hr><br>";

		if($result->num_rows>0)
		{   
			
				$i=1;
				while($rows=$result->fetch_assoc())
				{   
					if($i%2==0)
					{

			 	 	echo "<div id='details5'>"." job id:  "."<div class='font2'>".$rows['jid']."</div><br>  job title:  "."<div class='font2'>".$rows['jtitle'].
			      "</div><br> job experience:  "."<div class='font2'>".$rows['experience']."</div><br>qualification: "."<div class='font2'>".$rows['qualification']."</div><br> date posted:"."<div class='font2'>".$rows['dateposted']."</div><br> location:"."<div class='font2'>".$rows['location']."</div><br> type:<div class='font2'>".$rows['type']."</div><br> skill level needed:<div class='font2'>".$rows['skill_level']."</div><br><a href='ApplyForJob.html'><button class='btn1'><b>	APPLY</b><button></a></div>";
					}

					else
					{
				
					echo "<div id='details1'>"." job id:  "."<div class='font2'>".$rows['jid']."</div><br>  job title:  "."<div class='font2'>".$rows['jtitle'].
			      "</div><br> job experience:  "."<div class='font2'>".$rows['experience']."</div><br>qualification: "."<div class='font2'>".$rows['qualification']."</div><br> date posted:"."<div class='font2'>".$rows['dateposted']."</div><br> location:"."<div class='font2'>".$rows['location']."</div><br> type:<div class='font2'>".$rows['type']."</div><br> skill level needed:<div class='font2'>".$rows['skill_level']."</div><br><a href='ApplyForJob.html'><button class='btn1'><b>	APPLY</b><button></a></div>";
					}
				
					$i++;

				}
			

			
		}

		else
		{
			echo "<center><b>NO JOBS AVAILABLE FOR YOUR PREFFERENCE</b></center>";
		}
	}
 
 $conn->close();
	
	?>
	
  
  <button onclick="topFunction()" class="top" id="myBtn" title="Go to top">Top</button>


	<br><br> 
    <br><br><br><br><br>


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