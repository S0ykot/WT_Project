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
		// no problem
	}
}


function categoryValid()
{
	var catName = document.getElementById('cat').value;
	if (catName=='') {
		alert('Null submission');
	}
}

function specialCharPresent(a,b)
{
	var c = a.indexOf(b);
	return c;
}



function valid_email()
{

    function valid(email)
    {
    	if (email.indexOf("@") == -1) {
            return false;
        }
        var parts = email.split("@");
        var dot = parts[1].indexOf(".");

        var len = parts[1].length;
        var dotSplits = parts[1].split(".");
        var dotCount = dotSplits.length - 1;


        if (dot == -1 || dot < 2 || dotCount > 2) {
            return false;
        }

        for (var i = 0; i < dotSplits.length; i++) {
            if (dotSplits[i].length == 0) {
                return false;
            }
        }

        return true;
    }

    var mail = document.getElementById('email').value;
    var msg = document.getElementById('pmsg');
    var mark = document.getElementById('alert');
    document.getElementById('updateProfile').disabled=false;
    if (mail=="") {
    	msg.innerHTML="<b>*</b>Empty value";
    	document.getElementById('updateProfile').disabled=true;
    }
    else
    {
    	var status = valid(mail);

	    if (status) {
	    	msg.innerHTML="";
	    	document.getElementById('updateProfile').disabled=false;
	    	mark.innerHTML="";
	    }
	    else
	    {
	    	msg.innerHTML="<b>*</b>Invalid email";
	    	mark.innerHTML="*";
	    	document.getElementById('updateProfile').disabled=true;

	    }
    }
}

function changePasword()
{
	var p1 = document.getElementById('npass').value;
	var p2 = document.getElementById('cnpass').value;
	var p3 = document.getElementById('cpass').value;
	var msg = document.getElementById('error');

	if (p1=='' || p2=='' || p3=='') {
		alert('Null submission');
		// window.location='sellerHome.php';
		msg.innerHTML = "Null input";
	}
	else
	{
		if (p1!=p2) {
			alert('Confirm password not matching');
			window.location='sellerHome.php';
		}
		else
		{
			msg.innerHTML="";
		}
	}
}


/*function letterValid(name)
{
	var letter = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',' ','.','-','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','(',')'];
	var	splitName = name.split('');
	var	flag = 0;
		for (var i = 0; i < splitName.length; i++) {
			for (var j = 0; j < letter.length; j++) {
				if (splitName[i] == letter[j]) {
					if((i==0) && (letter[j]==" "||letter[j]=="."||letter[j]=="-"))
					{
						flag=flag;
					}
					else
					{
						if(splitName[i]==" ")
						{
							if(splitName[i+1]==" "||splitName[i-1]==" "||splitName[i+1]=="."||splitName[i+1]=="-")
							{
								flag=flag;
							}
							else
								flag+=1;
						}
						else if(splitName[i]==".")
						{
							if(splitName[i+1]=="-"||splitName[i+1]==".")
							{
								flag=flag;
							}
							else
								flag+=1;
						}
						else if(splitName[i]=="-")
						{
							if(splitName[i+1]=="-"||splitName[i+1]==".")
							{
								flag=flag;
							}
							else
								flag+=1;
						}
						else
							flag+=1;
					}
				}
				else
					flag=flag;
			}
		}
		if(flag==name.length)
		{
			var s = name.split(' ');
			if(s.length<2)
			{
				return true; 
			}
			else if(s.length>=2)
			{
				if(name.charAt(name.indexOf(' ')+1)=="")
				{
					return false; 
				}
				else
					return true;
			}
			else if(name.length==n)
			{
				return true;
			}
			else
				return false;
		}
		else
		{
			return false;
		}
}


function validateName() {

	var ername = document.getElementById('nmsg');
	var name = document.getElementById('name').value;
	var mark = document.getElementById('Nalert');
	
	if (name == "") 
	{
		ername.innerHTML = "Product name can not be empty.";

	}
	else {
		if(letterValid(name))
		{
			ername.innerHTML = "";
			mark.innerHTML="";
		}
		else
		{
			ername.innerHTML = "Product name is not Valid.";
			mark.innerHTML="*";
			document.getElementById('updateProfile').disabled=true;
			
		}
	}
	
}*/


function validCurrentPass()
{
	var msg = document.getElementById('passmsg');
	var pass = document.getElementById('cpass').value;

	if (pass=='') {
		msg.innerHTML="Empty password field";
		document.getElementById('updateProfile').disabled=true;
	}
	else
	{
		msg.innerHTML="";
		document.getElementById('updateProfile').disabled=false;
	}

}