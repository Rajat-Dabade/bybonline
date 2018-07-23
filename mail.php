<?php
	include("includes/header.php")
?>
<!-- mail -->
	<div class="mail">
		<div class="container">
		<h2 class="animated wow flipInX" data-wow-duration="1200ms" data-wow-delay="500ms"><span>Get In Touch</span> With US</h2>
		<div class="mail-grids">
			<div class="col-md-4 mail-grid animated wow fadeInLeftBig" data-wow-duration="1200ms" data-wow-delay="800ms">
				<div class="mail-grid1">
					<div class="col-xs-3 mail-grid-left">
						<div class="mail-grid-left-pos">
							<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
						</div>
					</div>
					<div class="col-xs-9 mail-grid-right">
						<div class="mail-grid-right1">
							<h3>Children's School 23k Avenue <i>USA</i></h3>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4 mail-grid animated wow fadeInLeftBig" data-wow-duration="1200ms" data-wow-delay="900ms">
				<div class="mail-grid1">
					<div class="col-xs-3 mail-grid-left">
						<div class="mail-grid-left-pos">
							<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
						</div>
					</div>
					<div class="col-xs-9 mail-grid-right">
						<div class="mail-grid-right1">
							<p><a href="mailto:info@example.com">@example1.com</a>
								<span><a href="mailto:info@example.com">@example2.com</a></span></p>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4 mail-grid animated wow fadeInLeftBig" data-wow-duration="1200ms" data-wow-delay="1000ms">
				<div class="mail-grid1">
					<div class="col-xs-3 mail-grid-left">
						<div class="mail-grid-left-pos">
							<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
						</div>
					</div>
					<div class="col-xs-9 mail-grid-right">
						<div class="mail-grid-right1">
							<p>+8 2738 929 929<span>+7 8039 839 028</span></p>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="map-grids">
			<div class="col-md-6 map-grid">
				<h3 class="animated wow flipInX" data-wow-duration="1200ms" data-wow-delay="500ms">Our Location On <span>Map</span></h3>
				<iframe class="animated wow fadeInLeft" data-wow-duration="1200ms" data-wow-delay="500ms" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2788.493767672681!2d-111.03253628461667!3d45.660987028312086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x534544e474e6bfd9%3A0xe93756749fe17d2e!2sChildrens+School!5e0!3m2!1sen!2sin!4v1454664428808" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="col-md-6 map-grid">
				<h3 class="animated wow flipInX" data-wow-duration="1200ms" data-wow-delay="500ms">Send <span>Message</span></h3>
				<form class="animated wow fadeInRight" data-wow-duration="1200ms" data-wow-delay="500ms">
					<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
					<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}" required="">
					<textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required>Message...</textarea>
					<input type="submit" value="Submit Now" >
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
		</div>
	</div>
<!-- //mail -->
<?php
	include("includes/footer.php")
?>
</body>
</html>