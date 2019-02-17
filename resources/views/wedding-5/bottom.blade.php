<div id="mainmenu" class="swiper-container-toolbar swiper-toolbar swiper-init" data-effect="slide" data-slides-per-view="4" data-slides-per-group="4" data-space-between="0" data-pagination=".swiper-pagination-toolbar">
	<div class="swiper-pagination-toolbar"></div>
    <div class="swiper-wrapper">
        <div class="swiper-slide toolbar-icon">
            <a onclick="pindahMenu('index" > 
                <img src="{{ asset('images/icons/black/home.png')}}" alt="" title="" />
                <span class="icon-title">Home</span>
            </a>
        </div>
        
        <div class="swiper-slide toolbar-icon">
            <a onclick="pindahMenu('couple')" >
                <img src="{{ asset('images/icons/black/rings.png')}}" alt="" title="Mempelai" />
                <span class="icon-title">Mempelai</span>
            </a>
        </div>
    
        <div class="swiper-slide toolbar-icon">
            <a onclick="pindahMenu('event')" >
                <img src="{{ asset('images/icons/black/blog.png')}}" alt="" title="" />
                <span class="icon-title">Acara</span>
            </a>
        </div>
    
    
        <div class="swiper-slide toolbar-icon">
            <!--<a href="ucapan.php" data-popup=".popup-social" class="open-popup"> -->
            <a onclick="pindahMenu('gallery')">
                <img src="{{ asset('images/icons/black/photos.png')}}" alt="" title="Prewedding" />
                <span class="icon-title">Galeri</span>
            </a>
        </div>
    
        <!-- <div class="swiper-slide toolbar-icon">
            <a href="ucapan.php" data-popup=".popup-social" class="open-popup"> 
            <a onclick="pindahMenu('video')">
                <img src="{{ asset('images/icons/black/video.png')}}" alt="" title="Video" />
                <span class="icon-title">Video</span>
            </a>
        </div> -->
        
        <div class="swiper-slide toolbar-icon">
            <a onclick="pindahMenu('map')">
                <img src="{{ asset('images/icons/black/map.png')}}" alt="" title="Lokasi" />
                <span class="icon-title">Lokasi</span>
            </a>
        </div>
    
        <div class="swiper-slide toolbar-icon">
            <a onclick="pindahMenu('quotes')">
                <img src="{{ asset('images/icons/black/quotes.png')}}" alt="" title="Kata Mutiara" />
                <span class="icon-title">Quotes</span>
            </a>
        </div>
        
        <div class="swiper-slide toolbar-icon">
            <!--<a href="ucapan.php" data-popup=".popup-social" class="open-popup"> -->
            <a onclick="pindahMenu('says')">
                <img src="{{ asset('images/icons/black/message.png')}}" alt="" title="Ucapan Do'a" />
                <span class="icon-title">Ucapan</span>
            </a>
        </div>
	</div>
</div>

<div class="bottom_menu_open toolbar-icon">
  <a href="#" data-panel="left" class="open-panel">
     <img src="{{ asset('images/icons/white/menu.png')}}" alt="" title="More" style="padding-top: 5px;" /> 
     <span class="icon-title icon-title-more">More</span>
  </a>		  
</div>  