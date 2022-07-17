<?php
	
	require("config.php");
	if(isset($_GET['buttn1']))
	 {
		$fname= $_GET['fname'];
		$email= $_GET['email'];
		$subject= $_GET['subject'];
		$message= $_GET['message'];

		$sql="INSERT INTO feedback(name, email, subject, message) VALUES('$fname','$email','$subject','$message')";
		

		if($conn->query($sql))
		{
		echo "success";
		}
		else
		{
		echo "unsuccess".$conn->error;
		}
		

	$conn->close();
}
?>