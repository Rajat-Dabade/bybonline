<?php

	$pagename = "index.php";
    include('includes/header.php');
?>
<head>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lobster+Two:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--Animation-->
<script src="js/wow.min.js"></script>
<link href="css/animate.css" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
</script>
<script src="js/simpleCart.min.js"> </script>	
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
</head>
<body>
   <!-- content-section-starts -->
	<div class="content">
		
		<div class="special-offers-section">
			<div class="container">
				<div class="special-offers-section-head text-center dotted-line">
					<h4>Special Offers</h4>
				</div>
				<div class="special-offers-section-grids">
				 <div class="m_3"><span class="middle-dotted-line"> </span> </div>
				   <div class="container">
					  <ul id="flexiselDemo2">
						<li>
							<div class="offer">
								<div class="offer-image">	
									<img src="images/p1.jpg" class="img-responsive" alt=""/>
								</div>
								<div class="offer-text">
									<h4>Olister Combo pack lorem</h4>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
									<input type="button" value="Grab It">
									<span></span>
								</div>
								<div class="clearfix"></div>
							</div>
						</li>
						<li>
							<div class="offer">
								<div class="offer-image">	
									<img src="images/p2.jpg" class="img-responsive" alt=""/>
								</div>
								<div class="offer-text">
									<h4>Chicken Jumbo pack lorem</h4>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
									<input type="button" value="Grab It">
									<span></span>
								</div>
								<div class="clearfix"></div>
							</div>
						</li>
						<li>
							<div class="offer">
								<div class="offer-image">	
									<img src="images/p1.jpg" class="img-responsive" alt=""/>
								</div>
								<div class="offer-text">
									<h4>Crab Combo pack lorem</h4>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
									<input type="button" value="Grab It">
									<span></span>
								</div>
								
								<div class="clearfix"></div>
								</div>
						</li>
						<li>
							<div class="offer">
								<div class="offer-image">	
									<img src="images/p2.jpg" class="img-responsive" alt=""/>
								</div>
								<div class="offer-text">
									<h4>Chicken Jumbo pack lorem</h4>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
									<input type="button" value="Grab It">
									<span></span>
								</div>
								
								<div class="clearfix"></div>
								</div>
					    </li>
					 </ul>
				 <script type="text/javascript">
					$(window).load(function() {
						
						$("#flexiselDemo2").flexisel({
							visibleItems: 3,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems: 2
								},
								tablet: { 
									changePoint:768,
									visibleItems: 3
								}
							}
						});
						
					});
				    </script>
				    <script type="text/javascript" src="js/jquery.flexisel.js"></script>
				</div>
			</div>
		</div>
		</div>
		
	</div>
	<!-- content-section-ends -->


<!-- banner-bottom -->
	<div class="banner-bottom animated wow lightSpeedIn" data-wow-duration="1500ms" data-wow-delay="800ms">
		<ul id="flexiselDemo1">	
			<li>
				<a href="cake.php"><div class="item item-sub">
					<div class="item1">
						<i class="glyphicon glyphicon-cutlery" aria-hidden="true"></i>
						<h3>Cake</h3>
					</div>
					<div class="p-mask">
						<h4>Bake Your Bread</h4>
						<p>Content.</p>
						
					</div>
				</div></a>
			</li>
			<li>
				<a href="bread.php"><div class="item item-sub1">
					<div class="item1">
						<i class="glyphicon glyphicon-cutlery" aria-hidden="true"></i>
						<h3>Bread</h3>
					</div>
					<div class="p-mask">
						<h4>Bake Your Bread</h4>
						<p>Content</p>
					</div>
				</div></a>
			</li>
			<li>
				<a href="cookies.php"><div class="item item-sub2">
					<div class="item1">
						<i class="glyphicon glyphicon-cutlery" aria-hidden="true"></i>
						<h3>Cookies</h3>
					</div>
					<div class="p-mask">
						<h4>Bake Your Bread</h4>
						<p>Content.</p>
					</div>
				</div></a>
			</li>
			<li>
				<a href="pastries.php"><div class="item item-sub3">
					<div class="item1">
						<i class="glyphicon glyphicon-cutlery" aria-hidden="true"></i>
						<h3>Pastries</h3>
					</div>
					<div class="p-mask">
						<h4>Bake Your Bread</h4>
						<p>Content.</p>
					</div>
				</div></a>
			</li>
			<li>
				<a href="otherstuff.php"><div class="item item-sub3">
					<div class="item1">
						<i class="glyphicon glyphicon-cutlery" aria-hidden="true"></i>
						<h3>Other Stuff</h3>
					</div>
					<div class="p-mask">
						<h4>Bake Your Bread</h4>
						<p>Content.</p>
					</div>
				</div></a>
			</li>
		</ul>
			<script type="text/javascript">
				$(window).load(function() {
				$("#flexiselDemo1").flexisel({
					visibleItems: 4,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed: 3000,    		
					pauseOnHover: true,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: { 
						portrait: { 
							changePoint:480,
							visibleItems: 1
						}, 
						landscape: { 
							changePoint:640,
							visibleItems: 2
						},
						tablet: { 
							changePoint:768,
							visibleItems: 3
						}
					}
				});
				
			 });
			</script>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	</div>
<!-- //banner-bottom -->
<!-- banner-bottom-grids -->
	<div class="banner-bottom-grids">
		<div class="col-md-7 banner-bottom-grid-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
			<h2><span>Happiness is</span></h2>
			<h1>the smell of freshly baked bread.</h1>
		</div>
		</div>
		<div class="col-md-5 banner-bottom-grid animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
			<img src="images/6.jpg" alt=" " class="img-responsive" />
			<div class="banner-bottom-grid1">
				<div class="banner-bottom-grid1-pos animated wow fadeInUpBig" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h3>I like to think of <span>bread as really </span> <i>Bland cake</i></h3>
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>
	<div class="banner-bottom-grids">
		<div class="col-md-4 banner-bottom-grid-sub animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
			<img src="images/7.jpg" alt=" " class="img-responsive" />
			<div class="banner-bottom-grid-sub1">
				<div class="banner-bottom-grid-sub-pos">
					<h3><span>god gives us</span> the ingredients for our daily <i>Bread</i>
						but he expects us to do the <span>Baking !</span></h3>
				</div>
			</div>
		</div>
		<div class="col-md-8 banner-bottom-grid-left1 animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="1000ms">
			<p>For it is we who must pray for our daily bread, and if he grants it to us, it is only through
				our labour, our skill and preparation</p>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- //banner-bottom-grids -->
<?php 
	include('includes/footer.php');
?>