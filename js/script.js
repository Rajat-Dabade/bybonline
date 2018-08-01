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
                window.location.href = 'index.php';
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




function filterCake()
{
	var shape_value = '';
	var weight_value = '';
	var range = 0;
	if (document.getElementById('s1').checked) {
		shape_value = document.getElementById('s1').value;
	}
	else if (document.getElementById('s2').checked) {
		shape_value = document.getElementById('s2').value;
	} 
	else if(document.getElementById('s3').checked) {
		shape_value = document.getElementById('s3').value;
	}
	else if(document.getElementById('s4').checked){
		shape_value = document.getElementById('s4').value;
	}


	range = document.getElementById('range').value;

	if(document.getElementById('w1').checked)
	{
		weight_value = document.getElementById('w1').value;
	}
	else if(document.getElementById('w2').checked)
	{
		weight_value = document.getElementById('w2').value;
	}
	else if(document.getElementById('w3').checked)
	{
		weight_value = document.getElementById('w3').value;
	}
	else if(document.getElementById('w4').checked)
	{
		weight_value = document.getElementById('w4').value;
	}

	document.getElementById('loadingImage').style.display = 'block';

	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			document.getElementById('main').style.display = 'none';
			document.getElementById('demo').style.display = 'block';
			document.getElementById('loadingImage').style.display = 'none';
			var flg = JSON.parse(this.responseText);
				var list = [];
				if(flg.length == 0)
				{
					list.push('<h1 style="text-align : center; padding-top : 40px;">No Cake With This Filter Avaible</h1>')
				}
				for(i=0; i< flg.length; i++)
				{
					list.push('<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">\
					<div width="300">\
						<div class="hovereffect">\
							<img class="img-responsive" src='+flg[i]["image"]+' alt="" style="padding: 5%;">\
							<div class="overlay">\
								<h2>'+flg[i]["name"]+'</h2>\
								<table class="table">\
									<tr>\
										<th>Weight:</th>\
										<td>'+flg[i]["weight"]+'</td>\
									</tr>\
									<tr>\
										<th>Price:</th>\
										<td>&#8377; '+flg[i]["price"]+'</td>\
									</tr>\
									<tr>\
										<th>Shape:</th>\
										<td>'+flg[i]["shape"]+'</td>\
									</tr>\
									<tr>\
										<th>Sugar free:</th>\
										<td>'+flg[i]["sugarFree"]+'</td>\
									</tr>\
									<tr>\
										<th>Veg:</th>\
										<td>'+flg[i]["veg"]+'</td>\
									</tr>\
									<tr>\
										<th>Ingredient:</th>\
										<td>'+flg[i]["ingredients"]+'</td>\
									</tr>\
								</table>\
								<a href="addtocart.php?value=cake&productId='+flg[i]["productId"]+'&price='+flg[i]["price"]+'" style="color: #444;font-weight: bold;" class="addtocart">Add to Cart</a>\
							</div>\
						</div>\
					</div>\
				</div>');
				}
				document.getElementById('demo').innerHTML = list.join("");
			// var flg = this.responseText;
			// console.log(flg);	 
		}	

			
		};

	xhttp.open("GET", "background/cakefilter_handler.php?shape="+shape_value+"&range="+range+"&weight="+weight_value, true);
	xhttp.send();
}



function filterPastry(){
	var veg_value = '';
	var range = 0;

	if (document.getElementById('v1').checked) {
		veg_value = document.getElementById('v1').value;
	}
	else if (document.getElementById('v2').checked) {
		veg_value = document.getElementById('v2').value;
	} 


	range = document.getElementById('range').value;

	document.getElementById('loadingImage').style.display = 'block';

	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			document.getElementById('main').style.display = 'none';
			document.getElementById('demo').style.display = 'block';
			document.getElementById('loadingImage').style.display = 'none';
			var flg = JSON.parse(this.responseText);
				var list = [];
				if(flg.length == 0)
				{
					list.push('<h1 style="text-align : center; padding-top : 40px;">No Pastries With This Filter Avaible</h1>')
				}
				for(i=0; i< flg.length; i++)
				{
					list.push('<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">\
									<div width="300">\
									    <div class="hovereffect">\
									        <img class="img-responsive" src='+flg[i]["image"]+' alt="" style="padding: 5%;">\
								            <div class="overlay">\
								                <h2>'+flg[i]["name"]+'</h2>\
												<table class="table">\
													<tr>\
														<th>Price:</th>\
														<td>&#8377; '+flg[i]["price"]+'</td>\
													</tr>\
													<tr>\
														<th>Veg:</th>\
														<td>'+flg[i]["veg"]+'</td>\
													</tr>\
													<tr>\
														<th>Ingredient:</th>\
														<td>'+flg[i]["ingredients"]+'</td>\
													</tr>\
												</table>\
												<a href="addtocart.php?value=pastry&productId='+flg[i]["productId"]+'&price='+flg[i]["price"]+'" style="color: #444;font-weight: bold;" class="addtocart">Add to Cart</a>\
								            </div>\
									    </div>\
									</div>\
								</div>');
				}
				document.getElementById('demo').innerHTML = list.join("");
			// var flg = this.responseText;
			// console.log(flg);	 
		}	

			
		};

	xhttp.open("GET", "background/pastryfilter_handler.php?veg="+veg_value+"&range="+range, true);
	xhttp.send();
		
}



