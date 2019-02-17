<!DOCTYPE html>
<html>
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
        <link rel="stylesheet" href="{{ asset('wedding-4/css/framework7.css') }}">
        <link rel="stylesheet" href="{{ asset('wedding-4/css/style.css') }}">
        <link href="{{ asset('wedding-4/css/font-awesome.min.css') }}" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="{{ asset('wedding-4/css/swipebox.css') }}" />
        <link type="text/css" rel="stylesheet" href="{{ asset('wedding-4/css/animations.css') }}" />
        <link type="text/css" rel="stylesheet" href="{{ asset('wedding-4/css/custom.css') }}" />
        <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,900" rel="stylesheet"> -->
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    </head>
<body id="mobile_wrap">
    <div class="statusbar-overlay"></div>
    <div class="panel-overlay"></div>
    <div class="panel panel-left panel-reveal">
       <div class="view view-subnav">
            <div class="pages">
                <div data-page="panel-leftmenu" class="page pagepanel" style="background-color: #cfcec9;">	
                    <div class="page-content">
		    	        <nav class="main-nav icons_21">
                            <ul>
                                <li>
                                    <a onclick="pindahMenu('index')"  class="close-panel" data-view=".view-main">
                                        <img src="{{ asset('wedding-4/images/icons/gold/home.png') }}" alt="" title="" />
                                        <span class="leftmenu_name">Home</span>
                                    </a>
                                </li>
                            
                                <li>
                                    <a onclick="pindahMenu('couple')" class="close-panel" data-view=".view-main">
                                        <img src="{{ asset('wedding-4/images/icons/gold/rings.png') }}" alt="" title="" />
                                        <span class="leftmenu_name">Mempelai</span>
                                    </a>
                                </li>

                                <li>
                                    <a onclick="pindahMenu('event')" class="close-panel" data-view=".view-main">
                                        <img src="{{ asset('wedding-4/images/icons/gold/blog.png') }}" alt="" title="" />
                                        <span class="leftmenu_name">Acara</span>
                                    </a>
                                </li>  
                        
                                <li>
                                    <a onclick="pindahMenu('gallery')"  class="close-panel" data-view=".view-main">
                                        <img src="{{ asset('wedding-4/images/icons/gold/photos.png') }}" alt="" title="" />
                                        <span class="leftmenu_name">Galeri</span>
                                    </a>
                                </li>
                                
                                <li>
                                    <a onclick="pindahMenu('maps')"  class="close-panel" data-view=".view-main">
                                        <img src="{{ asset('wedding-4/images/icons/gold/map.png') }}" alt="" title="" />
                                        <span class="leftmenu_name">Lokasi</span>
                                    </a>
                                </li>
                            
                                <li>
                                    <a onclick="pindahMenu('quotes')"  class="close-panel" data-view=".view-main">
                                        <img src="{{ asset('wedding-4/images/icons/gold/quotes.png') }}" alt="" title="" />
                                        <span class="leftmenu_name">Quotes</span>
                                    </a>
                                </li>
                            
                                <li>
                                    <a onclick="pindahMenu('wish')"  class="close-panel" data-view=".view-main">
                                        <img src="{{ asset('wedding-4/images/icons/gold/message.png') }}" alt="" title="" />
                                        <span class="leftmenu_name">Ucapan</span>
                                    </a>
                                </li>
                        
                                <li>
                                    <a onclick="" href="#" class="close-panel" data-view=".view-main">
                                        <img src="" alt="" title="" />
                                        <span class="leftmenu_name"></span>
                                    </a>
                                </li>    
                            </ul>
			            </nav>
                    </div>
		            </div>
	            </div>
        </div>  
    </div>
    <div class="views">
        <div class="view view-main">
            <div class="pages" id="content">
                @include('wedding-4.home')
                @include('wedding-4.couple')
                @include('wedding-4.event')
                @include('wedding-4.map')
                @include('wedding-4.quotes')
                @include('wedding-4.says')
                @include('wedding-4.gallery')

            </div>
            <div class="music-box">
                <button class="music-box-toggle-btn">
                    <audio id='song' loop>
                        <source src="{{asset('music/lagu.mp3')}}">
                    </audio>  

                    <button type="button" class="music" id="mute-sound" >
                      <i class="fa fa-music"></i>
                    </button>
                    <button type="button" class="music" id="unmute-sound" >
                      <i class="fa fa-microphone-slash"></i>
                    </button> 
                </button>
            </div>
        </div>
    </div>
    
    <script type="text/javascript" src="{{ asset('wedding-4/js/jquery-1.10.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('wedding-4/js/jquery.validate.min.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('wedding-4/js/framework7.js') }}"></script>
    <script type="text/javascript" src="{{ asset('wedding-4/js/jquery.swipebox.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('wedding-4/js/jquery.fitvids.js') }}"></script>
    <script type="text/javascript" src="{{ asset('wedding-4/js/email.js') }}"></script>
    <script type="text/javascript" src="{{ asset('wedding-4/js/audio.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('wedding-4/js/my-app.js') }}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script>
        $('.with-caption').magnificPopup({
            type: 'image',
            closeBtnInside: false,
            mainClass: 'mfp-with-zoom mfp-img-mobile',
            image: {
                verticalFit: true,
                titleSrc: function(item) {
                    var caption = item.el.attr('title');
                    return caption;
                }
            },
            gallery: {
                enabled: true
            },
            callbacks: {
                open: function() {
                    this.wrap.on('click.pinhandler', '.pin-it', function(e) {});
                },
                beforeClose: function() {}
          }
        });
    </script>
    <script>
        function pindahMenu(tujuan) {
            var active = $('#content').find('.active').attr('id');
            var tujuan = tujuan;
            $("#" + active).removeClass('animated flip active');
            $("#" + active).addClass('hidden');
            $("#" + tujuan).removeClass('hidden');
            $("#" + tujuan).addClass('animated flip active');
        }
    </script>
    <script>
    	document.getElementById('mute-sound').style.display = 'none';
        document.getElementById('unmute-sound').addEventListener('click', function(event){
            document.getElementById('unmute-sound').style.display = 'none';
            document.getElementById('mute-sound').style.display = 'inline-block';
            document.getElementById('song').play();
        });

        document.getElementById('mute-sound').addEventListener('click', function(event){
            document.getElementById('mute-sound').style.display = 'none';
            document.getElementById('unmute-sound').style.display = 'inline-block';
            document.getElementById('song').pause();
        });
    </script>
    <script>
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

            $("#days").html(days + "<span>Days</span>");
            $("#hours").html(hours + "<span>Hours</span>");
            $("#minutes").html(minutes + "<span>Minutes</span>");
            $("#seconds").html(seconds + "<span>Seconds</span>");   
        }
        setInterval(function() { makeTimer(); }, 1000);
    </script>
</body>

</html>