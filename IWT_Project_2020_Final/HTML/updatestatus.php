


<?php


session_start();
$username="";
if(isset($_SESSION['userName']))
{
	$username=$_SESSION['userName'];
}
else
{
	header("location:AdminPanel.php");
}


?>
<?php

if(isset($_POST['logout']))

{
	session_destroy();
	header("location:AdminPanel.php");
}

?>






<html>
 
  <head>
    
    <title> status update</title>
	<link rel="stylesheet" type="text/css" href="../CSS/homecss.css">
	<link rel="stylesheet" type="text/css" href="../CSS/applicationnew.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    	.form
    	{	
    		padding-left:20px;
    		margin:0 350px;
			background-color:lightgray;
			width:50%;
			    	}

    </style>
  </head>

  
  <body>
    
	
	<form action="updatestatus.php" method="post" target="_self">

	<b><input type="submit" name="logout" value="logout" class="login"> <b>
	</form><br>

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
	  <li class="Menu"> <A href="profile.php" id="hov">Profile </a> </li>
	  <li class="Menu"> <a href="AboutUs.html" id="hov">About Us </a> </li>
    </ul>	
  
		<br><br><h1 class="font">  UPDATE STATUS </h1>&nbsp&nbsp
  <br><br><div class="form">
  <form action="updatestatus.php" method="get" target="_self"><br><br>

 APPLICATION ID<br>
 <input type="text" name="id" placeholder="enter application id"><br><br><br>

 SELECT STATUS<br>
 <select name="status">
 <option value="selected">selected</option>
 <option value="shortlisted">shortlisted</option>
 <option value="processing">processing</option>
</select><br><br><br>

<input type="submit" name="submit" class="btn" value="submit"><br><br>



  </form></div>
  <?php

   require ("config.php");

   if(isset($_GET['submit']))
   {
   		$status=$_GET['status'];
  	    $id=$_GET['id'];
  	    $sql="UPDATE application SET status= '$status' WHERE app_id='$id' ";
   }
   

   
   if($conn->query($sql))
   {
   	echo "successful";
   }
   else
   	{
   		echo  "unsuccess".$conn->error;
   	}


  ?>
  
  <br><br><br><br>
  
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
	
   
	 
<button onclick="topFunction()" class="top" id="myBtn" title="Go to top">Top</button>
   <script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {fun()};

function fun() {
  if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>	 
	



</body> 
</html>
  
