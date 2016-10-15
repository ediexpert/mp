<?php include('head.php'); ?>
<link href="uploader/css/jquery.filer.css" rel="stylesheet">
<link href="uploader/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet">

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
								<h3>SUBMIT <i></i></h3>

								<div class="left-detail clearfix">
									<strong>Send us your query with <text class="text-danger">contact, passport first,second and last page scan copy and photo</text>,
                  We will contact you within 24-48 hours on given mobile number </strong>
									<form action="submit.php" enctype="multipart/form-data" method="post" >
										<fieldset>
											<input type="text" placeholder="NAME" id="name" required="required">
                      <div class="form-group">
                        <p class="text-danger">
                          Attach Following documents
                          <li>Passport 1st page</li>
                          <li>Passport 2st page</li>
                          <li>Passport Last page</li>
                          <li>Photo (Passport size)</li>
                        </p>
                        <div id="content">


                      		<!-- Example 2 -->
                      	    <input type="file" name="files[]" id="filer_input2" multiple="multiple">
                      		<!-- end of Example 2 -->

                          </div>
                        <label for="file">Passport 1<sup>st</sup> page</label>
                        <input id="pas1" type="file" name="file" value="" required="required">
                      </div>

                      <div class="form-group">
                        <label for="file">Passport 2<sup>nd</sup> page</label>
                        <input type="file" name="file" value=""  >
                      </div>
                      <div class="form-group">
                        <label for="file">Passport last page</label>
                        <input type="file" name="file" value="">
                      </div>
                      <div class="form-group">
                        <label for="file">Photo(passport size)</label>
                        <input type="file" name="file" value="" required="required">
                      </div>

											<span class="coll-1">
												<input type="text" placeholder="EMAIL" id="email">
											</span>

											<span class="coll-1 last">
												<input type="text" placeholder="PHONE" id="sub" required="required">
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
										<strong>DUBAI OFFICE</strong>
										<ul>
											<li>
												<i class="location-svg"><img src="assets/svg/05.svg" alt="" class="svg"/></i>
												<span>115 AL Braha</span>
												<span>Deira, Dubai - UAE</span>
											</li>

											<li>
												<i class="fa fa-phone"></i>
												<span><?=$phone?></span>
											</li>

											<li>
												<i class="fa fa-print"></i>
												<span>1-888-123-4568</span>
											</li>

											<li>
												<i class="fa fa-envelope-o"></i>
												<span><a href="mailto:<?=$info_email?>"><?=$info_email?></a></span>
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
    <script src="uploader/js/jquery.filer.min.js" type="text/javascript"></script>
    <script src="uploader/js/custom.js" type="text/javascript"></script>
    <script type="text/javascript">
      function upload(){

      }
    </script>

	</body>
</html>
