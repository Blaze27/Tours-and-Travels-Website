var x = document.getElementById("search");
var y = document.getElementById("insert");
var z = document.getElementById("btn");


function insert() {
	document.getElementById("form-box").style.height="1020px";
	x.style.left = "-400px";
	y.style.left = "50px";
	z.style.left = "110px";
}

function search() {
	document.getElementById("form-box").style.height="300px";
	x.style.left = "50px";
	y.style.left = "450px";
	z.style.left = "0px";
}

function validation() {
	var name = document.getElementById("name").value;
	var city = document.getElementById("city").value;
	var state = document.getElementById("state").value;
	var pincode = document.getElementById("pincode").value;
	// var hotel_distance = document.getElementById("hotel-distance").value;

	var namecheck = /^[A-Za-z. ]{3,30}$/ ;
	var citycheck = /^[A-Za-z. ]{3,30}$/ ;
	var statecheck = /^[A-Za-z. ]{3,30}$/ ;
	var pincodecheck = /^[1-9]{1}[0-9]{5}$/ ; 
	// var hotel_distancecheck = /^[A-Za-z. ]{3,40}$/ ;

	if(namecheck.test(name))
	{
		document.getElementById("nameerror").innerHTML = " ";
	}
	else {
		document.getElementById("nameerror").innerHTML = "** Invalid Name Format **";
		return false;
	}

	if(citycheck.test(city))
	{
		document.getElementById("cityerror").innerHTML = " ";
	}
	else {
		document.getElementById("cityerror").innerHTML = "** Invalid City Name **";
		return false;
	}

	if(statecheck.test(state))
	{
		document.getElementById("stateerror").innerHTML = " ";
	}
	else {
		document.getElementById("stateerror").innerHTML = "** Invalid State Name **";
		return false;
	}

	if(pincodecheck.test(pincode))
	{
		document.getElementById("pincodeerror").innerHTML = " ";
	}
	else {
		document.getElementById("pincodeerror").innerHTML = "** Invalid Pincode Format **";
		return false;
	}

	// if(hotel_distancecheck.test(hotel_distance))
	// {
	// 	document.getElementById("hotel-distanceerror").innerHTML = " ";
	// }
	// else {
	// 	document.getElementById("hotel-distanceerror").innerHTML = "** Invalid Distance Format **";
	// 	return false;
	// }
}

