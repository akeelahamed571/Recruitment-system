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


<?php
     require 'config.php';
	 echo "<br>";
?>


<html>
 
  <head>
    <title>Recruitment Alerts</title>
	<link rel="stylesheet" type="text/css" href="../CSS/homecss.css">
	<link rel="stylesheet" type="text/css" href="../CSS/HiringStaffAlert.css">
	<link rel="stylesheet" type="text/css" href="../CSS/hiringstaffcss.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  
  <body>
    
	<form method="post" action="logoff.php">
	<b><input type="submit" name="logOut" value="logout" class="login"><b><br>
	</form>
	
	
    <img class="logo1" src="../Images/jobfest1.png" >	
	<h1 class="head">JOBFEST RECRUITMENT (PVT) LIMITED</h1>

    
    <ul class="Menu" >
      <li class="Menu"> <a href="Homepage.php" id="hov">Home</a> </li>
	  <li class="Menu"> <a href="newjobs.php" id="hov">New Jobs</a> </li>
	  <li class="Menu"> <a href="ContactUs.html" id="hov">Contact Us</a> </li>
	  <li class="Menu"> <a href="#" id="hov">Admin Panel</a>  </li>
	  <li class="Menu"> <a href="SearchForJobs.php" id="hov">Search for Jobs</a> </li>
	  <li class="Menu"> <a href="#" id="hov">My Jobs </a> </li>
	  <li class="Menu"> <a href="#" id="hov">Notifications </a> </li>
	  <li class="Menu"> <a href="HiringStaffPanel.php" id="hov">Profile </a> </li>
	  <li class="Menu"> <a href="AboutUs.html" id="hov">About Us </a> </li>
    </ul>	
  

		 <h1 class="top"> Recruitment Alerts </h1><br>
			
            
	   <?php
	   
	        $sql="SELECT * FROM alerts";
			
			$result=$conn->query($sql);  
		    if($result->num_rows>0)
		    { 
				$x=1;
				while($row=$result->fetch_assoc())  //Take one row at a time and store into the associative array $row until last row   
			    {
					if($x<=$result->num_rows)
					{
						echo "<h2 id='job'>";
						
						if($x==1)
						echo "<a href='SelectedList.php' id='linkc'>";
					    
						else if($x==2)
						echo  "<a href='SelectedList.php' id='linkc'>";
					
					    else if($x==3)
						echo  "<a href='Shortlists.php' id='linkc'>";
					    
						else if($x==4)
						echo "<a href='Shortlists.php' id='linkc'>";
					    
						else if($x==5)
						echo "<a href='newjobs.html' id='linkc'>";
					
						
						
						
						echo $row["companyName"]." - "
						.$row["vacancyName"]."<br>
					    Job ID - ".$row["alertJobID"]." &nbsp &nbsp"
						.$row["description"].
						" On ".$row["date"]."
						</a></h2><br>";
						
		
                       		$x++;
					}
				
			   }
		    }
			
			else
			{
				echo "No Records Available.";
			}
		

?>

      <br><br><br><br>
	    <div class="link">  &nbsp &nbsp &nbsp
	    <a href="HiringStaffAlert.php" id="link1"> <img src="../images/bell.jpg" id="logo1">Alerts</a>                                  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	    <a href="Shortlists.php" id="link1"> <img src="../images/shortlistN.jpg" id="logo1">Shortlists</a>                              &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		<a href="SelectedList.php" id="link1"> <img src="../images/SelectedListN.jpg" id="logo1">Selected Lists</a>                     &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	   	<a href="application.php" id="link1"> <img src="../images/jobApplication.png" id="logo1">View Job Applications</button></a>    &nbsp &nbsp &nbsp  &nbsp
	    <a href="#" id="link1"> <img src="../images/Messageicon.jpg" id="logo1">View Messages</button></a>  <br><br>                    &nbsp &nbsp &nbsp
		<a href="SendAlerts.php" id="link1"> <img src="../images/bell.jpg" id="logo1">Send Alerts</button></a>                          &nbsp
		<a href="AddShortlists.php" id="link1"> <img src="../images/shortlistN.jpg" id="logo1">Add Shortlist</a>                        &nbsp &nbsp &nbsp
		<a href="AddSelectedlists.php" id="link1"> <img src="../images/SelectedListN.jpg" id="logo1">Add Selected List</a>              &nbsp &nbsp &nbsp
	   	<a href="addjobs.php" id="link1"> <img src="../images/addJobs.jpg" id="logo1">Add Jobs</button></a>                             &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	    <a href="Notification.php" id="link1"> <img src="../images/Noti.png" id="logo1">Send Notification</button></a><br><br>
	    
	    </div>
	  
	  
	<br><br><br><br><br>
  
  
  
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
  
  