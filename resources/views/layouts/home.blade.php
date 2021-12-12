<!doctype html>
<html lang="en">
	<head>

		<!-- Basic Page Needs
		================================================== -->
		<title>OnyxsLogistics</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="shortcut icon" href="/logo.jpeg" type="image/x-icon">
		<!-- CSS
		================================================== -->
		<link rel="stylesheet" href="/css/style.css">
		<link rel="stylesheet" href="/css/colors/blue.css">

	</head>
	<body>

		<!-- Wrapper -->
		<div id="wrapper">

		<!-- Header Container
		================================================== -->
		<x-nav />
		<div class="clearfix"></div>
		<!-- Header Container / End -->

		@yield('content')

		<!-- Footer
		================================================== -->
		<div id="footer" style="background-color: #113E3D;">

			<!-- Footer Top Section -->
			<div class="footer-top-section">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">

							<!-- Footer Rows Container -->
							<div class="footer-rows-container">

								<!-- Left Side -->
								<div class="footer-rows-left">
									<div class="footer-row">
										<div class="footer-row-inner ">
											<img style="width: 120px; position: static; transform: translateY(50px); object-fit: contain;" src="/onyx/logo-main.png" alt="">
										</div>
									</div>
								</div>

								<!-- Right Side -->
								<div class="footer-rows-right">

									<!-- Social Icons -->
									<div class="footer-row">
										<div class="footer-row-inner">
											<ul class="footer-social-links">
												<li>
													<a href="#" title="Facebook" data-tippy-placement="bottom" data-tippy-theme="light">
														<i class="icon-brand-facebook-f"></i>
													</a>
												</li>
												<li>
													<a href="#" title="Twitter" data-tippy-placement="bottom" data-tippy-theme="light">
														<i class="icon-brand-twitter"></i>
													</a>
												</li>
												<li>
													<a href="#" title="Google Plus" data-tippy-placement="bottom" data-tippy-theme="light">
														<i class="icon-brand-google-plus-g"></i>
													</a>
												</li>
												<li>
													<a href="#" title="LinkedIn" data-tippy-placement="bottom" data-tippy-theme="light">
														<i class="icon-brand-linkedin-in"></i>
													</a>
												</li>
											</ul>
											<div class="clearfix"></div>
										</div>
									</div>

									<!-- Language Switcher -->
									<div class="footer-row">
										<div class="footer-row-inner">
											<select class="selectpicker language-switcher" data-selected-text-format="count" data-size="5">
												<option selected>English</option>
												<!-- <option>Français</option>
												<option>Español</option>
												<option>Deutsch</option> -->
											</select>
										</div>
									</div>
								</div>

							</div>
							<!-- Footer Rows Container / End -->
						</div>
					</div>
				</div>
			</div>
			<!-- Footer Top Section / End -->

			<!-- Footer Middle Section -->
			<div class="footer-middle-section">
				<div class="container">
					<div class="row">

						<!-- Links -->
						<div class="col-xl-2 col-lg-2 col-md-3">
							<div class="footer-links">
								<h3>For Applicant</h3>
								<ul>
									<li><a href="#"><span>Browse Jobs</span></a></li>
									<li><a href="{{ route('profile') }}"><span>Add Resume</span></a></li>
									<!-- <li><a href="#"><span>Job Alerts</span></a></li> -->
									<!-- <li><a href="#"><span>My Bookmarks</span></a></li> -->
								</ul>
							</div>
						</div>

						<!-- Links -->
						<div class="col-xl-2 col-lg-2 col-md-3">
							<div class="footer-links">
								<h3>For Company</h3>
								<ul>
									<li><a href="#"><span>Browse Candidates</span></a></li>
									<li><a href="#"><span>Post a Job</span></a></li>
								</ul>
							</div>
						</div>

						<!-- Links -->
						<div class="col-xl-2 col-lg-2 col-md-3">
							<div class="footer-links">
								<h3>Helpful Links</h3>
								<ul>
									<li><a href="#"><span>Contact</span></a></li>
									<li><a href="#"><span>Privacy Policy</span></a></li>
									<li><a href="#"><span>Terms of Use</span></a></li>
								</ul>
							</div>
						</div>

						<!-- Links -->
						<div class="col-xl-2 col-lg-2 col-md-3">
							<div class="footer-links">
								<h3>Account</h3>
								<ul>
									<li><a href="{{ route('login') }}"><span>Log In</span></a></li>
									<li><a href="{{ route('dashboard') }}"><span>My Account</span></a></li>
								</ul>
							</div>
						</div>

						<!-- Newsletter -->
						<div class="col-xl-4 col-lg-4 col-md-12">
							<h3><i class="icon-feather-mail"></i> Sign Up For a Newsletter</h3>
							<p>Weekly breaking news, analysis and cutting edge advices on job searching.</p>
							<form action="#" method="get" class="newsletter">
								<input type="text" name="fname" placeholder="Enter your email address">
								<button type="submit"><i class="icon-feather-arrow-right"></i></button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- Footer Middle Section / End -->

			<!-- Footer Copyrights -->
			<div class="footer-bottom-section">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							© @php echo date("Y");  @endphp <strong>OnyxsLogistics</strong>. All Rights Reserved.
						</div>
					</div>
				</div>
			</div>
			<!-- Footer Copyrights / End -->

		</div>
		<!-- Footer / End -->

		</div>
		<!-- Wrapper / End -->


		<!-- Scripts
		================================================== -->
		<script src="/js/jquery-3.3.1.min.js"></script>
		<script src="/js/jquery-migrate-3.0.0.min.js"></script>
		<script src="/js/mmenu.min.js"></script>
		<script src="/js/tippy.all.min.js"></script>
		<script src="/js/simplebar.min.js"></script>
		<script src="/js/bootstrap-slider.min.js"></script>
		<script src="/js/bootstrap-select.min.js"></script>
		<script src="/js/snackbar.js"></script>
		<script src="/js/clipboard.min.js"></script>
		<script src="/js/counterup.min.js"></script>
		<script src="/js/magnific-popup.min.js"></script>
		<script src="/js/slick.min.js"></script>
		<script src="/js/custom.js"></script>

		<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
		<script>
		// Snackbar for user status switcher
		$('#snackbar-user-status label').click(function() {
			Snackbar.show({
				text: 'Your status has been changed!',
				pos: 'bottom-center',
				showAction: false,
				actionText: "Dismiss",
				duration: 3000,
				textColor: '#fff',
				backgroundColor: '#383838'
			});
		});
		</script>


		<!-- Google Autocomplete -->
		<script>
			function initAutocomplete() {
				var options = {
				types: ['(cities)'],
				// componentRestrictions: {country: "us"}
				};

				var input = document.getElementById('autocomplete-input');
				var autocomplete = new google.maps.places.Autocomplete(input, options);
			}

			// Autocomplete adjustment for homepage
			if ($('.intro-banner-search-form')[0]) {
				setTimeout(function(){
					$(".pac-container").prependTo(".intro-search-field.with-autocomplete");
				}, 300);
			}

		</script>

		<!-- Google API -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g&libraries=places&callback=initAutocomplete"></script>

	</body>
</html>
