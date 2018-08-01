<?php
    
    session_start();
        if(!isset($_SESSION['name'])){
            session_destroy();
		}
		

		$navdata = file_get_contents('./json/header/navbar.json');
		$navdata = json_decode($navdata);
		$siteDetails = file_get_contents('./json/header/siteDetails.json');
		$siteDetails = json_decode($siteDetails);

		include_once 'db_config.php';

		$db = new Database();
		$conn = $db->getConnection();

		$query = "SELECT address, contact, about_us FROM company_details";

		$q = $conn->query($query);
		if($q->setFetchMode(PDO::FETCH_ASSOC))
		{
			while ($r = $q->fetch()){
				$address = $r['address'];
				$contact = $r['contact'];
				$about_us = $r['about_us'];
			}
		}

?>


<!DOCTYPE html>
<html>
<head>
<title>Bake Your Bread</title>
<link rel="icon" type="icon/png" href="images/logo.png">
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Best Bakery Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 

<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
<link href='//fonts.googleapis.com/css?family=Oleo+Script:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smooth-scrolling -->

<style type="text/css">
	.header-right nav {
		position: absolute;
	    top: -23%;
	    left: 15.409% !important;
	    color: #999;
	    z-index: -1;
	}

	.header-right nav ul li i {
	  font-size: 1.5em;
	  background:#F3AD45;
	  padding: 0.75em;
	  border-radius: 50%;
	  color: white;
	  display: inline-block;
	  overflow: hidden;
	  text-shadow: 0px 0px #D5963A, 1px 1px #D5963A, 2px 2px #D5963A, 3px 3px #D5963A, 4px 4px #D5963A, 5px 5px #D5963A, 6px 6px #D5963A, 7px 7px #D5963A, 8px 8px #D5963A, 9px 9px #D5963A, 10px 10px #D5963A, 11px 11px #D5963A, 12px 12px #D5963A, 13px 13px #D5963A, 14px 14px #D5963A, 15px 15px #D5963A, 16px 16px #D5963A, 17px 17px #D5963A, 18px 18px #D5963A, 19px 19px #D5963A, 20px 20px #D5963A, 21px 21px #D5963A, 22px 22px #D5963A, 23px 23px #D5963A, 24px 24px #D5963A, 25px 25px #D5963A, 26px 26px #D5963A, 27px 27px #D5963A, 28px 28px #D5963A, 29px 29px #D5963A, 30px 30px #D5963A, 31px 31px #D5963A, 32px 32px #D5963A, 33px 33px #D5963A, 34px 34px #D5963A, 35px 35px #D5963A, 36px 36px #D5963A, 37px 37px #D5963A, 38px 38px #D5963A, 39px 39px #D5963A, 40px 40px #D5963A, 41px 41px #D5963A, 42px 42px #D5963A, 43px 43px #D5963A, 44px 44px #D5963A, 45px 45px #D5963A, 46px 46px #D5963A, 47px 47px #D5963A, 48px 48px #D5963A, 49px 49px #D5963A, 50px 50px #D5963A, 51px 51px #D5963A, 52px 52px #D5963A, 53px 53px #D5963A, 54px 54px #D5963A, 55px 55px #D5963A, 56px 56px #D5963A, 57px 57px #D5963A, 58px 58px #D5963A, 59px 59px #D5963A, 60px 60px #D5963A;
	}

	.header-right nav ul li.active i {
	  background:#F3AD45;
	  text-shadow: 0px 0px #D5963A, 1px 1px #D5963A, 2px 2px #D5963A, 3px 3px #D5963A, 4px 4px #D5963A, 5px 5px #D5963A, 6px 6px #D5963A, 7px 7px #D5963A, 8px 8px #D5963A, 9px 9px #D5963A, 10px 10px #D5963A, 11px 11px #D5963A, 12px 12px #D5963A, 13px 13px #D5963A, 14px 14px #D5963A, 15px 15px #D5963A, 16px 16px #D5963A, 17px 17px #D5963A, 18px 18px #D5963A, 19px 19px #D5963A, 20px 20px #D5963A, 21px 21px #D5963A, 22px 22px #D5963A, 23px 23px #D5963A, 24px 24px #D5963A, 25px 25px #D5963A, 26px 26px #D5963A, 27px 27px #D5963A, 28px 28px #D5963A, 29px 29px #D5963A, 30px 30px #D5963A, 31px 31px #D5963A, 32px 32px #D5963A, 33px 33px #D5963A, 34px 34px #D5963A, 35px 35px #D5963A, 36px 36px #D5963A, 37px 37px #D5963A, 38px 38px #D5963A, 39px 39px #D5963A, 40px 40px #D5963A, 41px 41px #D5963A, 42px 42px #D5963A, 43px 43px #D5963A, 44px 44px #D5963A, 45px 45px #D5963A, 46px 46px #D5963A, 47px 47px #D5963A, 48px 48px #D5963A, 49px 49px #D5963A, 50px 50px #D5963A, 51px 51px #D5963A, 52px 52px #D5963A, 53px 53px #D5963A, 54px 54px #D5963A, 55px 55px #D5963A, 56px 56px #D5963A, 57px 57px #D5963A, 58px 58px #D5963A, 59px 59px #D5963A, 60px 60px #D5963A;
	}

	.header-right nav ul li.active a{
		color:#F3AD45;
	}
