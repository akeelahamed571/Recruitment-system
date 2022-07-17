<?php 
	$conn=new mysqli("localhost","root","","recruitmentsystem");
	if($conn->connect_error)
	{
		die("error connection".$conn->connect_error);
	}
?>