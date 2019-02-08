<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">

		<title>Pandawa Tech</title>	

		<title>Transcend</title>	

		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="{{asset('landing-page/css/base.css')}}">
		<link rel="stylesheet" href="{{asset('landing-page/css/vendor.css')}}">
		<link rel="stylesheet" href="{{asset('landing-page/css/main.css')}}">
		<script src="{{asset('landing-page/js/modernizr.js')}}"></script>
		<script src="{{asset('landing-page/js/pace.min.js')}}"></script>
		<link rel="shortcut icon" href="{{ asset('images/pandawalogo.jpg') }}" type="image/x-icon">
		<link rel="icon" href="{{ asset('images/pandawalogo.jpg') }}" type="image/x-icon">
	</head>
<body id="top">
	<header class="s-header">
		<div class="header-logo">
			<a class="site-logo" href="index.html">
				<img src="{{ asset('landing-page/images/logo-putih.png') }}" alt="Homepage" >
			</a>
		</div> 
		<nav class="header-nav">
			<a href="index.html#0" class="header-nav__close" title="close"><span>Close</span></a>
			<div class="header-nav__content">
				<h3>Pandawa Tech</h3>
				<ul class="header-nav__list">
					<li class="current"><a class="smoothscroll" href="index.html#home" title="home">Home</a></li>
					<li><a class="smoothscroll" href="index.html#about" title="about">About</a></li>
					<li><a class="smoothscroll" href="index.html#services" title="services">Services</a></li>
					<li><a class="smoothscroll" href="index.html#works" title="works">Works</a></li>
					<li><a class="smoothscroll" href="index.html#contact" title="contact">Contact</a></li>
				</ul>
				<p>
					Every struggle is a pain. Pain is not always bad, everything will end beautifully. Every pain always costs quite a lot. But, calm down money will never lie to quality.
				</p>

				<ul class="header-nav__social">
					<li>
						<a href="index.html#0"><i class="fab fa-facebook"></i></a>
					</li>
					<li>
						<a href="index.html#0"><i class="fab fa-twitter"></i></a>
					</li>
					<li>
						<a href="index.html#0"><i class="fab fa-instagram"></i></a>
					</li>
					<li>
						<a href="index.html#0"><i class="fab fa-behance"></i></a>
					</li>
					<li>
						<a href="index.html#0"><i class="fab fa-dribbble"></i></a>
					</li>
				</ul>
			</div> 
		</nav> 
		<a class="header-menu-toggle" href="index.html#0">
			<span class="header-menu-icon"></span>
		</a>
	</header> 
	@include('landing-page.beranda')
	@include('landing-page.about')
	@include('landing-page.services')
	@include('landing-page.works')
	@include('landing-page.happy')
	@include('landing-page.contact')
	<div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">
		<div class="pswp__bg"></div>
		<div class="pswp__scroll-wrap">
			<div class="pswp__container">
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
			</div>
			<div class="pswp__ui pswp__ui--hidden">
				<div class="pswp__top-bar">
					<div class="pswp__counter"></div>
					<button class="pswp__button pswp__button--close" title="Close (Esc)"></button> 
					<button class="pswp__button pswp__button--share" title="Share"></button> 
					<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> 
					<button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
					
					<div class="pswp__preloader">
						<div class="pswp__preloader__icn">
							<div class="pswp__preloader__cut">
								<div class="pswp__preloader__donut"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
					<div class="pswp__share-tooltip"></div>
				</div>
				<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> 
				<button class="pswp__button 	pswp__button--arrow--right" title="Next (arrow right)"></button>
				<div class="pswp__caption">
					<div class="pswp__caption__center"></div>
				</div>
			</div>
		</div>
	</div> 

	<div id="preloader">
		<div id="loader"></div>
	</div>

<script src="{{asset('landing-page/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('landing-page/js/plugins.js')}}"></script>
<script src="{{asset('landing-page/js/main.js')}}"></script>
<script async src="{{asset('landing-page/js/js')}}"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-23581568-13');
</script>
</body>
</html>