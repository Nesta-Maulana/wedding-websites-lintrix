<div data-page="photos" class="page no-toolbar no-navbar hidden" id="gallery">
    <div class="page-content">
        <div id="pages_maincontent" >
            <div class="page_single layout_fullwidth_padding" style="margin-top: 20px;" >
                <img src="http://wd.halalindong.com/assets/templates/mobile/images/headers/top/3.png" alt="" width="40%" style="text-align: center;display: block;margin: 0 auto;">
            </div>			 
            <div id="gallery_content" class="page_single layout_fullwidth">	  
                <h2 class="page_title">Our Lovely Gallery</h2>
                <div class="tabs-animated-wrap photos_tabs">
                    <div class="tabs">
                        <div id="tab2p" class="tab active">
                            <ul id="photoslist" class="photo_gallery_12">
                                @for ($i = 1; $i<=18 ; $i++) 
                                    <li>
                                        <a href="{{asset('images/couples/'.$i.'.jpg')}}" class="swipebox" title="Gallery">
                                            <img src="{{asset('images/couples/'.$i.'.jpg')}}" />
                                        </a>
                                    </li>
                                    @endfor
                            </ul>   
                        </div>
                    </div>
                </div>  
            </div> 
            <div class="clearleft"></div>
            <div class="page_single layout_fullwidth_padding">
                <img src="http://wd.halalindong.com/assets/templates/mobile/images/headers/bottom/3.png" alt="" width="50%" style="text-align: center;display: block;margin: 0 auto;">
            </div>
        </div>
        @include('wedding-5.bottom')
    </div>
</div>
      