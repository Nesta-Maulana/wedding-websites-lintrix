<!DOCTYPE html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Nico & Dyla Wedding</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Eyoore Wedding Website" />
	<meta name="keywords" content="dyla,nico,lampung,marry,bussiness,menikah,friends,marriedwedding,website,eyoore" />
	<meta name="author" content="eyoore" />

	<link rel="shortcut icon" type="image/png" href="{{ asset('wedding-9/images/favicon.ico')}}"/>
  	
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
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('wedding-9/css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('wedding-9/css/icomoon.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('wedding-9/css/bootstrap.css')}}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('wedding-9/css/magnific-popup.css')}}">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{ asset('wedding-9/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{ asset('wedding-9/css/owl.theme.default.min.css')}}">

	<!--Menu Morphint -->
	<link rel="stylesheet" href="{{ asset('wedding-9/css/menu-morphing.css')}}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('wedding-9/css/style.css')}}">
	<link rel="stylesheet" href="{{ asset('wedding-9/css/style-map.css')}}">

    <!-- My CSS -->

    <link rel="stylesheet" href="{{ asset('wedding-9/css/custom.css')}}">

	<!-- Modernizr JS -->
	<script src="{{ asset('wedding-9/js/modernizr-2.6.2.min.js')}}"></script>
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
							<div id="fh5co-logo"><a href="#fh5co-header"><strong>Nico <span class="icon fh5co-logo-love"><i class="icon-heart2"></i></span> Dyla</strong></a></div>
						</div>
						<div class="col-xs-7 col-md-9 text-right menu-1">

							<ul>
								<li><a href="#fh5co-couple">The Couple</a></li>
								<li><a href="#fh5co-couple-story">Story</a></li>
								<li><a href="#fh5co-gallery">Gallery</a></li>
								<li><a href="#fh5co-testimonial">Our Friend Wishes</a></li>
								<li><a href="#fh5co-event">When & Where</a></li>
							</ul>
						</div>
					</div>

				</div>
			</nav>
			<header id="fh5co-header" class="fh5co-cover" role="banner"
					data-stellar-background-ratio="0.5"
					data-image-background-count="3"
					data-image-background="{{ asset('wedding-9/images/galleries/gallery9.jpeg')}},{{ asset('wedding-9/images/galleries/gallery3.jpeg')}},{{ asset('wedding-9/images/galleries/gallery4.jpeg')}},{{ asset('wedding-9/images/galleries/gallery5.jpeg')}},{{ asset('wedding-9/images/galleries/gallery6.jpeg')}}">
		
				<div class="overlay"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center">
							<div class="display-t">
								<div class="display-tc animate-box" data-animate-effect="fadeIn">
									<img src="{{ asset('wedding-9/images/decor.svg')}}" class="decor decor-top">
									<h2 class="header-title">WE’RE GETTING MARRIED</h2>
									<div class="simply-countdown simply-countdown-one"></div>
									<img src="{{ asset('wedding-9/images/decor.svg')}}" class="decor decor-bot">
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			@include('wedding-9.couple')
            @include('wedding-9.gallery')
			@include('wedding-9.video')
            @include('wedding-9.says')
            @include('wedding-9.event')

			<div id="fh5co-started" class="fh5co-bg">
				<div class="overlay"></div>
				<div class="container">
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
							<h2>Are You Attending?</h2>
							<p>Please Fill-up the form to notify you that you're attending. Thanks.</p>
						</div>
					</div>
					<div class="row animate-box rsvp-form">
						<div class="col-md-10 col-md-offset-1">
							<form class="form-inline" id="form-rsvp">
								<div class="col-md-4 col-sm-4">
									<div class="form-group">
										<label for="name" class="sr-only">Name</label>
										<input type="name" name="name" class="form-control" id="rsvp-name" placeholder="Name">
										<input type="hidden" name="ww_id" id="ww_id" value="2"/>
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="form-group">
										<label for="email"  class="sr-only">Email</label>
										<input type="email" name="email" class="form-control" id="rsvp-email" placeholder="Email">
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<button type="button" class="btn btn-default btn-block btn-attending anchor-style" onclick="submitRSVP()">I am Attending</button>
								</div>
							</form>
							
						</div>
					</div>
					<p class="rsvp-desc animate-box" >
						Thank you <b class="rsvp-name">asdf</b>, your RSVP has been submitted to us.</p>
				</div>
			</div>
			
			<footer id="fh5co-footer" role="contentinfo">
				<div class="container">

					<div class="row copyright">
						<div class="col-md-12 text-center">
							<p>
								<small class="block">Made with <img src="images/favicon.ico"/> by <a href="http://instagram.com/e.yoore" target="_blank">e.yoore</a><br> © 2018 All Rights Reserved.</small>

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
		<script src="{{ asset('wedding-9/js/jquery.min.js')}}"></script>
		<!-- jQuery Easing -->
		<script src="{{ asset('wedding-9/js/jquery.easing.1.3.js')}}"></script>
		<!-- Bootstrap -->
		<script src="{{ asset('wedding-9/js/bootstrap.min.js')}}"></script>
		<!-- Waypoints -->
		<script src="{{ asset('wedding-9/js/jquery.waypoints.min.js')}}"></script>
		<!-- Carousel -->
		<script src="{{ asset('wedding-9/js/owl.carousel.min.js')}}"></script>
		<!-- countTo -->
		<script src="{{ asset('wedding-9/js/jquery.countTo.js')}}"></script>

		<!-- Stellar -->
		<script src="{{ asset('wedding-9/js/jquery.stellar.min.js')}}"></script>
		<!-- Magnific Popup -->
		<script src="{{ asset('wedding-9/js/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{ asset('wedding-9/js/magnific-popup-options.js')}}"></script>

		<!--Menu Morphint -->
		<script src="{{ asset('wedding-9/js/menu-morphing.js')}}"></script>

		<!-- Google Map -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBz3gSnxDJxkR3dQ0TFK6CrfAJu0gUHiIM&sensor=false"></script>
		<script src="{{ asset('wedding-9/js/google_map.js')}}"></script>

		<!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
		<script src="{{ asset('wedding-9/js/simplyCountdown.js')}}"></script>
		<!-- Main -->
		<script src="{{ asset('wedding-9/js/app.js')}}"></script>

		<script>
		var d = new Date(new Date("02-10-2018"));
		var d = new Date(1525600800000);
		
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

	</body>
</html>

