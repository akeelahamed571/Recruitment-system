

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

function filecase()
{
	if(document.getElementById("file").value.length< 1)
	{

		alert("please upload your resume");
		return false;
	}
	else
	{

		alert("submited  successfully");
		return true;
	}

}