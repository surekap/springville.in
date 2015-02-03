function validfields()
{
	if (document.frmenquiry.MERGE1.value == "First Name")
	{
		alert("Please enter your First Name.");
		document.frmenquiry.MERGE1.focus();
		return false;
	}	
	if (!/^[A-Za-z ]{3,40}$/.test(document.frmenquiry.MERGE1.value)) {
		alert("Please enter a valid Name.");
		document.frmenquiry.MERGE1.focus();
		return false;
		}
		
		
	if (document.frmenquiry.MERGE2.value == "Last Name")
	{
		alert("Please enter your Last Name.");
		document.frmenquiry.MERGE2.focus();
		return false;
	}	
	if (!/^[A-Za-z ]{3,40}$/.test(document.frmenquiry.MERGE2.value)) {
		alert("Please enter a valid Name.");
		document.frmenquiry.MERGE2.focus();
		return false;
		}

	if (document.frmenquiry.MERGE0.value == "E-mail")
	{
		alert("Please enter your Email ID.");
		document.frmenquiry.MERGE0.focus();
		return false;
	}	
	if (!isEmail(document.frmenquiry.MERGE0))
	{
		alert("Please enter a valid Email ID.");
		document.frmenquiry.MERGE0.focus();
		return false;
	}
	/*if (document.frmenquiry.txtcountry.value == "0")
	{
		alert("Please select your Country.");
		document.frmenquiry.txtcountry.focus();
		return false;
	}*/	
	if (document.frmenquiry.MERGE3.value == "Mobile Number")
	{
		alert("Please enter your Mobile No.");
		document.frmenquiry.MERGE3.focus();
		return false;
	}	
	/*if ((document.frmenquiry.txtcountry.value == "India") && (document.frmenquiry.txtmobile.value.length < 10))
	{
		alert("Please enter a valid Mobile No.");
		document.frmenquiry.txtmobile.focus();
		return false;
	}		
	if ((document.frmenquiry.txtcountry.value != "India") && (document.frmenquiry.txtmobile.value.length < 6))
	{
		alert("Please enter a valid Mobile No.");
		document.frmenquiry.txtmobile.focus();
		return false;
	}*/	
	if (!isNumber(document.frmenquiry.MERGE3))
			{
			alert("Please input a valid Mobile No.");	
			document.frmenquiry.MERGE3.focus();
			return false;
			}
	return true;
}
function isEmail(val)
{
	if (isLength(val)) 
	{
		pattern="@."
		e = val.value
		if ((val.value.indexOf("@")==-1) ||(val.value.indexOf(".")==-1) || (e.length<5)) 
		{
			return false
		}
		else
		{
			return true
		}
	}
}
function isLength(val)
{
	if (val.value.length>0) 
	{
		return true
	}
	else
	{
		return false
	}
}
function isNumber(val)
{
	var i;
	var j;
	var value=val.value;
	var flag;
	var pattern="1234567890-+() "
	if (!isLength(val))
		return false
	else
	{
		for (i = 0; i < value.length; i++)
		{   
		    var c = value.charAt(i);
		    if (pattern.indexOf(c) == -1)
				return false;
			else
			{
				flag="t"
				continue;
			}	
		}
		if(flag=="t")
			return true;
	}

}
