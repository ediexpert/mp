<?php
/* if(! isset($_REQUEST['id']) ) : ?>
  <script>
  window.location="contact.php";
  </script>
<?php endif;
*/
?>
<?php include('head.php'); ?>
<!--content Section Start Here -->
			<div id="content">

				<div id="slider" class="banner-container parallax">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h3>CONTACT US</h3>
							</div>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="breadcrumbs-box">
								<ul class="clearfix">
									<li>
										<a href="#">home</a>
									</li>
									<li>
										contact us
									</li>
								</ul>
							</div>
						</div>

						<div class="col-xs-12">
							<div class="our_contact clearfix">
								<div id="success">
									<div role="alert" class="alert alert-success">
										<strong>Thanks</strong> for using our template. Your message has been sent.
									</div>
								</div>
								<h3>GET IN TOUCH <i></i></h3>

								<div class="left-detail clearfix">
									<strong>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
									nibh euismod tincidunt ut laoreet dolore magna aliquam </strong>
									<form action="#">
										<fieldset>
											<input type="text" placeholder="NAME" id="name">

											<span class="coll-1">
												<input type="text" placeholder="EMAIL" id="email">
											</span>

											<span class="coll-1 last">
												<input type="text" placeholder="SUBJECT" id="sub">
											</span>

											<div class="box clearfix">
												<textarea placeholder="MESSAGE" id="message" > </textarea>
												<input type="button" value="POST MESSAGE" id="submit">
											</div>
										</fieldset>
									</form>

								</div>

								<div class="right-detail">
									<div class="social-icons">
										<a href="#" class="fa fa-facebook"></a>
										<a href="#" class="fa fa-twitter"></a>
										<a href="#" class="fa fa-google-plus"></a>
									</div>
									<address>
										<strong>LONDON OFFICE</strong>
										<ul>
											<li>
												<i class="location-svg"><img src="assets/svg/05.svg" alt="" class="svg"/></i>
												<span>227 Marion Street</span>
												<span>Columbia, SC 29201</span>
											</li>

											<li>
												<i class="fa fa-phone"></i>
												<span>1-888-123-4567</span>
											</li>

											<li>
												<i class="fa fa-print"></i>
												<span>1-888-123-4568</span>
											</li>

											<li>
												<i class="fa fa-envelope-o"></i>
												<span><a href="mailto:info@industrail.com">info@industrail.com</a></span>
											</li>
										</ul>
									</address>
								</div>

							</div>
						</div>

					</div>
				</div>

				<!-- <div class="map-box fade-effect map embed-responsive embed-responsive-16by9">
				<div id="map"></div> -->
				<!-- <img src="assets/img/map.jpg" alt="" /> -->
				<!-- </div> -->
				<article id="dvMap" class="map-wrapper map embed-responsive embed-responsive-16by9">
					&nbsp;
				</article>

			</div>
			<!--content Section End Here -->

<?php include('foot.php'); ?>

		</div>
		<!--Wrapper Section End Here -->

		<script src="assets/js/jquery-1.11.2.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/less.js"></script>
		<script src="assets/js/jquery.bxslider.js"></script>
		<script defer src="assets/js/jquery.flexslider.js"></script>
		<!-- Google Map -->
		<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<script type="text/javascript" src="assets/js/custom-mapscript-logistic.js"></script>
		<!-- Google Map -->
		<script src="assets/js/validation.js"></script>
		<script src="assets/js/site.js"></script>

	</body>
</html>
