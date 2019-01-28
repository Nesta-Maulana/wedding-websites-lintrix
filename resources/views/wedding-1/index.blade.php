<!DOCTYPE html>
	<html>
	<head>
  		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
	  	<meta name="apple-mobile-web-app-status-bar-style" content="black">
  		<meta property="og:image" content=""> 
		<meta property="og:title" content="Wedding of Fajar & Senja" />
		<meta property="og:description" content="Gedung Puri Begawan Bogor, 12 | December | 2019.">
		<meta property="og:type" content="article" />   
		<link rel="shortcut icon" href="{{asset('images/pandawalogo.jpg')}}">
        <meta property="og:url" content=""/>
    	<link href="" media="(device-width: 320px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
		<title>Fajar - Senja pandawa.tech</title>
		<link rel="stylesheet" href="{{asset('wedding-1/css/framework7.css')}}">
		<link rel="stylesheet" href="{{asset('wedding-1/css/style.css')}}">
		<link href="{{asset('wedding-1/css/font-awesome.min.css')}}" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="{{asset('wedding-1/css/swipebox.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('wedding-1/css/animations.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{asset('wedding-1/css/custom.css')}}" />
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- <link href="fonts.googleapis.com/css.css" rel="stylesheet"> -->
        
    </head>
    <body id="mobile_wrap">
        <div class="statusbar-overlay"></div>
        <div class="panel-overlay"></div>
        <div class="panel panel-left panel-reveal">
	           <div class="view view-subnav">
                    <div class="pages">
  		                <div data-page="panel-leftmenu" class="page pagepanel" style="background-color: #d3d6cb;">	
                            <div class="page-content">
                                <nav class="main-nav icons_21">
                                    <ul>
                                        <li>
                                            <a href="{{route('index.wedding-1')}}" class="close-panel" data-view=".view-main">
                                                <img src="{{asset('wedding-1/images/icons/gold/home.png')}}" alt="" title="" />
                                                <span class="leftmenu_name">Home</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="putriandre7/couple.htm" class="close-panel" data-view=".view-main">
                                                <img src="{{asset('wedding-1/images/icons/gold/rings.png')}}" alt="" title="Bridegroom" />
                                                <span class="leftmenu_name">Bridegroom</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="putriandre7/event.htm" class="close-panel" data-view=".view-main">
                                                <img src="{{asset('wedding-1/images/icons/gold/blog.png')}}" alt="" title="Event" />
                                                <span class="leftmenu_name">Event</span>
                                            </a>
                                        </li>  
                                        <li>
                                            <a href="putriandre7/gallery.htm" class="close-panel" data-view=".view-main">
                                                <img src="{{asset('wedding-1/images/icons/gold/photos.png')}}" alt="" title="Photo" />
                                                <span class="leftmenu_name">Gallery</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="putriandre7/video.htm" class="close-panel" data-view=".view-main">
                                                <img src="{{asset('wedding-1/images/icons/gold/video.png')}}" alt="" title="Video" />
                                                <span class="leftmenu_name">Video</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="putriandre7/map.htm" class="close-panel" data-view=".view-main">
                                                <img src="{{asset('wedding-1/images/icons/gold/map.png')}}" alt="" title="Map" />
                                                <span class="leftmenu_name">Map</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="putriandre7/quotes.htm" class="close-panel" data-view=".view-main">
                                                <img src="{{asset('wedding-1/images/icons/gold/quotes.png')}}" alt="" title="Quotes" />
                                                <span class="leftmenu_name">Quotes</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="putriandre7/says.htm" class="close-panel" data-view=".view-main">
                                                <img src="{{asset('wedding-1/images/icons/gold/message.png')}}" alt="" title="Wishes" />
                                                <span class="leftmenu_name">Wishes</span>
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
            @include('wedding-1.home')
        </div>
            <script type="text/javascript" src="{{asset('wedding-1/js/jquery-1.10.1.min.js')}}"></script>
            <script>
                document.getElementById('mute-sound').style.display = 'none';
                document.getElementById('unmute-sound').addEventListener('click', function(event)
                {
                    document.getElementById('unmute-sound').style.display = 'none';
                    document.getElementById('mute-sound').style.display = 'inline-block';
                    document.getElementById('song').play();
                });

                document.getElementById('mute-sound').addEventListener('click', function(event)
                {
                    document.getElementById('mute-sound').style.display = 'none';
                    document.getElementById('unmute-sound').style.display = 'inline-block';
                    document.getElementById('song').pause();
                });
            </script>
            <script type="text/javascript" src="{{asset('wedding-1/js/jquery-1.10.1.min.js')}}"></script>
            <script type="text/javascript" src="{{asset('wedding-1/js/jquery.validate.min.js')}}" ></script>
            <script type="text/javascript" src="{{asset('wedding-1/js/framework7.js')}}"></script>
            <script type="text/javascript" src="{{asset('wedding-1/js/jquery.swipebox.js')}}"></script> 
            <script type="text/javascript" src="{{asset('wedding-1/js/jquery.fitvids.js')}}"></script>
            <script type="text/javascript" src="{{asset('wedding-1/js/email.js')}}"></script>
            <script type="text/javascript" src="{{asset('wedding-1/js/audio.min.js')}}"></script>
            <script type="text/javascript" src="{{asset('wedding-1/js/my-app.js')}}"></script>
            <script>
                function view_more() 
                {       
                    var start=document.getElementById("comment_start").value;
                    var comment_start = parseInt(start) + 5;
                    document.getElementById("comment_start").value = comment_start;

                    var url = 'localhost:8000/wedding/says_more/'+ comment_start ;
                    //alert(url);
                    $('#comments').append($('<div>').load(url));
                    return false;
                }
            </script>
            <script>
                function rsvp_more() 
                {     
                    var start=document.getElementById("comment_start").value;
                    var comment_start = parseInt(start) + 5;
                    document.getElementById("comment_start").value = comment_start;
                    var url = 'localhost:8000/wedding/rsvp_more/'+ comment_start ;
                    //alert(url);
                    $('#comments').append($('<div>').load(url));
                    return false;
                }
            </script>
            
            <script>
                function makeTimer() 
                {
                    var endTime = new Date("December 27, 2018 09:00:00 PDT");     
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