			<section class="call-to-action call-to-action-strong-grey content-align-center call-to-action-in-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-9 col-lg-9">
							<div class="call-to-action-content">
								<h2 class="font-weight-normal text-6 mb-0">DevTradingCo is <strong>everything</strong> you need for  <strong>Industry</strong> </h2>
								<p class="mb-0">With Best Quality.</p>
							</div>
						</div>
						<div class="col-md-3 col-lg-3">
							<div class="call-to-action-btn">
								<a href="contact-us.php" target="_blank" class="btn btn-modern btn-primary">Contact Us!</a>
							</div>
						</div>
					</div>
				</div>
			</section>


			<footer id="footer" class="border-0" style="background-color:#e55d3b; color:white">
				<div class="container py-4">
					<div class="row justify-content-md-center py-5 mt-3">
						<div class="col-md-12 col-lg-3 d-flex align-items-center justify-content-center justify-content-lg-start mb-5 mb-lg-0">
							<a href="index.html"><img src="<?php echo $logo;?>" alt="Logo" class="img-fluid" style="max-width: 110px;"></a>
						</div>
						<div class="col-md-6 col-lg-2 text-center text-lg-left mb-5 mb-lg-0">
							<h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Pages</h5>
							<ul class="list list-unstyled" >
								<li class="mb-1"><a href="about-us.php" class="link-hover-style-1" style="color:white"> About Us</a></li>
								<li class="mb-1"><a href="contact-us.php" class="link-hover-style-1" style="color:white"> Contact Us</a></li>
							</ul>
						</div>
						<!--
						<div class="col-md-6 col-lg-2 text-center text-lg-left mb-5 mb-lg-0">
							<h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Links</h5>
							<ul class="list list-unstyled">
								<li class="mb-1"><a href="page-faq.html" class="link-hover-style-1"> FAQ's</a></li>
								<li class="mb-1"><a href="sitemap.html" class="link-hover-style-1"> Sitemap</a></li>
							</ul>
						</div>-->
						<div class="col-md-6 col-lg-5 text-center text-lg-left" style="color:white; font-size:20px;">
							<p class="mt-3 mb-0 text-center text-lg-left">
                                <i class="fab fa-whatsapp text-color-primary"></i><span class="text-color-light opacity-9 pl-2">9711182935,8010482935</span> <br>
                                <i class="far fa-envelope text-color-primary ml-4"></i><a href="mailto:sales@devtradingco.in" class="opacity-9 pl-2 text-color-light">sales@devtradingco.in</a>
                            </p>
						</div>
					</div>
				</div>
				<div class="footer-copyright footer-copyright-style-2 bg-transparent footer-top-light-border" >
					<div class="container py-2">
						<div class="row py-4">
							<div class="col d-flex align-items-center justify-content-center mb-4 mb-lg-0">
								<p>© Copyright <?php echo date('D');?>. All Rights Reserved. @ <a target='_blank' href="https://keepcoding.in/">keepcoding.in</a></p>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Vendor -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="vendor/jquery.cookie/jquery.cookie.min.js"></script>
		<script src="vendor/popper/umd/popper.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/common/common.min.js"></script>
		<script src="vendor/jquery.validation/jquery.validate.min.js"></script>
		<script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
		<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="vendor/isotope/jquery.isotope.min.js"></script>
		<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="vendor/vide/jquery.vide.min.js"></script>
		<script src="vendor/vivus/vivus.min.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>
		
		<!-- Current Page Vendor and Views -->
		<script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

		<!-- Theme Custom -->
		<script src="js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->


		 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPYdbiZU1WHYYaI24uee7yvo4qoUDklAA"></script>
		<script>

			/*
			Map Settings

				Find the Latitude and Longitude of your address:
					- https://www.latlong.net/
					- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

			*/

			// Map Markers
			var mapMarkers = [{
				address: "Dev Trading Co,Gurgaon, India",
				html: "<strong>Dev Trading Co</strong><br>Dev Trading Co",
				icon: {
					image: "img/pin.png",
					iconsize: [26, 46],
					iconanchor: [12, 46]
				},
				popup: true
			}];

			// Map Initial Location
			var initLatitude = 28.359265103013087;
			var initLongitude = 76.94026555154272;

			// Map Extended Settings
			var mapSettings = {
				controls: {
					draggable: (($.browser.mobile) ? false : true),
					panControl: true,
					zoomControl: true,
					mapTypeControl: true,
					scaleControl: true,
					streetViewControl: true,
					overviewMapControl: true
				},
				scrollwheel: false,
				markers: mapMarkers,
				latitude: initLatitude,
				longitude: initLongitude,
				zoom: 18
			};

			var map = $('#googlemaps').gMap(mapSettings);

			// Map text-center At
			var mapCenterAt = function(options, e) {
				e.preventDefault();
				$('#googlemaps').gMap("centerAt", options);
			}

		</script>

	</body>
</html>



		
