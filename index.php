<?php include('head.php'); ?>

			<!--slider Section Start Here -->
			<section id="slider">
				<div class="img-slider">
					<ul class="top-banner">
						<li><img src="assets/img/banner-img-1.jpg" alt="#" />
						</li>
						<li><img src="assets/img/banner-img-2.jpg" alt="#" />
						</li>
						<li><img src="assets/img/banner-img-3.jpg" alt="#" />
						</li>
					</ul>
				</div>
				<div class="detail-content">
					<div class="container">
						<div class="detail">
							<div class="top-row">
								<?php
								$res = $con->query("SELECT heading FROM ads WHERE is_active=1 ORDER BY created_on ASC LIMIT 1,3");
								while($row = $res->fetch_assoc() ){
									echo '<strong>'.$row['heading'].'</strong>';
								}
								?>


								<div class="direction-arrrow">
									<a href="javascript:;" class="prv"></a>
									<a href="javascript:;" class="next"></a>
								</div>

							</div>

							<ul class="bottom-sec" id="bottom-sec">
								<?php
								$res = $con->query("SELECT * FROM ads WHERE is_active=1 ORDER BY created_on ASC LIMIT 1,3");
								while($row = $res->fetch_assoc() ){ ?>
								<li class="inner-bottom-sec">
									<h2><?=$row['heading']?></h2>
									<p>
										<?=$row['small_desc']?>
										<br><?=$row['facility']?>
										<br>SALARY : <?=$row['salary']?> AED
									</p>
									<a href="">APPLY</a>
								</li>
								<?php
								}
								?>
							</ul>

						</div>
					</div>
				</div>
			</section>
			<!--slider Section End Here -->

			<!--content Section Start Here -->
			<div id="content">


				<!--Service Section Start Here -->
				<div class="service-container-2">
					<div class="container">
						<div class="row">

							<div class="left-detail animate-effect">
								<div id="slide-items" class="flexslider">
									<ul class="slides">
										<li>
											<h2>WHAT WE DO <i></i></h2>
											<strong>WE OFFER AN ALL ROUND CONDO REMODELLING SERVICES</strong>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec erat erat. Integer blandit, nulla quis fermentum hendrerit, nisi diam viverra metus, porta semper est ipsum et sapien. feugiat viverra diam.felis tortor, euismod ac tortor ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec erat erat. Integer blandit, nulla quis fermentum hendrerit, nisi diam viverra metus, porta semper est ipsum et sapien
											</p>
											<a href="#" class="quote">GET A QUOTE</a>
										</li>

										<li>
											<h2>WHAT WE DO 2 <i></i></h2>
											<strong>WE OFFER AN ALL ROUND CONDO REMODELLING SERVICES</strong>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec erat erat. Integer blandit, nulla quis fermentum hendrerit, nisi diam viverra metus, porta semper est ipsum et sapien. feugiat viverra diam.felis tortor, euismod ac tortor ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec erat erat. Integer blandit, nulla quis fermentum hendrerit, nisi diam viverra metus, porta semper est ipsum et sapien
											</p>
											<a href="#" class="quote">GET A QUOTE</a>
										</li>

										<li>
											<h2>WHAT WE DO 3 <i></i></h2>
											<strong>WE OFFER AN ALL ROUND CONDO REMODELLING SERVICES</strong>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec erat erat. Integer blandit, nulla quis fermentum hendrerit, nisi diam viverra metus, porta semper est ipsum et sapien. feugiat viverra diam.felis tortor, euismod ac tortor ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec erat erat. Integer blandit, nulla quis fermentum hendrerit, nisi diam viverra metus, porta semper est ipsum et sapien
											</p>
											<a href="#" class="quote">GET A QUOTE</a>
										</li>
										<li>
											<h2>WHAT WE DO 4 <i></i></h2>
											<strong>WE OFFER AN ALL ROUND CONDO REMODELLING SERVICES</strong>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec erat erat. Integer blandit, nulla quis fermentum hendrerit, nisi diam viverra metus, porta semper est ipsum et sapien. feugiat viverra diam.felis tortor, euismod ac tortor ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec erat erat. Integer blandit, nulla quis fermentum hendrerit, nisi diam viverra metus, porta semper est ipsum et sapien
											</p>
											<a href="#" class="quote">GET A QUOTE</a>
										</li>
										<li>
											<h2>WHAT WE DO 5 <i></i></h2>
											<strong>WE OFFER AN ALL ROUND CONDO REMODELLING SERVICES</strong>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec erat erat. Integer blandit, nulla quis fermentum hendrerit, nisi diam viverra metus, porta semper est ipsum et sapien. feugiat viverra diam.felis tortor, euismod ac tortor ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec erat erat. Integer blandit, nulla quis fermentum hendrerit, nisi diam viverra metus, porta semper est ipsum et sapien
											</p>
											<a href="#" class="quote">GET A QUOTE</a>
										</li>

									</ul>
								</div>
							</div>

							<div class="col-xs-12 animate-effect">
								<div id="carousel" class="flexslider">
									<ul class="our-service slides clearfix">
										<li class="zoom">
											<a href="#"> <em class="fa fa-caret-up"></em>
											<figure class="fade-effect">
												<img src="assets/img/image-1.jpg" alt="" />
											</figure> <strong> <i></i>design<span>and build</span> </strong> </a>
										</li>

										<li class="zoom">
											<a href="#"> <em class="fa fa-caret-up"></em>
											<figure class="fade-effect">
												<img src="assets/img/image-2.jpg" alt="" />
											</figure> <strong> <i></i>condo<span>remodeling</span> </strong> </a>

										</li>

										<li class="zoom">
											<a href="#"> <em class="fa fa-caret-up"></em>
											<figure class="fade-effect">
												<img src="assets/img/image-3.jpg" alt="" />
											</figure> <strong> <i></i>construction <span>management</span> </strong> </a>

										</li>

										<li class="zoom">
											<a href="#"> <em class="fa fa-caret-up"></em>
											<figure class="fade-effect">
												<img src="assets/img/image-4.jpg" alt="" />
											</figure> <strong> <i></i>tiling<span>and painting</span> </strong> </a>

										</li>

										<li class="zoom">
											<a href="#"> <em class="fa fa-caret-up"></em>
											<figure class="fade-effect">
												<img src="assets/img/image-5.jpg" alt="" />
											</figure> <strong> <i></i>kitchen <span>remodeling</span> </strong> </a>

										</li>
									</ul>
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="service-container-3">
					<div class="container">
						<div class="row">

							<div class="left-detail">

								<h2>WHAT WE HAVE DONE <i></i></h2>
								<strong>OUR EXPERTS DELIVER INNOVATIVE, EFFICIENT &amp; VALUE-DRIVEN SOLUTIONS FOR CUSTOMERS IN ENERGY.</strong>

								<a href="#" class="quote animate-effect">GET A QUOTE</a>

								<ul class="office-list clearfix">
									<li class="zoom">
										<figure class="fade-effect">
											<a href="projects-details.html"><img src="assets/img/image-25.jpg" alt="" /></a>
										</figure>
										<div class="detail animate-effect">
											<h4><a href="projects-details.html">manchester central delivery office</a></h4>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipiscing nulla quis fermentum hendrerit, nisi diam viverra feugiat viverra diam.felis tortor
											</p>
										</div>
									</li>
									<li class="zoom">
										<figure class="fade-effect">
											<a href="projects-details.html"><img src="assets/img/image-26.jpg" alt="" /></a>
										</figure>
										<div class="detail animate-effect">
											<h4><a href="projects-details.html">manchester central delivery office</a></h4>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipiscing nulla quis fermentum hendrerit, nisi diam viverra feugiat viverra diam.felis tortor
											</p>
										</div>
									</li>
									<li class="zoom">
										<figure class="fade-effect">
											<a href="projects-details.html"><img src="assets/img/image-27.jpg" alt="" /></a>
										</figure>
										<div class="detail animate-effect">
											<h4><a href="projects-details.html">manchester central delivery office</a></h4>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipiscing nulla quis fermentum hendrerit, nisi diam viverra feugiat viverra diam.felis tortor
											</p>
										</div>
									</li>
								</ul>

							</div>

						</div>
					</div>
				</div>

				<!--Service Section End Here -->




				<!--partner-container Start Here -->
				<div class="our-partners">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 animate-effect">
								<h2><span>BEST <i></i></span> CONSTRUCTION COMPANIES</h2>
								<ul class="clearfix">
									<li class="zoom">
										<a href="#"><img src="assets/img/partner-1.png" alt="" /></a>
									</li>
									<li class="zoom">
										<a href="#"><img src="assets/img/partner-2.png" alt="" /></a>
									</li>
									<li class="zoom">
										<a href="#"><img src="assets/img/partner-3.png" alt="" /></a>
									</li>
									<li class="zoom">
										<a href="#"><img src="assets/img/partner-4.png" alt="" /></a>
									</li>
									<li class="zoom">
										<a href="#"><img src="assets/img/partner-5.png" alt="" /></a>
									</li>
									<li class="zoom">
										<a href="#"><img src="assets/img/partner-6.png" alt="" /></a>
									</li>
									<li class="zoom">
										<a href="#"><img src="assets/img/partner-7.png" alt="" /></a>
									</li>
									<li class="zoom">
										<a href="#"><img src="assets/img/partner-8.png" alt="" /></a>
									</li>
									<li class="zoom">
										<a href="#"><img src="assets/img/partner-9.png" alt="" /></a>
									</li>
									<li class="zoom">
										<a href="#"><img src="assets/img/partner-10.png" alt="" /></a>
									</li>
									<li class="zoom">
										<a href="#"><img src="assets/img/partner-11.png" alt="" /></a>
									</li>
									<li class="zoom">
										<a href="#"><img src="assets/img/partner-12.png" alt="" /></a>
									</li>
								</ul>

							</div>
						</div>
					</div>
				</div>
				<!--partner-container End Here -->



			</div>
			<!--content Section End Here -->

		<?php include('foot.php');?>

		</div>
		<!--Wrapper Section End Here -->

		<script src="assets/js/jquery-1.11.2.min.js"></script>
		<script src="assets/js/jquery.easing.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/less.js"></script>
		<script src="assets/js/jquery.bxslider.js"></script>
		<script defer src="assets/js/jquery.flexslider.js"></script>
		<script src="assets/js/site.js"></script>
		<script>
		$(function() {
		     var pgurl = window.location.href.substr(window.location.href
		.lastIndexOf("/")+1);
		     $(".menu ul li a").each(function(){
		          if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
		          $(this).addClass("active");
		     })
		});
		</script>

	</body>
</html>
