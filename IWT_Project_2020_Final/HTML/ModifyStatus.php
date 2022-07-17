
<html>
 
  <head>
    <title>Modify Job Status </title>
	<link rel="stylesheet" type="text/css" href="../CSS/homecss.css">
	<link rel="stylesheet" type="text/css" href="../CSS/viewstatuscss.css">			
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  
  <body>
  
    <b><a href="login.html"	class="login">login</a><br>
	<b><a href="HomePage.html"	class="login">logout</a> <b><br>

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
	
  
	<h3 id="heading1"><br>Modify Job Status<br></h3>
	<style>
	form{
		margin-left:50px;
		margin-right:200px;
		font-size:20px;
		background-image:url('../Images/background1.jpg');
		font-family:'Arial',sans-serif;
		padding-bottom:10px;
		padding-top:10px;
		padding-left:50px;
		color:#5C5A7C;
	}
	#sub{
		color:navy;
		background-color:White;
		width:28%;
		font-size:19px;
		font-family:'Arial',sans-serif;
		font-weight:bold;
		padding:5px;
		margin-left:290px;
	}
	#jobtitle{
		width:35%;
		height:25px;
	}
	#jid{
		width:35%;
		height:25px;
	}
	#experience{
		width:35%;
		height:25px;
	}
	#hour{
		width:35%;
		height:25px;
	}
	#status{
		width:35%;
		height:25px;
	}

	
	
	</style>
	
	
	
	
	
	
	<form method="POST" action="ModifyStatus.php" target="_self" >

	
Job Title :  <br>
 <input type="text" name="jobtitle" id="jobtitle" required> <br>
	
Date Applied : 	<br>
 <input type="date" name="date" id="date" required><br>
 
Job ID :  <br>
 <input type="text" name="job" id="jid" required> <br>
 
Job Description :	<br>
 <textarea cols="90" rows="5" name="job_des" required></textarea> <br><br>

Experience :  <br>
 <input type="text" name="experience" id="experience" required><br>
 
Working Hours :  <br>
 <input type="text" name="hour" id="hour" required><br>
 
Qualification :	<br>
 <textarea cols="90" rows="5" name="qualification" id="qualification" required></textarea> <br><br>
 
Skills :	<br>
 <textarea cols="90" rows="5" name="skill" id="skills" required></textarea> <br><br>

Status :  <br>
 <input type="text" name="status" id="status" required><br><br><br>

	<input type="submit" name="submit" id="sub" value="Update Information"><br>
	</form>
  
 
	
	
	<?php
	include("config.php");
	
	if(isset($_POST["submit"]))
	{
	$Job_Title=$_POST['jobtitle'];
	$Date_Applied=$_POST['date'];
	$Job_ID=$_POST['job'];
	$Job_Description=$_POST['job_des'];
	$Experience=$_POST['experience'];
	$Working_Hours=$_POST['hour'];
	$Qualification=$_POST['qualification'];
	$Skills=$_POST['skill'];
	$Status=$_POST['status'];
	
	
	
	
	
	$sql="INSERT INTO viewstatus (Job_Title,Date_Applied,Job_ID,Job_Description,Experience,Working_Hours,Qualification,Skills,Status) VALUES('$Job_Title','$Date_Applied', '$Job_ID', '$Job_Description', '$Experience', '$Working_Hours', '$Qualification', '$Skills', '$Status'  )";

	if($conn->query($sql))
	{
		if(isset($_POST["submit"]))
	
		echo "<script>alert('Update Successfully')</script>";
	
	}
		
	
	else
	{
		echo "Error in Updating".$conn->error;

	}
	
	$conn->close();
	}
	
	?>
	
	 <br>

   
   
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
  
	