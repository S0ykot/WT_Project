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
