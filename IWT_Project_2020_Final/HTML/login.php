<?php
session_start();



require("config.php");

if(isset($_POST['submit']))
{
	$username=$_POST['uname'];
	$password=$_POST['pwd'];

	

}

$sql ="SELECT uname from jobseeker  where uname='$username' and password='$password' ";
$result=$conn->query($sql);

if($result->num_rows==1)
{
	$_SESSION['username']=$username;
	
	if(isset($_SESSION['username']))
			{
				header("location:profile.php");
			}

			

}





	
?>