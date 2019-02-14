<!DOCTYPE html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Adiska & Bimo Wedding</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Eyoore Wedding Website" />
	<meta name="keywords" content="adiska,nico,jakarta,marry,bussiness,menikah,friends,marriedwedding,website,eyoore" />
	<meta name="author" content="eyoore" />

	<link rel="shortcut icon" type="image/png" href="{{ asset('wedding-8/images/favicon.ico') }}"/>
  	
  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('wedding-8/css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('wedding-8/css/icomoon.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('wedding-8/css/bootstrap.css') }}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('wedding-8/css/magnific-popup.css') }}">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{ asset('wedding-8/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('wedding-8/css/owl.theme.default.min.css') }}">

	<!--Menu Morphint -->
	<link rel="stylesheet" href="{{ asset('wedding-8/css/menu-morphing.css') }}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('wedding-8/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('wedding-8/css/style-map.css') }}">
	
	<!-- datepicker -->
    <link rel="stylesheet" href="{{ asset('wedding-8/css/bootstrap-datepicker.css') }}">
    
    <!-- My CSS -->
    
    <link rel="stylesheet" href="{{ asset('wedding-8/css/custom.css') }}">

	<!-- Modernizr JS -->
	<script src="{{ asset('wedding-8/js/modernizr-2.6.2.min.js') }}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div class="fh5co-loader"></div>

		<div id="page">


			<!--Navigation-->
			<nav class="fh5co-nav" role="navigation">
				<div class="container">

					<div class="row">
						<div class="col-xs-5 col-sm-4 col-md-3">
							<div id="fh5co-logo">
								<a href="#fh5co-header">Adiska & Bimo</a>
							</div>
						</div>
						<div class="col-xs-12 col-md-12 menu">
							<ul>
								<li><a href="#fh5co-header">Home</a></li>
								<li><a href="#fh5co-couple">The Couple</a></li>
								<li><a href="#fh5co-couple-story">Our Story</a></li>
								<li class="menu-title">
									<a href="#fh5co-header">Adiska & Bimo</a>
								</li>
								<li><a href="#fh5co-gallery">Gallery</a></li>
								<li><a href="#fh5co-testimonial">Wishes</a></li>
								<li><a href="#fh5co-event">When & Where</a></li>
							</ul>
						</div>
					</div>

				</div>
			</nav>
			<header id="fh5co-header" class="fh5co-cover" role="banner"
					data-stellar-background-ratio="0.5"
					data-image-background-count="5"
					data-image-background="{{ asset('wedding-8/images/galleries/gallery1.jpg')}},{{ asset('wedding-8/images/galleries/gallery2.jpg')}},{{ asset('wedding-8/images/galleries/gallery3.jpg')}},{{ asset('wedding-8/images/galleries/gallery4.jpg')}},{{ asset('wedding-8/images/galleries/gallery1.jpg')}}">
		
				<div class="overlay"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center">
							<div class="display-t">
								<div class="display-tc animate-box" data-animate-effect="fadeIn">
									<h2 class="header-title">We're Getting Married</h2>
									<div class="simply-countdown simply-countdown-one"></div>
									
									<a href="#fh5co-started" class="btn btn-primary btn-event-rsvp anchor-style">RSVP</a>

								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			@include('wedding-8.couple')
			@include('wedding-8.gallery')
            @include('wedding-8.says')
            @include('wedding-8.event')


			<div id="fh5co-started" class="fh5co-bg">
				<div class="overlay"></div>
				<div class="container">
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
							<h2 class="rsvp-title">Are You Attending?</h2>
							<p class="rsvp-please">Please Fill-up the form to notify you that you're attending. Thanks.</p>
						</div>
					</div>
					<div class="row animate-box rsvp-form">
						<div class="col-md-10 col-md-offset-1">
							<form action="" method="POST" class="form-inline" id="form-rsvp">
								<div class="col-md-4 col-sm-4">
									<div class="form-group">
										<label for="name" class="sr-only">Name</label>
										<input type="name" name="name" class="form-control" id="rsvp-name" placeholder="Name" required>
										<input type="hidden" name="ww_id" id="ww_id" value="3"/>
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="form-group">
										<label for="email"  class="sr-only">Email</label>
										<input type="email" name="email" class="form-control" id="rsvp-email" placeholder="Email" required>
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="form-group">
										<!-- <label for="arrived_date"  class="sr-only">Arrived Date</label>
										<input type="text" name="arrived_date" class="form-control datepicker" id="rsvp-arrived_date" placeholder="Arrived Date"> -->
										<label for="number_of_guest"  class="sr-only">Number of guests attending</label>
										<select name="number_of_guest" class="form-control" id="rsvp-number_of_guest" required oninvalid="this.setCustomValidity('Please select an item from the list.')" oninput="setCustomValidity('')">
											<option value=""  style="color: gray;">
												Number of guests attending
											</option>
											<option value="1" style="color: gray;font-weight: bold">
												1
											</option>
											<option value="2"  style="color: gray;font-weight: bold">
												2
											</option>

										</select>
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
								</div>
								<div class="col-md-4 col-sm-4">
									<button type="submit" class="btn btn-default btn-block btn-attending anchor-style">I am Attending</button>
								</div>
								<div class="col-md-4 col-sm-4">
								</div>
							</form>
							
						</div>
					</div>
					<div class="rsvp-desc animate-box" >
						<p class="rsvp-desc-thanks">
							Thank you <b class="rsvp-name">asdf</b>, your RSVP has been submitted to us.
						</p>
						<p class="rsvp-desc-helphashtag">
							Help us to share the moments on Instagram with #hashtag
							<br/>
							<a href="https://www.instagram.com/explore/tags/DISBIforever/" target="_blank">#DISBIforever</a>
						</p>
					</div>
				</div>
			</div>

			<footer id="fh5co-footer" role="contentinfo">
				<div class="container">

					<div class="row copyright">
						<div class="col-md-12 text-center">
							<p>
								<small class="block">Made with <img src="{{ asset('wedding-8/images/favicon.ico')}}"/> by <a href="http://instagram.com/e.yoore" target="_blank">e.yoore</a><br> © 2018 All Rights Reserved.</small>
							</p>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<div class="gototop js-top">
            <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
        </div>
	
		<!-- jQuery -->
		<script src="{{ asset('wedding-8/js/jquery.min.js') }}"></script>
		<!-- jQuery Easing -->
		<script src="{{ asset('wedding-8/js/jquery.easing.1.3.js') }}"></script>
		<!-- Bootstrap -->
		<script src="{{ asset('wedding-8/js/bootstrap.min.js') }}"></script>
		<!-- Waypoints -->
		<script src="{{ asset('wedding-8/js/jquery.waypoints.min.js') }}"></script>
		<!-- Carousel -->
		<script src="{{ asset('wedding-8/js/owl.carousel.min.js') }}"></script>
		<!-- countTo -->
		<script src="{{ asset('wedding-8/js/jquery.countTo.js') }}"></script>

		<!-- Stellar -->
		<script src="{{ asset('wedding-8/js/jquery.stellar.min.js') }}"></script>
		<!-- Magnific Popup -->
		<script src="{{ asset('wedding-8/js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('wedding-8/js/magnific-popup-options.js') }}"></script>
		
		<!-- Datepicker  -->
		<script src="{{ asset('wedding-8/js/bootstrap-datepicker.js') }}"></script>

		<!--Menu Morphint -->
		<script src="{{ asset('wedding-8/js/menu-morphing.js') }}"></script>

		<!-- Google Map -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBz3gSnxDJxkR3dQ0TFK6CrfAJu0gUHiIM&sensor=false"></script>
		<script src="{{ asset('wedding-8/js/google_map.js') }}"></script>

		<!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
		<script src="{{ asset('wedding-8/js/simplyCountdown.js') }}"></script>
		<!-- Main -->
		<script src="{{ asset('wedding-8/js/app.js') }}"></script>

		<script>
		var d = new Date(new Date("30-06-2018"));
		var d = new Date(1530385200000);
		
		// default example
		simplyCountdown('.simply-countdown-one', {
			year: d.getFullYear(),
			month: d.getMonth() + 1,
			day: d.getDate()
		});

		//jQuery example
		$('#simply-countdown-losange').simplyCountdown({
			year: d.getFullYear(),
			month: d.getMonth() + 1,
			day: d.getDate(),
			enableUtc: false
		});
	</script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113158758-2"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-113158758-2');
	</script>
	
	<audio id="backsound" loop="loop" style="display: none" autoplay>
	    <source src="https://instaud.io/_/29zu.mp3" type="audio/mpeg" />
	</audio>    
	</body>
</html>

