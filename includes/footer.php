<!-- footer-top -->
<div class="footer-top animated wow zoomInDown" data-wow-duration="1000ms" data-wow-delay="800ms">
		<div class="container">
			<h3>For Door delivery call- to- us <span>+91 <?php echo $contact; ?></span></h3>
			<p>Request a free estimate from our <span>toll free</span> number</p>
			<div class="more">
				<a href="mail.php">Contact Us</a>
			</div>
			<div class="footer-top-image">
				<img src="images/1.png" alt=" " class="img-responsive" />
			</div>
		</div>
	</div>
<!-- //footer-top -->
<!-- footer -->
	<div class="footer-copy animated wow bounceInDown" data-wow-duration="1000ms" data-wow-delay="800ms">
		<div class="container">
			<div class="footer-copy-grids">
				<div class="col-md-3 footer-copy-grid">
					<h3>About <span>Bakery</span></h3>
					<img src="images/6.jpg" alt=" " class="img-responsive" />
					<p> <?php echo $about_us; ?> </p>
				</div>
				<div class="col-md-3 footer-copy-grid">
					<h3>Contact <span>Us</span></h3>
					<form>
						<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
						<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
						<textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required>Message...</textarea>
						<input type="submit" value="Submit" >
					</form>
				</div>
				<div class="col-md-3 footer-copy-grid">
					<h3>Popular <span>Items</span></h3>
					<div class="footer-copy-grids">
						<div class="col-xs-4 footer-copy-grid1">
							<a href="single.html"><img src="images/1.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="col-xs-4 footer-copy-grid1">
							<a href="single.html"><img src="images/2.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="col-xs-4 footer-copy-grid1">
							<a href="single.html"><img src="images/3.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="footer-copy-grids">
						<div class="col-xs-4 footer-copy-grid1">
							<a href="single.html"><img src="images/4.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="col-xs-4 footer-copy-grid1">
							<a href="single.html"><img src="images/5.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="col-xs-4 footer-copy-grid1">
							<a href="single.html"><img src="images/2.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-3 footer-copy-grid">
					<h3>Navigation</h3>
					<ul>
					<?php
						foreach($navdata as $navbar)
						{
							echo '<li><a href='.$navbar->goto.'>'.$navbar->page.'</a></li>';	
						}
					?>	
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="footer animated wow bounce" data-wow-duration="1000ms" data-wow-delay="800ms">
		<div class="container">
			<p>© 2018 Bake Your Bread. All rights reserved | Design by <a href="http://saif53.info">Saif Creations</a></p>
		</div>
	</div>
<!-- //footer -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {		
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
</body>
</html>
