
<html>
 
  <head>
    <title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="../CSS/homecss.css">
	<link rel="stylesheet" type="text/css" href="../CSS/admincss.css">
	<script type="text/javascript" src="../JS/Adminpaneljs.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
	  <li class="Menu"> <a href="#" id="hov">My Jobs </a> </li>
	  <li class="Menu"> <a href="#" id="hov">Notifications </a> </li>
	  <li class="Menu"> <a href="#" id="hov">Profile </a> </li>
	  <li class="Menu"> <a href="AboutUs.html" id="hov">About Us </a> </li>
    </ul>	
  	
  
	  <br></br>
  
	  
	  <center>
	  <h1 class="font">Admin Login</h1>
	  </center>
	  
	  
	  <div class="bcWork">
	  
	  <form action="AdminPanel.php"  method="POST" >
	  
	  <label>Username</label> <br>
	  <input type="text" id="adminId" name="adminId" style="width:500px; height:27px" placeholder="Enter Admin ID" required><br><br>
	 
	  <label>Password</label> <br>
	  <input type="password" id="pwd" name="pwd" style="width:500px; height:27px" placeholder="Enter Password (8-15 Characters)"  required  pattern="[a-zA-z0-9@#$%^&*]{8,15}"><br><br>  <!-- Password should bettween 8 to 15 characters-->
	  
	  <label>Remember Username</label>
	  <input type="checkbox" id="reminder" name="reminder"><br><br>
	  
	  <label>I'm not Robot</label>
	  <input type="checkbox" id="check" name="check" onclick="enableLogin()"><br><br>
	  
	  
	  <input type="submit" id="bttn1" name="bttn1" value="Log in" style="width:500px; height:28px" disabled>
	  
	  </form>
	  
	  
	  <br><br>
	  <a id="linkPwd" href="AdminpanelSignup.php">Do you haven't account?</a>
	  
	  </div>
	  
	  
	  
<?php
   
    require 'config.php';
	
	session_start();

	if(isset($_POST['bttn1']))
    {
	   //Get user input values and store in the separate variables when login
       $username=$_POST["adminId"];
	   $password=$_POST["pwd"];
	  
	   //Read data from database using select statement
	   $sql="SELECT userName,Password FROM admin";
	   
	   //Execute the query
	   $result=$conn->query($sql);
	   
	   if($result->num_rows>0)
	   {
		   while($row=$result->fetch_assoc())
		   {
			 //Validate the user against the data in Database
			 if($username==$row["userName"] && $password==$row["Password"])
		     {
				 //Valid user,so create the Session
				 $_SESSION["userName"]=$username;
			 }
		   
		   }
		}
	    
	      echo "<script>alert('Invalid Login,please try again')</script>";
	  
	}  
	
	   if(isset($_SESSION["userName"]))
	   {
		   //Redirect to HiringStaffPanel page
	       header("Location:HiringStaffPanel.php");   
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