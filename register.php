<?php 
	include('includes/header.php');
?>

<head>
	<style type="text/css">
		form {
	  		margin: 30px auto;
	    }
		.textInput {
			border: none;
			height: 28px;
			margin: 2px;
			border: 2px solid blue;
			font-size: 1.2em;
			padding: 5px;
			width: 95%;
		}
		.textInput:focus {
			
		}
		.btn {
			width: 98.6%;
			border: none;
			margin-top: 5px;
			color: white;
			background-color: blue;
			border-radius: 5px;
			padding: 12px;
		}
		label{
			color: #EEEEEE;
			font-size: 20px
		}
		body {
			opacity: 0.9;
			filter: alpha(opacity=90); /* For IE8 and earlier 
		}*/

	</style>
<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Chela+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Coda+Caption:800" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>
<body style="background: black;background-image: url(images/cake.jpg)";>
  	<div class="container" style="background:black " >
    <div class="jumbotron" style="margin-top: 5px;">

      <h2> 
        <i class="fa fa-laptop" aria-hidden="true"></i>
        <span style= "font-family: 'Merienda', cursive";>Registration Form</span>
      </h2>
    </div>
  
    
       <form method="POST" action="index.php" onsubmit="return Validate()" name="vform" >
    
         
    <div id="username_div">
      <div class="row">
      
      <label class="col-lg-2"><i class="fa fa-user-o" aria-hidden="true"></i> 
        <span style="font-family: 'Lobster', cursive";>Username:</span></label>
      
      <div class="col-lg-4">
      <input type="text" name="username" class="textInput">
    </div>
  </div>

      <div id="name_error"></div>
    </div>
      <br>
    <div id="email_div">
      <div class="row">
      <label class="col-lg-2"><i class="fa fa-envelope" aria-hidden="true"></i>
        <span style="font-family: 'Lobster', cursive";>Email:</span></label> 
      <div>
        <div class="col-lg-4">
      <input type="email" name="email" class="textInput">
    </div>
  </div>
      <div id="email_error"></div>
    </div>
      <br> 

    <div id="password_div">
      <div class="row">
      <label class="col-lg-2"><i class="fa fa-key" aria-hidden="true"></i><span style="font-family: 'Lobster', cursive";>Password:</span></label> 
      <div class="col-lg-4">
        

        
      <input type="password" name="password" class="textInput">
    </div>
  </div>
  </div>

    <br>

    <div id="pass_confirm_div">
      <div class="row">
      <div class="col-lg-2">
       <label> <i class="fa fa-thumbs-up" aria-hidden="true"></i>
        <span style="font-family: 'Lobster', cursive";>Password &nbsp&nbsp&nbsp&nbsp&nbsp&nbspconfirm:</span></label> 
     </div>
     <div class="col-lg-4">
       <input type="password" name="password_confirm" class="textInput">
     </div>
   </div>
       <div id="password_error"></div>
    </div>

    <div class="row">
      <div class="col-lg-2 col-lg-offset-2">
        <span style= "font-family: 'Coda Caption', sans-serif;
";>
    <input type="submit" name="register" value="Register" class="btn">
  </span>
    </div>
  </div>
  </div>
   </div>
   </form>
  </div>


  <script>
  	var username = document.forms['vform']['username'];
	var email = document.forms['vform']['email'];
	var password = document.forms['vform']['password'];
	var password_confirm = document.forms['vform']['password_confirm'];
	// SELECTING ALL ERROR DISPLAY ELEMENTS
	var name_error = document.getElementById('name_error');
	var email_error = document.getElementById('email_error');
	var password_error = document.getElementById('password_error');
	// SETTING ALL EVENT LISTENERS
	username.addEventListener('blur', nameVerify, true);
	email.addEventListener('blur', emailVerify, true);
	password.addEventListener('blur', passwordVerify, true);
	// validation function
	function Validate() {
	  // validate username
	  if (username.value == "") {
	    username.style.border = "1px solid red";
	    document.getElementById('username_div').style.color = "red";
	    name_error.textContent = "Username is required";
	    username.focus();
	    return false;
	  }
	  // validate username
	  if (username.value.length < 3) {
	    username.style.border = "1px solid red";
	    document.getElementById('username_div').style.color = "red";
	    name_error.textContent = "Username must be at least 3 characters";
	    username.focus();
	    return false;
	  }
	  // validate email
	  if (email.value == "") {
	    email.style.border = "1px solid red";
	    document.getElementById('email_div').style.color = "red";
	    email_error.textContent = "Email is required";
	    email.focus();
	    return false;
	  }
	  // validate password
	  if (password.value == "") {
	    password.style.border = "1px solid red";
	    document.getElementById('password_div').style.color = "red";
	    password_confirm.style.border = "1px solid red";
	    password_error.textContent = "Password is required";
	    password.focus();
	    return false;
	  }
	  // check if the two passwords match
	  if (password.value != password_confirm.value) {
	    password.style.border = "1px solid red";
	    document.getElementById('pass_confirm_div').style.color = "red";
	    password_confirm.style.border = "1px solid red";
	    password_error.innerHTML = "The two passwords do not match";
	    return false;
	  }
	}
// event handler functions
	function nameVerify() {
	  if (username.value != "") {
	   username.style.border = "1px solid #5e6e66";
	   document.getElementById('username_div').style.color = "#5e6e66";
	   name_error.innerHTML = "";
	   return true;
	  }
	}
	function emailVerify() {
	  if (email.value != "") {
	    email.style.border = "1px solid #5e6e66";
	    document.getElementById('email_div').style.color = "#5e6e66";
	    email_error.innerHTML = "";
	    return true;
	  }
	}
	function passwordVerify() {
	  if (password.value != "") {
	    password.style.border = "1px solid #5e6e66";
	    document.getElementById('pass_confirm_div').style.color = "#5e6e66";
	    document.getElementById('password_div').style.color = "#5e6e66";
	    password_error.innerHTML = "";
	    return true;
	  }
	  if (password.value === password_confirm.value) {
	    password.style.border = "1px solid #5e6e66";
	    document.getElementById('pass_confirm_div').style.color = "#5e6e66";
	    password_error.innerHTML = "";
	    return true;
	  }
	}
</script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>

<?php 
	include('includes/footer.php');
?>