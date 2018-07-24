<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Register</title>
<!-- Custom Theme files -->
<link href="css/register.css" rel="stylesheet" type="text/css" media="all"/>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Trendy Signup Form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!--Google Fonts-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<script src="js/jquery-1.11.1.min.js"></script>

</head>
<body>
<div class="wthree-dot">
	<h1>Welcome, Register with us</h1>
	<div class="profile">
		<div class="wrap">
			<div class="wthree-grids">
				<div class="content-left">
					<div class="content-info">
						<img class="agile-img" src="images/c1.png" alt=" " class="img-responsive">
						<div class="slider">
							<div class="callbacks_container">
								<ul class="rslides callbacks callbacks1" id="slider4">
									<li>
										<div class="w3layouts-banner-info">
											<h3>Bake Your Bread</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et placerat leo, non condimentum justo</p>
										</div>
									</li>
									<li>
										<div class="w3layouts-banner-info">
											<h3>Why Us?</h3>
											<p>By creating an account at Bake Your Bread you will be able to sketch cake of your own design and able to submit, access each page of a site, keep track of the orders you have previously made and many more.</p>
										</div>
									</li>
								</ul>
							</div>
							<div class="clear"> </div>
						</div>
						<div class="agileinfo-follow">
							<h4>Sign Up with</h4>
						</div>
						<div class="agileinfo-social-grids">
							<ul>
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-rss"></i></a>
								<a href="#"><i class="fa fa-vk"></i></a>
								<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
							</ul>
						</div>
						<div class="agile-signin">
							<h4>Already have an account <a href="login.php">Sign In</a></h4>
						</div>
					</div>
				</div>
				<div class="content-main">
					<div class="w3ls-subscribe">
						<h4 align="center">New User?</h4>
						
							<input type="text" name="name" id="name" placeholder="First Name" required="">
							<span id="errorName" style="color:red"></span>

							<input type="email" name="email" id="email" placeholder="Email" required="">
							<span id="errorEmail" style="color:red"></span>

							<input type="text" name="mobile" id="mobile" placeholder="Phone" required="" maxlength="10">
							<span id="errorMobile" style="color:red"></span>

							<input type="password" name="Password" id="password" placeholder="Password" required="">
							<span id="errorPassword" style="color:red"></span>

							<input type="password" name="Password" id="confirm_password" placeholder="Confirm Password" required="">
							<input type="submit" onclick="registration()" id="submit" value="SUBMIT">
							<br><br><br>
							<div id="confirmRegistration"></div>
					</div>
				</div>
				<div class="clear"> </div>
			</div>
			<div class="wthree_footer_copy">
				<p>© 2018 Bake Your Bread. All rights reserved | Design by <a href="http://saif53.info">Saif Creations</a></p>
			</div>
		</div>
	</div>
</div>
<script src="js/responsiveslides.min.js"></script>
									<script>
										// You can also use "$(window).load(function() {"
										$(function () {
										  // Slideshow 4
										  $("#slider4").responsiveSlides({
											auto: true,
											pager:true,
											nav:false,
											speed: 400,
											namespace: "callbacks",
											before: function () {
											  $('.events').append("<li>before event fired.</li>");
											},
											after: function () {
											  $('.events').append("<li>after event fired.</li>");
											}
										  });
									
										});
									 </script>
									 <script src="js/script.js"></script>
									<!--banner Slider starts Here-->
</body>
</html>