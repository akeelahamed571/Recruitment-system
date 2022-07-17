
<?php
session_start();
if(isset($_POST['logout']))

{
	session_destroy();
	header("location:Login.html");
}

?>
<html>
 
  <head>
    <title>View Status ( Jobs )</title>
	<link rel="stylesheet" type="text/css" href="../CSS/homecss.css">
	<link rel="stylesheet" type="text/css" href="../CSS/viewstatuscss.css">			
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  
  <body>
  
    <form action="ViewStatus2.php" method="post" target="_self">

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
	  <li class="Menu"> <a href="Myjobs.php" id="hov">My Jobs </a> </li>
	  <li class="Menu"> <a href="Notification.php" id="hov">Notifications </a> </li>
	  <li class="Menu"> <A href="profile.php" id="hov">Profile </a> </li>
	  <li class="Menu"> <a href="AboutUs.html" id="hov">About Us </a> </li>
    </ul>	
  
	<style>
	
		.all
		{
		padding-left:30px;
		padding-right:30px;
		padding-top:20px;
		color:#5C5A7C;
		background-image:url('../Images/background1.jpg');
		margin-left:100px;
		margin-right:100px;
		font-size:20px;
		font-family:Helvetica Narrow, sans-serif;
	
		}
		#jobtitle{
			text-align:center;
			color:#1693B5;
			font-size:25px;
			font-weight:bold;
		}
		
		#a {
			color:#7E60DC;
		}
		#b {
			color:blue;
			text-align:center;
			font-family:monospace;
			font-weight:bold;
			background-color:#00FFCC;
			margin-left:400px;
			margin-right:400px;
		}
		#status{
			color:blue;
			text-align:center;
			font-family:monospace;
			font-weight:bold;
			background-color:#00FFCC;
			margin-left:150px;
			margin-right:150px;
		}

	</style>
	
	
	
	
	
	<h3 id="heading1"><br>View Status of Job<br></h3>
	
	
	
	<?php
				include("config.php");
				
				$sql= " SELECT * FROM viewstatus where Job_ID='2' ";
				$result=$conn->query($sql);
				
				if($result->num_rows > 0)
				{
					echo "<div class='all'>";
					while($row=$result->fetch_assoc() )
					{
						echo  "<div id='jobtitle'>" . $row["Job_Title"] . "</div>" . "<br>" . "<div id='a'>" . "Date Applied - " . "</div>" . "<div id='date'>" . $row["Date_Applied"] . "</div>" . "<br>" .  
							  "<div id='a'>" . "Job Description " . "</div>" .  "<div id='job_des'>" . $row["Job_Description"] . "</div>" . "<br>" . "<div id='a'>" . "Experience " . "</div>" . "<div id='experience'>" . $row["Experience"] .  "</div>" . "<br>"  . "<div id='a'>" . "Working Hours"  . "</div>" .  "<div id='hour'>" . $row["Working_Hours"] ."<br>" . "</div>". 
							  "<br>" . "<div id='a'>" . "Qualification " . "</div> " . "<div id='qualification'>" . $row["Qualification"] . "</div>"  . "<br>" .  "<div id='a'>" . "Skills " . "</div>" . "<div id='skills'>" . $row["Skills"] . "</div>" . "<br>" . "<div id='b'>" . "Job Status " . "</div>" . "<br>" . "<div id='status'>" . $row["Status"] . "</div>" . "<br><br><br>" ;
						
						
						
						  
						
					}
					echo "</div>";
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
  