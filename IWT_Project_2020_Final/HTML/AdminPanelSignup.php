
<html>
 
  <head>
    <title>Admin Signup</title>
	<link rel="stylesheet" type="text/css" href="../CSS/homecss.css">
	<link rel="stylesheet" type="text/css" href="../CSS/admincss.css">
	<script type="text/javascript" src="../JS/Adminpaneljs.js"> </script>
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
	  <li class="Menu"> <a href="HiringStaffPanel.php" id="hov">Profile </a> </li>
	  <li class="Menu"> <a href="AboutUs.html" id="hov">About Us </a> </li>
    </ul>	
    	
  
	  <br></br>
  
	  
	  <center>
	  <h1 class="font">Admin SignUp</h1>
	  </center>
	  
	  
	  <div class="bcWork">
	  
	  <form action="AdminPanelSignup.php"  method="POST" target="_SELF" enctype="multipart/form-data" onsubmit="return checkPassword()">
	  
	  <label>First Name</label> <br>
	  <input type="text" id="fName" name="fName" style="width:500px; height:27px" placeholder="Enter First Name" required><br><br>
	  
	  <label>Last Name</label> <br>
	  <input type="text" id="lName" name="lName" style="width:500px; height:27px" placeholder="Enter Last Name" required><br><br>
	  
	  <label>Username</label> <br>
	  <input type="text" id="adminId" name="adminId" style="width:500px; height:27px" placeholder="Enter User Name" required><br><br>
	 
	  <label>Position</label> <br>
	  <input type="text" id="position" name="position" style="width:500px; height:27px" placeholder="Enter Position" required><br><br>
	  
	  <label>Email</label><br>
	  <input type="email" name="email" id="email" style="width:500px;height:27px" placeholder="user@gmail.com"  pattern="[a-zA-Z0-9%$#@&*&+-_.]+@[0-9a-z]{4}+\.[a-z]{2,3}" required>
	  <br><br>
	  
	  <label>Upload Profile</label> <br>
	  <input type="file" id="image" name="image" required><br><br>
	  
	  <label>Password</label> <br>
	  <input type="password" id="pwd" name="pwd" style="width:500px; height:27px" placeholder="Enter Password (8-15 Characters)"  pattern="[a-zA-z0-9@#$%^&*]{8,15}" required ><br><br>  <!-- Password should between 8 to 16 characters-->
	  
	  <label >Re enter-Password</label><br>
	  <input type="password" name="rpwd" id="rpwd"   style="width:500px;height:27px" placeholder="Retype same Password"  pattern="[a-zA-z0-9@#$%^&*]{8,15}" required><br><br>

	  <label>Accept Privacy policy and terms</label>
	  <input type="checkbox" id="check" name="check" onclick="enableLogin()"><br><br>
	  
	  
	  <input type="submit" id="bttn1" name="bttn1" value="Sign Up" style="width:500px; height:28px" disabled>
	  
	  <br><br>
	  <a id="linkPwd" href="AdminPanel.php">Already have an account?</a>
	  </form>
	  
	  </div>
	  
<?php

    require 'config.php';
     
    if(isset($_POST["bttn1"]))
   {
	  //Get user input values into separate variables
	   $FirstName=$_POST["fName"];
	   $LastName=$_POST["lName"];
	   $UserName=$_POST["adminId"];
	   $Position=$_POST["position"];
	   $Email=$_POST["email"];
	   $Password=$_POST["pwd"];
	   
	
		 $image=$_FILES['image']['tmp_name'];
		 $name=$_FILES['image']['name'];
		 
		 $image=file_get_contents($image);
		 $image=base64_encode($image);
	
   
   
	 $sql="INSERT INTO admin(firstName,lastName,userName,Position,Email,Password,NAME,IMAGE)VALUES('$FirstName','$LastName','$UserName','$Position','$Email','$Password','$name','$image')";
	 
	 if($conn->query($sql))    //Return true or false
	 {   
         header("Location:AdminPanel.php");		 
	 }   

     else
	 {
	    echo "<br><h4><center>Error: ".$conn->error."</center></h4>";
	 }

     $conn->close();
	 
    
 }
 

?>
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