<div data-page="photos" class="page no-toolbar no-navbar hidden" id="gallery">
    <div class="page-content">
        <div id="pages_maincontent" >
            <div class="page_single layout_fullwidth_padding" style="width: 100%;margin: 0px;text-align: center;" >
                <img src="{{ asset('wedding-6/images/headers/top/11.png')}}" alt="" width="100%" style="display: inline-block;"  >
            </div>
            <div id="sub_content" class="page_single layout_fullwidth">	  
                <h2 class="page_title"><strong>Our Lovely Gallery</strong></h2>
                <div class="tabs-animated-wrap photos_tabs">
                    <div class="tabs">
                        <div id="tab2p" class="tab active">
                           <ul id="photoslist" class="photo_gallery_12">
                                @for ($i = 1; $i<=18 ; $i++) 
                                <li style="width: 32.5%;padding: 1px;">
                                    <a rel="gallery-3" href="{{asset('images/couples/'.$i.'.jpg')}}" class="swipebox" title="Putri & Andre Prewedding">
                                        <img src="{{asset('images/couples/'.$i.'.jpg')}}" alt="image" />
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
                <img src="{{ asset('wedding-6/images/headers/top/14.png')}}" alt="" width="50%" style="text-align: center;display: block;margin: 0 auto;">
            </div>
        </div>
        @include('wedding-6.bottom')
    </div>
</div>
