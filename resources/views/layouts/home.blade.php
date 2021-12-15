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

		<x-footer />

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
