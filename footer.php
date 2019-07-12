
	<!-- footer -->
	<footer>
		<section class="footer py-md-5">
			<div class="container py-4 mt-2">
				<div class="row footer_inner_info_w3ls_agileits">
					<div class="col-md-3 footer-left">
						<h2><a href="index-2.html"> Donkey Cargo</a></h2>
						<p class="mb-3 mt-3"></p>
						<ul class="social-nav footer-social social two">
							<li>
								<a href="#">
							<i class="fab fa-facebook-f" aria-hidden="true"></i>
						</a>
							</li>
							<li>
								<a href="#">
							<i class="fab fa-twitter" aria-hidden="true"></i>
						</a>
							</li>
							<li>
								<a href="#">
							<i class="fab fa-instagram" aria-hidden="true"></i>
						</a>
							</li>
							<li>
								<a href="#">
							<i class="fab fa-pinterest" aria-hidden="true"></i>
						</a>
							</li>
						</ul>
					</div>

					<div class="col-md-2 sign-gd">
						<h4>Useful Links</h4>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="about.php">About</a></li>
							<!-- <li><a href="services.html">Services</a></li>
							<li><a href="gallery.html">Gallery</a></li> -->
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
					<div class="col-md-4 sign-gd flickr-post">
						<h4>Instagram</span>
						</h4>
						<ul>
							<li><a href="#"><img src="images/g1.jpg" alt=" " class="img-fluid" /></a></li>
							<li><a href="#"><img src="images/g2.jpg" alt=" " class="img-fluid" /></a></li>
							<li><a href="#"><img src="images/g3.jpg" alt=" " class="img-fluid" /></a></li>
							<li><a href="#"><img src="images/g2.jpg" alt=" " class="img-fluid" /></a></li>
							<li><a href="#"><img src="images/g1.jpg" alt=" " class="img-fluid" /></a></li>
							<li><a href="#"><img src="images/g3.jpg" alt=" " class="img-fluid" /></a></li>
							<li><a href="#"><img src="images/g2.jpg" alt=" " class="img-fluid" /></a></li>
							<li><a href="#"><img src="images/g3.jpg" alt=" " class="img-fluid" /></a></li>
							<li><a href="#"><img src="images/g1.jpg" alt=" " class="img-fluid" /></a></li>
						</ul>
					</div>
					<div class="col-md-3 sign-gd-two">
						<h4>Contact Information</h4>
						<div class="address">
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Phone Number</h6>
									<p>+91-45-124 51962</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Email Address</h6>
<p><a href="mailto:support@donkeycargo.com">support@donkeycargo.com</a></p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-map-marker" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Location</h6>
									<p>No. 4 5/P26, Thendral street, Chinnalapatti, Dindigul – 624301</p>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<p class="copy-right py-3">&copy 2019 Donkeycargo. All rights reserved</a></p>
		<!-- | Design by <a href="http://Eswar.com/">Eswar -->
		<!-- //footer -->
	</footer>

	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //js-->
	<!--banner-slider-->
	<script src="js/JiSlider.js"></script>
	<script>
		$(window).load(function () {
			$('#JiSlider').JiSlider({
				color: '#fff',
				start: 1,
				reverse: false
			}).addClass('ff')
		})
	</script>
	<!-- //banner-slider -->
	<!-- flexSlider -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!-- //flexSlider -->

	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>

	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<script src="js/SmoothScroll.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZsnc36jrvx7sdu0iHfhAbtGGZXFOJ2nA&callback=initMap">
	</script>
	<script src='http://maps.googleapis.com/maps/api/js?v=3&sensor=false&amp;libraries=places&key=AIzaSyCZsnc36jrvx7sdu0iHfhAbtGGZXFOJ2nA'></script>

	<script src="js/map.js" type="text/javascript"></script>
	<script src="js/script.js" type="text/javascript"></script>
	<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/20625/jquery.geocomplete.min.js"></script>x

</body>


<!-- Mirrored from spyderinfotechcom.000webhostapp.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Jan 2019 02:19:17 GMT -->

</html>
