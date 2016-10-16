<?php include('head.php'); ?>
<link href="uploader/css/jquery.filer.css" rel="stylesheet">
<link href="uploader/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet">

<!--content Section Start Here -->
			<div id="content">

				<div id="slider" class="banner-container parallax">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h3>APPLY</h3>
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
										apply
									</li>
								</ul>
							</div>
						</div>

						<div class="col-xs-12">
							<div class="our_contact clearfix">


								<div class="left-detail clearfix">
									<strong>Send us your query with <text class="text-danger">contact, passport first,second and last page scan copy and photo</text>,
                  We will contact you within 24-48 hours on given mobile number </strong>
									<form  id="contact_form" <?php /*action="submit.php" enctype="multipart/form-data" method="post" */ ?>>
										<fieldset>
											<div class="form-group">

												<select id="ad" class="form-control text-uppercase" name="">

														<?php if($q=$con->query("select id,heading from ads where is_active = 1") ){
															while($row = $q->fetch_assoc()){
																if($_REQUEST['id'] == $row['id'] ){
																	echo '<option class="text-uppercase" value="'.$row['id'].'" selected>'.$row['heading'].'</option>';
																}else{
																	echo '<option class="text-uppercase" value='.$row['id'].'>'.$row['heading'].'</option>';
																}

															}
														}
														?>
												</select>
											</div>
											<input type="text" placeholder="NAME" id="name" required="required">

											<?php /*
                      <div class="form-group">
											<label for="file">Passport 1<sup>st</sup> page</label>
											<input id="pas1" type="file" name="file" value="" required="required">
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
											*/
											?>
											<span class="coll-1">
												<input type="text" placeholder="EMAIL" id="email">
											</span>

											<span class="coll-1 last">
												<input type="text" placeholder="PHONE" id="phone" required="required">
											</span>



											<div class="form-group">
                        <p class="text-grey">
													<stron>
	                          <i>Please attach following</i>
														<br><label for="">Passport 1<sup>st</sup> page, 2<sup>nd</sup> page &amp; last page<span class="text-danger">*</span></label>
														<br><label for="">Photo (Passport size)<span class="text-danger">*</span></label>
														<br><label for="">Experience Letter (if any)</label>
													</stron>
                        </p>
                        <div id="content">


                      		<!-- Example 2 -->
                      	    <input type="file" name="files[]" id="filer_input2" multiple="multiple">
                      		<!-- end of Example 2 -->

                          </div>

                      </div>
											<div class="form-group">
												<textarea class="form-control" style="background:#f4f4f4" id="message" placeholder="MESSAGE" name="name" rows="8" cols="40"></textarea>
											</div>
											<input id="imgs" type="hidden" name="" value="">
											<div class="form-group text-center">
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
			$(document).ready(function(){
				$('#submit').click(function(){
					var name = $('#name').val();
					var email = $('#email').val();
					var phone = $('#phone').val();
					var ad = $('#ad').val();
					var img = $('#imgs').val();
					var msg = $('#message').val();
					img = img.substr(1);
					var postData = {
						'name' : name,
						'email' : email,
						'phone' : phone,
						'ad' : ad,
						'files' :img,
						'msg' : msg
					};

					console.log(postData);
					$.ajax({
						type : "POST",
						url : "submit.php",
						data : postData,
						success : function(res){
							console.log(res);
							$('#contact_form').html('<h5 class="text-success">Thank you. Your application has been submitted and we will get back to you within 48 hours.</h5>');
						}
					})
				})
			})
		</script>
<script type="text/javascript">

</script>
	</body>
</html>
