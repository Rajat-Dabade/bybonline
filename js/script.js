//Login Function

function login(){
    var email = document.getElementById('email').value;
	var password = document.getElementById('password').value;
	
	console.log(email);
	console.log(password);

    if(document.getElementById('login').value == "LOGIN"){
        document.getElementById('login').value = "LOGGING....";
    }

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
			var flg = this.responseText;
			console.log(flg);
            if(flg == 0)
            {
                document.getElementById('checkLogin').innerhtml = '<div class="alert alert-danger"><strong>Login Failed!</strong> Please enter valid credentials or verify your account if not.</div>';
                if(document.getElementById('login').value == "LOGGING...."){
                    document.getElementById('login').value = "LOGIN FAIL";
                }
            }
            else{
                window.location.href = 'index.php?flg='+flg;
            }
        }
    };

    xhttp.open("GET", "background/login_handler.php?email="+email+"&password="+password, true);
    xhttp.send();
}


//Registration Function
function registration(){
	var name = document.getElementById('name').value;
	var email = document.getElementById('email').value;
	var password = document.getElementById('password').value;
	var confirmPassword = document.getElementById('confirm_password').value;
	var mobile = document.getElementById('mobile').value;
	console.log(mobile);

	if(name == ""){
		document.getElementById('errorName').innerHTML = 'Name is required';
	}
	else if(email == "") {
		document.getElementById('errorName').innerHTML = '';
		document.getElementById('errorEmail').innerHTML = 'Email is required';
	}
	else if(mobile == "") {
		document.getElementById('errorEmail').innerHTML = '';
		document.getElementById('errorMobile').innerHTML = 'Contact is required';
	}
	else if(password == "") {
		document.getElementById('errorMobile').innerHTML = '';
		document.getElementById('errorPassword').innerHTML = "Password is required";
	}
	
	else if(confirmPassword != password) {
		document.getElementById('errorMobile').innerHTML = '';
		document.getElementById('errorPassword').innerHTML = 'Password does not match';
	}
	else if(validateEmail(email) == false){
		document.getElementById('errorPassword').innerHTML = '';
		document.getElementById('errorEmail').innerHTML = 'Please Enter valid Email-Address';
	}
	else {
		document.getElementById('errorName').innerHTML = '';
		document.getElementById('errorEmail').innerHTML = '';
		document.getElementById('errorMobile').innerHTML = '';
		document.getElementById('errorPassword').innerHTML = '';

		register(name, email, password, mobile);
	}
}

function register(name, email, password, mobile){
	if(document.getElementById("submit").value == "SUBMIT"){
		document.getElementById("submit").value = "SUBMITTING...";
	}

	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			var flg = this.responseText;
			if(flg == 1){
				document.getElementById('errorEmail').innerHTML = "This Email already exist";
				if(document.getElementById("submit").value == "SUBMITTING..."){
					document.getElementById("submit").value = "SUBMIT";
				}
			}
			else{
				document.getElementById('confirmRegistration').innerHTML = flg;
				if(document.getElementById("submit").value == "SUBMITTING..."){
					document.getElementById("submit").value = "SUBMIT";
				}
			}	
		}
	};

	xhttp.open("GET", "background/registration_handler.php?name="+name+"&email="+email+"&mobile="+mobile+"&password="+password, true);
	xhttp.send();

}


function validateEmail(email) {
    var x = email;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        return false;
    }
    return true;
}