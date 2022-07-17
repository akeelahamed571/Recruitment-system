

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
