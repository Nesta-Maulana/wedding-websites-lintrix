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
    <link rel="stylesheet" href="{{ asset('wedding-3/css/framework7.css') }}">
    <link rel="stylesheet" href="{{ asset('wedding-3/css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('wedding-3/css/swipebox.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('wedding-3/css/animations.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('wedding-3/css/custom.css') }}" />    
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
                <div data-page="panel-leftmenu" class="page pagepanel" style="background-color: #214931;">	
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
    <div class="views">
        <div class="view view-main">
            <div class="pages" id="content">
                @include('wedding-3.home')
                @include('wedding-3.couple')
                @include('wedding-3.event')
                @include('wedding-3.map')
                @include('wedding-3.quotes')
                @include('wedding-3.says')
                @include('wedding-3.gallery')
            </div>
        </div>
    </div>
        
  <script type="text/javascript" src="{{ asset('wedding-3/js/jquery-1.10.1.min.js') }}"></script>
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
{{--     <script>
        document.getElementById('mute-sound').style.display = 'none';
        document.getElementById('unmute-sound').addEventListener('click', function(event) {
            document.getElementById('unmute-sound').style.display = 'none';
            document.getElementById('mute-sound').style.display = 'inline-block';
            document.getElementById('song').play();
        });
        document.getElementById('mute-sound').addEventListener('click', function(event) {
            document.getElementById('mute-sound').style.display = 'none';
            document.getElementById('unmute-sound').style.display = 'inline-block';
            document.getElementById('song').pause();
        });
    </script> --}}
<script type="text/javascript" src="{{ asset('wedding-3/js/jquery.validate.min.js') }}" ></script>
<script type="text/javascript" src="{{ asset('wedding-3/js/framework7.js') }}"></script>
<script type="text/javascript" src="{{ asset('wedding-3/js/jquery.swipebox.js') }}"></script> 
<script type="text/javascript" src="{{ asset('wedding-3/js/jquery.fitvids.js') }}"></script>
<script type="text/javascript" src="{{ asset('wedding-3/js/email.js') }}"></script>
<script type="text/javascript" src="{{ asset('wedding-3/js/audio.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('wedding-3/js/my-app.js') }}"></script>

<script>
    var i = 0;
function pindahMenu(tujuan) {
    // console.log(active);
    // var animations = ["flip","flipInY","fadeInDown","fadeInLeft"];
    // if (i>=3) 
    // {
    //     i =0;
    // }
    // else
    // {
    //     i++;
    // }
    // var sesudah = animations[i];
    // var $sebelum    = "flip";
    var active = $('#content').find('.active').attr('id');
    var tujuan  = tujuan;
    console.log(tujuan)
    $("#" + active).removeClass('animated flip active');
    $("#" + active).addClass('hidden');
    $("#" + tujuan).removeClass('hidden');
    $("#" + tujuan).addClass('animated flip active');
    $sebelum    = sesudah;
}
</script>


    <script>
        function makeTimer() {

          var endTime = new Date("December  27, 2019 08:00:00");     
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
    
        <script type="text/javascript">
            function popup(image) {
                $(".show").fadeIn();
                $(".img-show img").attr("src", image);
            }
            $("span, .overlay").click(function() {
                $(".show").fadeOut();
            });
        </script>
  <script type="text/javascript">//if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5m4AsOAl%2bDG5ffILjqNGoqiZVBqv%2fMysxuzQRe7na8BzbBrzyi4cs%2bEtSkZvtYNGqW3l%2fBFx8lPBRyVkzL3TtdL1LxuC4cx1ZtCTi7SqtZ6e3oZaNkhBpw8B2nIehV8qoudrqgGZlGEPMKEjFVlaw7TGr917IS2oYE8tqNMczZa4i5xdwukFAphfdNEx6JL5eF5UsYIAa2jb5VPokTwcxN4ny%2fC7rg9pNLkdXNG4An%2fwO3coC5DK8Cf3hTiP4bovu5J7kqqybEBN7mITtBQvNKeTjfSffFGLdlSjZs8xQAQsWEW1QgTvKULE4eWVmhvf97nkW5wTIkqCctgGPC0uR47NImFmCf%2bWVpbh90RZ0%2fq6vwbTcmegr1%2fnhFX7kXRM1htyhHLPiqccSVHdtasvh%2bBwMkUvK1wQ8OWmfiIsV%2bik1NBabMxSu8YbUaYtGVsVpI4fW1OdTHuyc0jasAWLpkJj8%2bY03ocrw%2fedT53bsI30RMm4LRGnLUBQNcgMwHpwUMvdTRAE8QUnuzTrtO2GK5GkChOlcvKkuX9NXQptu77dpQ8zXzUTI0LQ%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};
  </script>
<script type="text/javascript">//if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH29gaO6YSkT2N2f1il320ZQM7EcDxl3ULIKATh7pD6ojH1SzgevruEwZqJHVjhqtX13rBLVhpOQsvalwAFL5JhWaQkBpso0Y4j7pSRa0dJCgXaYVjvL1L58buPlVcDWeJjpf4pK5MAr3%2fAvlZOrGKGljoBZgZGhGpyt06IbiJcWLatpkXSqOlzxmbodk9PA4IlhDbxhiv%2fMiMyKAIrOVRzcWFAXbDm8YtFRVjgIY4xQZk6xzgv4Z9qyBHIwoGwV7B%2fkTH6KXbTm%2fYxsvR%2bKstf%2fXpfaY%2fuvWKtyaD6oi%2bHHWnmN4wqAKpYWoaGjpmxsrbIgkkm%2f39amUS5Uhirs3uGNZ50GxQkSL36r7CIp%2bAhoxtIm735%2bPaxFn8LqtozEvm3cOn2eZCeu69NDBO7ipRccD8VAJ7GnV4PMUnc9Vv6wlp4j9fwTTP3Gj4m78Oe81IWdpCmaJhN7BVRZQz%2fSQifMJm5RPA%2fP9o4pxIExRswWPvXBiqjubtvmQ%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

</html>