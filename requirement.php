<?php include('head.php');?>
<!--content Section Start Here -->
			<div id="content">

				<div id="slider" class="banner-container parallax">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h3>REQUIREMENTS</h3>
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
										requirements
									</li>
								</ul>
							</div>
						</div>

						<div class="col-xs-12">
							<div class="project-category-1 clearfix">
								<h3>Available vacancies <span>URGENT</span><i></i></h3>

								<div id="project-gallery">

									<div id="gallery-header" class="category-box-1 clearfix">
										<strong>DIRECT APPLY ONLINE &AMP; GET CALLBACK WITHIN 48 HOURS</strong>
										<div id="gallery-header-center">
											<div id="gallery-header-center-right">


											</div>
										</div>
									</div>

									<div id="gallery-content">
										<ul id="gallery-content-center" class="project-list-1 clearfix">
                      <?php
      								$res = $con->query("SELECT * FROM ads WHERE is_active=1 ORDER BY created_on ASC ");
      								while($row = $res->fetch_assoc() ){ ?>
											<li class="zoom all buildings">
												<figure class="fade-effect">
													<a href="projects-details.html"><img src="assets/img/project-img-4.jpg" alt="" /></a>
												</figure>
												<div class="detail animate-effect">
													<h4><a href="projects-details.html"><span><?=$row['heading']?></span></a>
														<i></i></h4>
													<p>
														<?=$row['small_desc']?>
                            <br><?=$row['facility']?>
        										<br>SALARY : <?=$row['salary']?> AED
													</p>
													<a href="apply.php?id=<?=$row['id']?>" class="view">APPLY NOW</a>
												</div>
											</li>
                      <?PHP } ?>


										</ul>
									</div>

								</div>



							</div>
						</div>

					</div>
				</div>

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
		<script type="text/javascript" src="assets/js/jquery-ui-1.10.4.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.isotope.min.js"></script>
		<!--<script type="text/javascript" src="assets/js/animated-masonry-gallery.js"></script>-->
		<script type="text/javascript"  >
			$(window).load(function() {

				var size = 1;
				var button = 1;
				var button_class = "gallery-header-center-right-links-current";
				var normal_size_class = "gallery-content-center-normal";
				var full_size_class = "gallery-content-center-full";
				var $container = $('#gallery-content-center');

				$container.isotope({
					itemSelector : '.project-list-1 li'
				});

				function check_button() {
					$('.gallery-header-center-right-links').removeClass(button_class);
					if (button == 1) {
						$("#filter-all").addClass(button_class);
						$("#gallery-header-center-left-title").html('All Galleries');
					}
					if (button == 2) {
						$("#filter-buildings").addClass(button_class);
						$("#gallery-header-center-left-title").html('buildings project-gallery');
					}
					if (button == 3) {
						$("#filter-design").addClass(button_class);
						$("#gallery-header-center-left-title").html('design project-gallery');
					}
					if (button == 4) {
						$("#filter-isolation").addClass(button_class);
						$("#gallery-header-center-left-title").html('isolation project-gallery');
					}
				}

				function check_size() {
					$("#gallery-content-center").removeClass(normal_size_class).removeClass(full_size_class);
					if (size == 0) {
						$("#gallery-content-center").addClass(normal_size_class);
						$("#gallery-header-center-left-icon").html('<span class="iconb" data-icon="&#xe23a;"></span>');
					}
					if (size == 1) {
						$("#gallery-content-center").addClass(full_size_class);
						$("#gallery-header-center-left-icon").html('<span class="iconb" data-icon="&#xe23b;"></span>');
					}
					$container.isotope({
						itemSelector : '.project-list-1 li'
					});
				}


				$("#filter-all").click(function() {
					$container.isotope({
						filter : '.all'
					});
					button = 1;
					check_button();
				});
				$("#filter-buildings").click(function() {
					$container.isotope({
						filter : '.buildings'
					});
					button = 2;
					check_button();
				});
				$("#filter-design").click(function() {
					$container.isotope({
						filter : '.design'
					});
					button = 3;
					check_button();
				});
				$("#filter-isolation").click(function() {
					$container.isotope({
						filter : '.isolation'
					});
					button = 4;
					check_button();
				});
				$("#gallery-header-center-left-icon").click(function() {
					if (size == 0) {
						size = 1;
					} else if (size == 1) {
						size = 0;
					}
					check_size();
				});

				check_button();
				check_size();
			});
		</script>

		<!-- revolution Js -->

		<!-- revolution Js -->

		<script src="assets/js/site.js"></script>
		<!-- Switcher Js -->
		<script src="assets/js/theme-option/style-switcher/assets/js/style.switcher.js"></script>
		<script src="assets/js/theme-option/style-switcher/assets/js/jquery.cookie.js"></script>
		<!-- Switcher Js -->
	</body>
</html>
