
<?php
  
  session_start();
  $userName="";
  if(isset($_SESSION["userName"])) 
  { 
     //Already logged in
	$userName=$_SESSION["userName"]; //Use the session value
  }
  
  else 
  { 
     // Not logged in
	 header("Location:AdminPanel.php");  //Redirect to the Admin login page if not logged in
  }
  
?>


<html>
 
  <head>
    <title>SEND NOTIFICATION</title>
	<link rel="stylesheet" type="text/css" href="../CSS/homecss.css">
	<link rel="stylesheet" type="text/css" href="../CSS/hiringstaffcss.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  
  <body>
    
	<b><a href="login.html"	class="login">login</a><br>
	<b><a href="HomePage.html"	class="login">logout</a> <b><br>

    <img class="logo1" src="../Images/jobfest1.png" >	
	<h1 class="head">JOBFEST RECRUITMENT (PVT) LIMITED</h1>

    	
	

    
    <ul class="Menu" >
      <li class="Menu"> <a href="HomePage.php" id="hov">Home</a> </li>
	  <li class="Menu"> <a href="newjobs.php" id="hov">New Jobs</a> </li>
	  <li class="Menu"> <a href="ContactUs.html" id="hov">Contact Us</a> </li>
	  <li class="Menu"> <a href="#" id="hov">Admin Panel</a>  </li>
	  <li class="Menu"> <a href="SearchForJobs.php" id="hov">Search for Jobs</a> </li>
	  <li class="Menu"> <a href="Myjobs.html" id="hov">My Jobs </a> </li>
	  <li class="Menu"> <a href="Notification.php" id="hov">Notifications </a> </li>
	  <li class="Menu"> <A href="HiringStaffPanel.php" id="hov">Profile </a> </li>
	  <li class="Menu"> <a href="AboutUs.html" id="hov">About Us </a> </li>
    </ul>	
	
	<style>
	form{
		margin-left:360px;
		margin-right:360px;
		font-size:20px;
		background-image:url('../Images/background1.jpg');
		font-family:'Arial',sans-serif;
		padding-bottom:10px;
		padding-top:10px;
	}
	#company{
		width:37%;
	}
	#sub{
		color:navy;
		background-color:White;
		width:28%;
		font-size:19px;
		font-family:'Arial',sans-serif;
		font-weight:bold;
		padding:5px;
	
	}
	#jobalert{
		font-size:35px;
		color:grey;
		font-family:monospace;
		font-weight:bold;
	}
	#success{
		font-size:20px;
		font-family:monospace;
		font-weight:bold;
		color:Orange;
		
		
		
	</style>
	
  <center>
	<br><h2 id="jobalert">Send Job Alerts to Jobseeker</h2><br><br>
	<form method="get" action="SendNotification.php" target="_self" >
	
Date 	: 	<br>
 <input type="date" name="date" required><br>
Company Name :  <br>
 <input type="text" name="comp_name" id="company" required><br>
Message :	<br>
 <textarea cols="70" rows="15" name="msg_det" required></textarea> <br><br>

	<input type="submit" name="submit" id="sub" value="Send Notification"><br>
	</form>
  
  </center><br><br><br>
  
  
  
  
  
  
  
  
  
  
	<?php
	include("config.php");
	
	if(isset($_GET["submit"]))
	{
	
	$Date=$_GET['date'];
	$Company_Name =$_GET['comp_name'];
	$MessageDetails=$_GET['msg_det'];
	
	
	
	
	$sql="INSERT INTO Notification (Date,Company_Name,MessageDetails) VALUES('$Date','$Company_Name','$MessageDetails')";

	if($conn->query($sql))
	{
		if(isset($_GET["submit"]))
	
		echo "<script>alert('Job Alert Send Successfully')</script>";
	
	}
		
	
	else
	{
		echo "Error in Sending Message".$conn->error;

	}
	
	$conn->close();
	}
	
	?>
	
	<div class="link">  &nbsp &nbsp &nbsp
	    <a href="HiringStaffAlert.php" id="link1"> <img src="../images/bell.jpg" id="logo1">Alerts</a>                                  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	    <a href="Shortlists.php" id="link1"> <img src="../images/shortlistN.jpg" id="logo1">Shortlists</a>                              &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		<a href="SelectedList.php" id="link1"> <img src="../images/SelectedListN.jpg" id="logo1">Selected Lists</a>                     &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	   	<a href="application.html" id="link1"> <img src="../images/jobApplication.png" id="logo1">View Job Applications</button></a>    &nbsp &nbsp &nbsp  &nbsp
	    <a href="#" id="link1"> <img src="../images/Messageicon.jpg" id="logo1">View Messages</button></a>  <br><br>                    &nbsp &nbsp &nbsp
		<a href="SendAlerts.php" id="link1"> <img src="../images/bell.jpg" id="logo1">Send Alerts</button></a>                          &nbsp
		<a href="AddShortlists.php" id="link1"> <img src="../images/shortlistN.jpg" id="logo1">Add Shortlist</a>                        &nbsp &nbsp &nbsp
		<a href="AddSelectedlists.php" id="link1"> <img src="../images/SelectedListN.jpg" id="logo1">Add Selected List</a>              &nbsp &nbsp &nbsp
	   	<a href="addjobs.php" id="link1"> <img src="../images/addJobs.jpg" id="logo1">Add Jobs</button></a>                             &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	    <a href="Notification.php" id="link1"> <img src="../images/Noti.png" id="logo1">Send Notification</button></a><br><br>
	    
	    </div>
	
	
	
	

	
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
  