</style>
</head>
	
<body>
<!-- banner -->
	<div class="banner-figures">
		<div class="banner1">
		<div class="container banner-drop">
				<div class="header header1">
					<div class="header-left">
						<ul>
							<li class="animated wow fadeInLeftBig" data-wow-duration="1200ms" data-wow-delay="800ms"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span><?php echo $address ?></li>
							<li class="animated wow fadeInLeftBig" data-wow-duration="1200ms" data-wow-delay="900ms"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +91 <?php echo $contact; ?></li>
							<li class="animated wow fadeInLeftBig" data-wow-duration="1200ms" data-wow-delay="1000ms"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> <a href="mailto:info@example.com">saif.creations53@gmail.com</a></li>
						</ul>
					</div>
					<div class="header-right header-right1">
						<nav>
						  <ul>
							<?php 

								foreach($navdata as $navbar)
								{
									if($navbar->goto == "login.php")
									{
										if(isset($_SESSION['name']))
										{
											echo '<li>
												<a href='.$navbar->goto.'><i class="'.$navbar->class.'" aria-hidden="true"></i><span>'.$_SESSION['name'].'</span></a>
											</li>';
										}
										else{
											echo '<li>
													<a href='.$navbar->goto.'><i class="'.$navbar->class.'" aria-hidden="true"></i><span>'.$navbar->page.'</span></a>
												</li>';
										}
									}
									elseif($navbar->goto == "register.php")
									{
										if(isset($_SESSION['name']))
										{
											echo '<li>
													<a href="logout.php"><i class="'.$navbar->class.'" aria-hidden="true"></i><span>Logout</span></a>
												</li>';
										}
										else{
											echo '<li>
													<a href="register.php"><i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i><span>Register</span></a>
												</li>';
										}
									}
									elseif($pagename == $navbar->goto)
									{
											echo '<li class="active">
												<a href='.$navbar->goto.'><i class="'.$navbar->class.'" aria-hidden="true"></i><span>'.$navbar->page.'</span></a>
											</li>';	
									}
									else{ 
											echo '<li>
											<a href='.$navbar->goto.'><i class="'.$navbar->class.'" aria-hidden="true"></i><span>'.$navbar->page.'</span></a>
										</li>';
										
									}
								}
							
							?>

						  </ul>
						</nav>
						<div class="menu-icon animated wow zoomIn" data-wow-duration="1000ms" data-wow-delay="800ms"><span></span></div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="logo animated wow bounceInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h1><a href="index.php"><span><?php echo $siteDetails->sub_title; ?></span> <?php echo $siteDetails->main_title; ?> </a></h1>
				</div>
				<div class="social-icons animated wow bounceInDown" data-wow-duration="1000ms" data-wow-delay="800ms">
					<ul>
						<li><a href="#" class="twitter"></a></li>
						<li><a href="#" class="facebook"></a></li>
						<li><a href="#" class="google"></a></li>
						<li><a href="#" class="p"></a></li>
					</ul>
				</div>
			</div>
		</div>
			<script>
				(function($){
				  $(".menu-icon").on("click", function(){
						$(this).toggleClass("open");
						$(".container").toggleClass("nav-open");
						$("nav ul li").toggleClass("animate");
				  });
				  
				})(jQuery);
			</script>
	</div>
<!-- //banner -->