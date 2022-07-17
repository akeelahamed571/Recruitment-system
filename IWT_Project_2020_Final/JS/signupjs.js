

function checkpassword()
{
	if(document.getElementById("rpwd").value != document.getElementById("pwd").value)
	{
		
		alert("password mismatch");
		return false;
	}

	else
	{
		alert("password matched");
		return true;
	}


}


function policycheck()
{
	if(document.getElementById("policy").checked)
	{
		document.getElementById("submit").disabled=false;

	}

	else
	{
		document.getElementById("submit").disabled=true;
	}



}


