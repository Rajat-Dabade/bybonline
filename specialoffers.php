<?php

	$pagename = "specialoffers.php";
	include('includes/header.php');
	$db = new Database();
	$conn = $db->getConnection();

	$query = "SELECT * FROM offers";
	
	$q = $conn->query($query);

?>
<head>       
<!-- //for-mobile-apps -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="css/custom.css">
<!-- //js -->
<!-- for-gallery-rotation -->
<script src="js/modernizr.custom.97074.js"></script>
<!-- //for-gallery-rotation -->
<!-- FlexSlider -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				  </script>
<!-- //FlexSlider -->
<!-- start-smoth-scrolling -->
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
<!-- start-smoth-scrolling -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Comfortaa:400,300,700' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900" rel="stylesheet">
</head>
<!-- Main Body -->
<hr>
<h1 align = "center" id="user-head">Special Offers</h1>
<hr>

<!-- cake category -->
<div id="gallery" class="gallery">
	<div class="container">
		<div class="gallery-grids">
			<section>
				<ul id="da-thumbs" class="da-thumbs">
					<?php 

						if($q->setFetchMode(PDO::FETCH_ASSOC))
						{
							while ($r = $q->fetch()){
								$offerId = $r['offer_id'];
								$heading = $r['heading'];
								$image = $r['image'];
								$description = $r['description'];

					?>
					<li>
						<a href="images/55.jpg" class=" mask b-link-stripe b-animate-go swipebox"  title="">
							<img src="<?php echo $image;?>" alt="" />
							<div>
								<h5><?php echo $heading; ?></h5>
								<span><?php echo $description; ?></span>
							</div>
						</a>
					</li>

					<?php 
							}
						}
					?>
					<!-- <li>
						<a href="images/66.jpg" class=" mask b-link-stripe b-animate-go swipebox"  title="">
							<img src="images/66.jpg" alt="" />
							<div>
								<h5>Bake Your Bread</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/77.jpg" class=" mask b-link-stripe b-animate-go swipebox"  title="">
							<img src="images/77.jpg" alt="" />
							<div>
								<h5>Bake Your Bread</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/88.jpg" class=" mask b-link-stripe b-animate-go swipebox"  title="">
							<img src="images/88.jpg" alt="" />
							<div>
								<h5>Bake Your Bread</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>	
						<a href="images/99.jpg" class=" mask b-link-stripe b-animate-go swipebox"  title="">
							<img src="images/99.jpg" alt="" />
							<div>
								<h5>Bake Your Bread</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/55.jpg" class=" mask b-link-stripe b-animate-go swipebox"  title="">
							<img src="images/55.jpg" alt="" />
							<div>
								<h5>Bake Your Bread</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/66.jpg" class=" mask b-link-stripe b-animate-go swipebox"  title="">
							<img src="images/66.jpg" alt="" />
							<div>
								<h5>Bake Your Bread</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/77.jpg" class=" mask b-link-stripe b-animate-go swipebox"  title="">
							<img src="images/77.jpg" alt="" />
							<div>
								<h5>Bake Your Bread</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/88.jpg" class=" mask b-link-stripe b-animate-go swipebox"  title="">
							<img src="images/88.jpg" alt="" />
							<div>
								<h5>Bake Your Bread</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					 -->
				</ul>
			</section>
			<script type="text/javascript" src="js/jquery.hoverdir.js"></script>	
			<script type="text/javascript">
				$(function() {
				
					$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

				});
			</script>
		</div>
	</div>
</div>
<!--<div class="container" style="margin-top: -70px;">
	<div class="row">
		<div class="col-md-4"></div>
			<div class="col-md-4">
			<nav>
			  <ul class="pagination paging animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp;">
				<li>
				  <a href="#" aria-label="Previous">
					<span aria-hidden="true">«</span>
				  </a>
				</li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li>
				  <a href="#" aria-label="Next">
					<span aria-hidden="true">»</span>
				  </a>
				</li>
			  </ul>
			</nav>
		</div>	
		<div class="col-md-4"></div>
	</div>
</div>-->
	
<!-- //cake category -->
<?php
include('includes/footer.php');
?>
