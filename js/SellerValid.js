function LFV()
{

	var uname=document.getElementById('name');
	var pass=document.getElementById('pass');
	if (uname.value=='' || pass.value=='') {
		alert('Null submission');
		return(false);
	}
}

function productValid()
{
	var name = document.getElementById('name').value;
	var q = document.getElementById('qntity').value;
	var d = document.getElementById('date').value;
	var bp = document.getElementById('bp').value;
	var sp = document.getElementById('sp').value;
	var des = document.getElementById('desc').value;
	var photo = document.getElementById('img').value;
	var cate = document.getElementById('cat').value;
	var subcate = document.getElementById('sub').value;
	
	if (name=='' || q=='' || d=='' || sp=='' || des=='' || photo==''|| cate=='' || subcate=='') {
		alert("Null submission");
		window.location='sellerHome.php';
	}
	else
	{

	}
}


function categoryValid()
{
	var catName = document.getElementById('cat').value;
	if (catName=='') {
		alert('Null submission');
	}
	else
	{
		
	}
}

function specialCharPresent(a,b)
{
	var c = a.indexOf(b);
	return c;
}



function Email(email)
{
	var c = specialCharPresent(email,'@');
	if(email.charAt(0)==" "||email.charAt(0)=="@")
	{
		return false;
	}
	else
	{
		if(c == -1)
		{
			return false;
		}
		else
		{
			var splitEmail_1 = email.split('@');
			var positionOfDot = specialCharPresent(splitEmail_1[1],'.');

			if(splitEmail_1[1].charAt(0)==" "||splitEmail_1[1].charAt(0)==".")
			{
				return false;
			}
			else
			{
				if(positionOfDot == -1)
				{
					return false;
				}
				else
				{
					var splitEmail_2 = splitEmail_1[1].split('.');
					if(splitEmail_2[1]!="com")
					{
						return false;
					}
					else
						return true;
				}
			}
		}
	}
}





function validateEmail(){
	var email = document.getElementById('email').value;
	var eremail = document.getElementById('eremail');

	if (email == "") {
		alert("Null submission")
	}
	else {
		if(Email(email))
		{
			
		}
		else
		{
			alert("Invalid mail");
			window.location="SellerHome.php";
		}
	}

}

