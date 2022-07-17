

<?php
   session_start();
   if(isset($_POST["logOut"])) 
   {
	session_destroy();
	header("Location:AdminPanel.php");
   }
   else 
   {
	 header("Location:HiringStaffPanel.php");
   }
?> 