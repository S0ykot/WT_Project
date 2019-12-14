
function LFV() //Login Validation
{

	var uname=document.getElementById('name');
	var pass=document.getElementById('pass');
	if (uname.value=='' || pass.value=='') {
		alert('Null submission');
		return(false);
	}
}


function login_show()
{
	var xhttp = new XMLHttpRequest();
	xhttp.open("GET", "view/SellerLogin.php", true);
	xhttp.send();
	document.title='Product Details';
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	     	document.getElementById('data').innerHTML = this.responseText;
	    }
	  };
}


function details()
{
	window.location='SellerHome.php#product';
	if (window.location.hash=="#product") {
		var xhttp = new XMLHttpRequest();
		xhttp.open("GET", "SellerProductDetails.php", true);
		xhttp.send();
	  	xhttp.onreadystatechange = function() {
		window.title='Product Details';
	    if (this.readyState == 4 && this.status == 200) {
	     	document.getElementById('product').innerHTML = this.responseText;
	     	document.getElementById('path').innerHTML = "==>Product Details";


	    }
	    
	  };
	}
	else
	{
		alert("Don't Play with me");
	}
	


}



function logout()
{
	window.location='../php/SellerLogout.php';
}


function home()
{
	window.location='SellerHome.php';
}


function profile()
{
	window.location='SellerHome.php#profile';
	if (window.location.hash=="#profile") {
		var xhttp = new XMLHttpRequest();
	xhttp.open("GET", "SellerProfile.php", true);
	xhttp.send();
	
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	     	document.getElementById('product').innerHTML = this.responseText;
	     	document.getElementById('path').innerHTML = "==>View Profile";
	    }
	  };
	}
	

}


function profileSettings()
{
	window.location='SellerHome.php#infoSettings';
	if (window.location.hash=="#infoSettings") {
		var xhttp = new XMLHttpRequest();
	xhttp.open("GET", "SellerProfileEdit.php", true);
	xhttp.send();
	
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	     	document.getElementById('product').innerHTML = this.responseText;
	     	document.getElementById('path').innerHTML = "==>Settings";
	    }
	  };
	}
	

}



function profileOption()
{
	window.location='SellerHome.php#option';
	if (window.location.hash=="#option") {
		var xhttp = new XMLHttpRequest();
	xhttp.open("GET", "SellerSettingOption.php", true);
	xhttp.send();
	
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	     	document.getElementById('product').innerHTML = this.responseText;
	     	document.getElementById('path').innerHTML = "==>Settings Options";
	    }
	  };
	}
	

}

function chnagePassword()
{
	window.location='SellerHome.php#changepassword';
	if (window.location.hash=="#changepassword") {
		var xhttp = new XMLHttpRequest();
	xhttp.open("GET", "SellerPasswordChange.php", true);
	xhttp.send();
	
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	     	document.getElementById('product').innerHTML = this.responseText;
	     	document.getElementById('path').innerHTML = "==>Change Password";
	    }
	  };
	}
}


function updatePassword()
{
	var np = document.getElementById('npass').value;
	var cnp = document.getElementById('cnpass').value;
	var cp = document.getElementById('cpass').value;

	xhttp.open("POST", "SellerChangePassword.php", true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("npass="+np+"&cnpass="+cnp+"&cp="+cp);

	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	    	alert(1);
	     	document.getElementById('product').innerHTML = this.responseText;
	     	document.getElementById('path').innerHTML = "==>Change Password";
	    }
	  };

	  
}