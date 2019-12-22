function smartphone()
{	var x = document.getElementById('smartphone').textContent;
	 var xhttp = new XMLHttpRequest();
	 xhttp.open("POST", "../php/buyerSubCat2.php", true);
	  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	  xhttp.send('subCat='+x);
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status==200) {
	      document.getElementById('sub_list').innerHTML=this.responseText;
	    }
	  };
}
function computer()
{
	var x = document.getElementById('computer').textContent;
	
	 var xhttp = new XMLHttpRequest();
	 xhttp.open("POST", "../php/buyerSubCat2.php", true);
	  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	  xhttp.send('subCat='+x);
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status==200) {
	      document.getElementById('ComCat').innerHTML=this.responseText;
	    }
	  };
}
function camera()
{
	var x = document.getElementById('camera').textContent;
	
	 var xhttp = new XMLHttpRequest();
	 xhttp.open("POST", "../php/buyerSubCat2.php", true);
	  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	  xhttp.send('subCat='+x);
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status==200) {
	      document.getElementById('CamCat').innerHTML=this.responseText;
	    }
	  };
}
function lifestyle()
{
	var x = document.getElementById('lifestyle').textContent;
	
	 var xhttp = new XMLHttpRequest();
	 xhttp.open("POST", "../php/buyerSubCat2.php", true);
	  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	  xhttp.send('subCat='+x);
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status==200) {
	      document.getElementById('LifeCat').innerHTML=this.responseText;
	    }
	  };
}

function checkout()
{
	var MainTotal = document.getElementById('mainTotal').textContent;
	var x = document.getElementsByName('payment');
	
	for(var i = 0; i < x.length; i++){
		var text="Select a Payment Method";
	    if(x[i].checked){
	        text=x[i].value;
	        break;
	    }
}
	  if(text=="Select a Payment Method")
	  {
	  		document.getElementById('methodType').innerHTML="Select a Payment Method";
	  }
	  else
	  {
	  		if(text=="Cash On Delivery")
	  		{
	  			if(confirm("Your Product Will Be Reached On The Given Address. Please Pay When You Get Your Product"))
	  			{
	  				var xhttp = new XMLHttpRequest();
					 xhttp.open("POST", "../php/buyerMakeOrder.php", true);
					  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					  xhttp.send('total='+MainTotal);
					  xhttp.onreadystatechange = function() {
					    if (this.readyState == 4 && this.status==200) {
					      //alert(this.responseText);
					      window.location = "Profile/buyerOrder.php";
					    }
					  };
	  			}
	  		}
	  		else if(text=="bKash")
	  		{
	  			if(confirm("Please make your bKash Payment on 01XXXXXXXXX first To Get Your Product Delivered On The Given Address"))
	  			{
	  				var xhttp = new XMLHttpRequest();
					 xhttp.open("POST", "../php/buyerMakeOrder.php", true);
					  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					  xhttp.send('total='+MainTotal);
					  xhttp.onreadystatechange = function() {
					    if (this.readyState == 4 && this.status==200) {
					      //alert(this.responseText);
					      window.location = "Profile/buyerOrder.php";
					    }
					  };
	  			}
	  		}
	  }
}

function deleteCart(x)
{
	var X=x;
	if(confirm("Are You Sure?"))
	  			{
	  				var xhttp = new XMLHttpRequest();
					 xhttp.open("POST", "../php/buyerDeleteCart.php", true);
					  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					  xhttp.send('delete='+X);
					  xhttp.onreadystatechange = function() {
					    if (this.readyState == 4 && this.status==200) {
					      //alert(this.responseText);
					      window.location = "cart.php";
					    }
					  };
	  			}	
}

function gotoLogin(login)
{
	/*var Uname = document.getElementById('uname').value;
	var Upass = document.getElementById('upass').value;*/
	//alert(Uname+Upass+login);
	var json = {
			'uname': document.getElementById('uname').value,
			'upass': document.getElementById('upass').value,
			'btn': login
		};
	var data = JSON.stringify(json);
	var xhttp = new XMLHttpRequest();
		 xhttp.open("POST", "../php/buyerLoginCheck.php", true);
		  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		  //xhttp.send('uname='+Uname+'&upass='+Upass+'&btn='+login);
		  xhttp.send('cred='+data);
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status==200) {
		      alert(this.responseText);
		      if(this.responseText=="Done")
		      {
		      		window.location = "../index.php";
		      }
		      else if(this.responseText=="Failed")
		      {
		      		window.location = "buyerLogin.php"
		      }
		      //;
		    }
		  };
		  //alert(data);
}

function gotoReg(Btn)
{
	var x = document.getElementsByName('gender');
	var text="";
	for(var i = 0; i < x.length; i++){
	    if(x[i].checked){
	        text=x[i].value;
	        break;
	    }
	}
	var json = {
		'Name': document.getElementById('NAME').value,
		'Email':document.getElementById('EMAIL').value,
		'Dob':document.getElementById('DOB').value,
		'Address':document.getElementById('address').value,
		'Con':document.getElementById('CON').value,
		'Gender':text,
		'Uname':document.getElementById('UNAME').value,
		'Pass':document.getElementById('PASS').value,
		'ConPass':document.getElementById('CONPASS').value,
		'btn':Btn
	};

	var data=JSON.stringify(json);
	var xhttp = new XMLHttpRequest();
		 xhttp.open("POST", "../php/buyerRegCheck.php", true);
		  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		  //xhttp.send('uname='+Uname+'&upass='+Upass+'&btn='+login);
		  xhttp.send('cred='+data);
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status==200) {
		      //alert(this.responseText);
		     if(this.responseText=="Done")
		      {
		      		window.location = "../index.php";
		      }
		      else if(this.responseText=="Failed")
		      {
		      		window.location = "buyerReg.php"
		      }
		    }
		  };
}

function verifyCoupon()
{
	var Coupon = document.getElementById('coupon');
	//alert(Coupon);
	if(Coupon.value!="")
	{
		var xhttp = new XMLHttpRequest();
	 xhttp.open("POST", "../php/buyerGetCoupon.php", true);
	  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	  xhttp.send('cpn='+Coupon.value);
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status==200) {
	      //alert(this.responseText);
	      //window.location = "cart.php";
	     if(this.responseText=='Invalid')
	     {
	     	alert('Invalid Code');
	     }
	     else if(this.responseText=='used')
	     {
	     	alert('You have already used the code once');
	     }
	     else if(this.responseText=='date')
	     {
	     		alert('Code Is Not Available Now');
	     }
	     else
	     {
	     	 var obj = JSON.parse(this.responseText);
		      var amount = document.getElementById('mainTotal').textContent;
 				document.getElementById('discount').innerHTML=((obj.amount/100)*amount);
 				document.getElementById('mainTotal').innerHTML=((amount-(obj.amount/100)*amount));
 				document.getElementById('coupon').value="";
	     }
	      //alert(this.responseText);
	    }
	  };

	}
	else if(Coupon.value=="")
	{
		alert('Empty Code');
	}
}