<?php 

	session_start();
	if(isset($_SESSION['name']))
	{
		header('Location: index.php'); 
	}

?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bake Your Bread Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" /> <!-- Flexslider-CSS -->
<link href="css/font-awesome.css" rel="stylesheet"><!-- Font-awesome-CSS --> 
<link href="css/login.css" rel='stylesheet' type='text/css'/><!-- Stylesheet-CSS -->
<link href="//fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>	

</head>
<body>
	<div class="container">
		<div class="agile_info">
			<div class="w3l_form">
				<div class="left_grid_info">
					<h3>Welcome, Please Sign In</h3>
					<h4>New Customers</h4>
					<p>
					Login to your account at Bake Your Bread to access each page of a site, and keep track of the orders you have previously made and many more.</p>
				</div>
			</div>
			<div class="main-agile" >
		
		<div class="content-wthree">
			<!-- <div class="about-middle"> -->
			<div class="flexslider">
				<ul class="slides">
				  <li>	  		
						<div class="about-midd-main">
							<img class="agile-img" src="images/c1.png" alt=" " class="img-responsive">
							<h4>Signin to your account</h4>
						</div>
						<div class="new-account-form">
									<div class="inputs-w3ls">
										<p>Email</p>
										<i class="fa fa-envelope" aria-hidden="true"></i>
										<input type="email" id="email" class="email" name="Email" placeholder="" required="">
									</div>
									<div class="inputs-w3ls">
										<p>Password</p>
										<i class="fa fa-unlock-alt" aria-hidden="true"></i>
											<input type="password" id="password" class="password" name="Password" placeholder="" required="">
									</div>
									<label class="anim">
										<input type="checkbox" class="checkbox">
										<span>Remember Me</span> 
										<a href="#">Forgot Password</a>
									</label> 
										<input type="submit" onclick="login()" id="login" value="LOGIN"> 
										<br>
										<div id="checkLogin" style="color: red;font-size: 15px;text-align: center;"></div>
									<center><label>Do not have an account? <a href="register.php">Click here</a></label></center>
						</div>
					
				  </li>
				
				</ul>
			</div>

			
		
		<!-- </div> -->
		</div>
	</div>
	<div class="clear"> </div>
		</div>
	</div>
	


		

	
<script src="js/jquery.min.js"></script>
<script src="js/script.js"></script>
	<!-- FlexSlider -->
				  <script defer src="js/jquery.flexslider.js"></script>
				  <script type="text/javascript">
					$(function(){
					 
					});
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				  </script>
		<!-- FlexSlider -->

</body>
</html>