<?php
    include('includes/header.php');
?>

<head>
	<!-- Custom CSS -->
        <link href="css/custom.css" rel="stylesheet">  
</head>

<!--Product Page-->

<div id="category-nav">
	<hr>
		<h1 align="center" id="user-head">Our Product Categories</h1>
	<hr>
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
</div>

<!--/Product Page-->

<?php
    include('includes/footer.php');
?>