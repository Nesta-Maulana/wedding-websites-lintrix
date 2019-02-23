<!DOCTYPE html>
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta property="og:image" content="">
    <meta property="og:title" content="Wedding of Fajar & Senja" />
    <meta property="og:description" content="Gedung Puri Begawan Bogor, 27 | December | 2019.">
    <meta property="og:type" content="article" />
    <link rel="shortcut icon" href="{{asset('images/pandawalogo.jpg')}}">
    <meta property="og:url" content="" />
    <link href="{{ asset('wedding-3/images/apple_touch_icon_72x72.png') }}" media="(device-width: 320px)" rel="apple-touch-startup-image">
    <link href="{{ asset('wedding-3/images/apple_touch_icon_114x114.png') }}" media="(device-width: 320px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
    <title>Fajar - Senja pandawa.tech</title>

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
	<!-- <link rel="stylesheet" href="{{ asset('wedding-8/css/menu-morphing.css') }}"> -->

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
								<a href="#fh5co-header">Senja & Fajar</a>
							</div>
						</div>
						<div class="col-xs-12 col-md-12 menu">
							<ul>
								<li><a href="#fh5co-header">Home</a></li>
								<li><a href="#fh5co-couple">The Couple</a></li>
								<li><a href="#fh5co-couple-story">Our Story</a></li>
								<li class="menu-title">
									<a href="#fh5co-header">Senja & Fajar</a>
								</li>
								<li><a href="#fh5co-gallery">Gallery</a></li>
								<li><a href="#fh5co-testimonial">Wishes</a></li>
								<li><a href="#fh5co-event">When & Where</a></li>
							</ul>
						</div>
					</div>

				</div>
			</nav>

			@include('wedding-8.header')
			@include('wedding-8.couple')
			@include('wedding-8.couple-story')
			@include('wedding-8.gallery')
            @include('wedding-8.says')
			@include('wedding-8.event')
			@include('wedding-8.footer')

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
		<script type="text/javascript">
		    $(document).ready(function()
		    {
		        $(document).ready(function() {
		              $('.owl-carousel').owlCarousel({
		                margin: 10,
		                loop: true,
		                autoplay:true,
		                // autoWidth: true,
		                items: 1
		              })
		            })
		    });
		</script>       
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
		<!-- <script src="{{ asset('wedding-8/js/menu-morphing.js') }}"></script> -->

		<!-- Google Map -->
		<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBz3gSnxDJxkR3dQ0TFK6CrfAJu0gUHiIM&sensor=false"></script> -->
		<!-- <script src="{{ asset('wedding-8/js/google_map.js') }}"></script> -->

		<!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
		<script src="{{ asset('wedding-8/js/simplyCountdown.js') }}"></script>
		<!-- Main -->
		<script src="{{ asset('wedding-8/js/app.js') }}"></script>
		<script type="text/javascript">
		    function makeTimer() 
		    {
	     	 	var endTime = new Date("December 27, 2019 08:00:00");     
		      	var endTime = (Date.parse(endTime)) / 1000;
		      	var now = new Date();
		      	var now = (Date.parse(now) / 1000);
		      	var timeLeft = endTime - now;
		      	var days = Math.floor(timeLeft / 86400); 
		      	var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
		      	var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
		      	var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

		      	if (hours < "10") { hours = "0" + hours; }
		      	if (minutes < "10") { minutes = "0" + minutes; }
		      	if (seconds < "10") { seconds = "0" + seconds; }

		      	$("#days").html("<span class='simply-amount'>"+days+"</span>"+ "<span class='simply-word'>days</span>");
		      	$("#hours").html("<span class='simply-amount'>"+hours+"</span>"+ "<span class='simply-word'>hours</span>");
		      	$("#minutes").html("<span class='simply-amount'>"+minutes+"</span>"+ "<span class='simply-word'>minutes</span>");
		      	$("#seconds").html("<span class='simply-amount'>"+seconds+"</span>"+ "<span class='simply-word'>seconds</span>");
		  }

		  setInterval(function() { makeTimer(); }, 1000);
		</script>
<!-- 		<script>
		var d = new Date(new Date("27-12-2019"));
		var d = new Date(1530375200000);
		
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
	</script> -->

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113157757-2"></script> -->
	<!-- <script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-113157757-2');
	</script> -->
	
	<!-- <audio id="backsound" loop="loop" style="display: none" autoplay>
	    <source src="https://instaud.io/_/29zu.mp3" type="audio/mpeg" />
	</audio> -->    
	</body>
</html>

