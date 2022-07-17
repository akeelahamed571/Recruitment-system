
function checkPassword()
{
	if(document.getElementById("rpwd").value!=document.getElementById("pwd").value)
	{
		alert("Password Mismatched");
		return false;
	}
	
	else
	{   
        alert("Password Matched");
		return true;
	}
}



function enableLogin()
{
	 if(document.getElementById("check").checked)
	 {
		 document.getElementById("bttn1").disabled=false;
	 }
	 
     else
	 {
		 document.getElementById("bttn1").disabled=true;
	 } 
}

