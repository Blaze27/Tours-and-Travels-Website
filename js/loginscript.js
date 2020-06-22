var x = document.getElementById("login");
var y = document.getElementById("signup");
var z = document.getElementById("btn");


var w = document.getElementById("social-icons")
var a = document.getElementById("remember-me")
var b = document.getElementById("login-btn")

function admin()
{
	username=document.getElementById("loginusername").value;
	password=document.getElementById("loginpassword").value;

	if(username=="blaze" && password=="Qwerty11")
	{
		return true;

		//window.location.replace = "https://www.google.com";
	}
	else
	{
		document.getElementById("adminerror").innerHTML="** Invalid Admin Credentials **";
		return false;
	}
}

function signup() {
	document.getElementById("form-box").style.height="720px";
	x.style.left = "-400px";
	y.style.left = "50px";
	z.style.left = "110px";
}

function login() {
	document.getElementById("form-box").style.height="500px";
	x.style.left = "50px";
	y.style.left = "450px";
	z.style.left = "0px";
}

function shift() {
	w.style.right = "90px";
	a.style.right = "90px";
	b.style.right = "90px";
}

function validation() {
	var name = document.getElementById("name").value;
	var username = document.getElementById("username").value;
	var email = document.getElementById("email").value;
	var dob = document.getElementById("dob").value;
	var phno = document.getElementById("phno").value;
	var password = document.getElementById("password").value;

	var namecheck = /^[A-Za-z. ]{3,30}$/ ;
	var usernamecheck = /^[A-Za-z0-9]{3,15}$/ ;
	var passwordcheck = /^(?=.*[0-9])(?=.*[!@#$%^&*])[A-Za-z0-9!@#$%^&*]{8,16}$/ ;
	var emailcheck = /^[A-Za-z0-9_]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z.]{2,6}$/ ;
	var phnocheck = /^[6-9]{1}[0-9]{9}$/ ; 
	// var dobcheck = /^([0-2][0-9]|(3)[0-1])(\/)(((0)[0-9])|((1)[0-2]))(\/)\d{4}$/ ;

	if(namecheck.test(name))
	{
		document.getElementById("nameerror").innerHTML = " ";
	}
	else {
		document.getElementById("nameerror").innerHTML = "** Invalid Name Format **";
		return false;
	}

	if(usernamecheck.test(username))
	{
		document.getElementById("usernameerror").innerHTML = " ";
	}
	else {
		document.getElementById("usernameerror").innerHTML = "** Invalid Username Format **";
		return false;
	}

	if(emailcheck.test(email))
	{
		document.getElementById("emailerror").innerHTML = " ";
	}
	else {
		document.getElementById("emailerror").innerHTML = "** Invalid Email Format **";
		return false;
	}

	if(dobcheck.test(dob))
	{
		document.getElementById("doberror").innerHTML = " ";
	}
	else {
		document.getElementById("doberror").innerHTML = "** Invalid Date **";
		return false;
	}

	if(phnocheck.test(phno))
	{
		document.getElementById("phnoerror").innerHTML = " ";
	}
	else {
		document.getElementById("phnoerror").innerHTML = "** Invalid Phone Number **";
		return false;
	}

	if(passwordcheck.test(password))
	{
		document.getElementById("passworderror").innerHTML = " ";
	}
	else {
		document.getElementById("passworderror").innerHTML = "** Invalid Password Format **";
		return false;
	}


}