function filterCookie(){
	var range = 0;
	var weight_value = '';

	range = document.getElementById('range').value;

	if(document.getElementById('w1').checked)
	{
		weight_value = document.getElementById('w1').value;
	}
	else if(document.getElementById('w2').checked)
	{
		weight_value = document.getElementById('w2').value;
	}
	else if(document.getElementById('w3').checked)
	{
		weight_value = document.getElementById('w3').value;
	}
	else if(document.getElementById('w4').checked)
	{
		weight_value = document.getElementById('w4').value;
	}

	document.getElementById('loadingImage').style.display = 'block';

	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			document.getElementById('main').style.display = 'none';
			document.getElementById('demo').style.display = 'block';
			document.getElementById('loadingImage').style.display = 'none';
			var flg = JSON.parse(this.responseText);
				var list = [];
				if(flg.length == 0)
				{
					list.push('<h1 style="text-align : center; padding-top : 40px;">No Cookies With This Filter Avaible</h1>')
				}
				for(i=0; i< flg.length; i++)
				{
					list.push('<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">\
									<div width="300">\
									    <div class="hovereffect">\
									        <img class="img-responsive" src='+flg[i]["image"]+' alt="" style="padding: 5%;">\
								            <div class="overlay">\
								                <h2>'+flg[i]["name"]+'</h2>\
												<table class="table">\
														<tr>\
															<th>Weight:</th>\
															<td>'+flg[i]["weight"]+' kg</td>\
														</tr>\
														<tr>\
															<th>Price:</th>\
															<td>&#8377; '+flg[i]["price"]+'</td>\
														</tr>\
														<tr>\
															<th>Ingredient:</th>\
															<td>'+flg[i]["ingredients"]+'</td>\
														</tr>\
													</table>\
												<a href="addtocart.php?value=cookie&productId='+flg[i]["productId"]+'&price='+flg[i]["price"]+'" style="color: #444;font-weight: bold;" class="addtocart">Add to Cart</a>\
								            </div>\
									    </div>\
									</div>\
								</div>');
				}
				document.getElementById('demo').innerHTML = list.join("");
		}	

		};

	xhttp.open("GET", "background/cookiefilter_handler.php?weight="+weight_value+"&range="+range, true);
	xhttp.send();

}



function filterBread(){
	var shape_value = '';
	var weight_value = '';
	var range = 0;
	if (document.getElementById('s1').checked) {
		shape_value = document.getElementById('s1').value;
	}
	else if (document.getElementById('s2').checked) {
		shape_value = document.getElementById('s2').value;
	} 
	else if(document.getElementById('s3').checked) {
		shape_value = document.getElementById('s3').value;
	}
	else if(document.getElementById('s4').checked){
		shape_value = document.getElementById('s4').value;
	}


	range = document.getElementById('range').value;

	if(document.getElementById('w1').checked)
	{
		weight_value = document.getElementById('w1').value;
	}
	else if(document.getElementById('w2').checked)
	{
		weight_value = document.getElementById('w2').value;
	}
	else if(document.getElementById('w3').checked)
	{
		weight_value = document.getElementById('w3').value;
	}
	else if(document.getElementById('w4').checked)
	{
		weight_value = document.getElementById('w4').value;
	}

	document.getElementById('loadingImage').style.display = 'block';

	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			document.getElementById('main').style.display = 'none';
			document.getElementById('demo').style.display = 'block';
			document.getElementById('loadingImage').style.display = 'none';
			var flg = JSON.parse(this.responseText);
				var list = [];
				if(flg.length == 0)
				{
					list.push('<h1 style="text-align : center; padding-top : 40px;">No Cake With This Filter Avaible</h1>')
				}
				for(i=0; i< flg.length; i++)
				{
					list.push('<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">\
					<div width="300">\
						<div class="hovereffect">\
							<img class="img-responsive" src='+flg[i]["image"]+' alt="" style="padding: 5%;">\
							<div class="overlay">\
								<h2>'+flg[i]["name"]+'</h2>\
								<table class="table">\
									<tr>\
										<th>Price:</th>\
										<td>&#8377; '+flg[i]["price"]+'</td>\
									</tr>\
									<tr>\
										<th>Shape:</th>\
										<td>'+flg[i]["shape"]+'</td>\
									</tr>\
								</table>\
								<a href="addtocart.php?value=bread&productId='+flg[i]["productId"]+'&price='+flg[i]["price"]+'" style="color: #444;font-weight: bold;" class="addtocart">Add to Cart</a>\
							</div>\
						</div>\
					</div>\
				</div>');
				}
				document.getElementById('demo').innerHTML = list.join("");
			// var flg = this.responseText;
			// console.log(flg);	 
		}	

			
		};

	xhttp.open("GET", "background/breadfilter_handler.php?shape="+shape_value+"&range="+range+"&weight="+weight_value, true);
	xhttp.send();
}


function grab()
{
	console.log(document.getElementById('offerId').value);
}