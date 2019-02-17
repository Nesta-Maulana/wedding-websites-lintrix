<div data-page="photos" class="page no-toolbar no-navbar hidden" id="gallery">
    <div class="page-content">
        <div id="pages_maincontent">
            <div class="page_single layout_fullwidth_padding" style="margin: 0px;width: 100%;" >
                <img src="{{ asset('wedding-4/images/headers/top/13.png') }}" alt="" width="100%" style="">
            </div>		 
            <div id="gallery_content" class="page_single layout_fullwidth">	  
            <h2 class="page_title">Foto Prewedding</h2>                    
            <div class="tabs-animated-wrap photos_tabs">
                <div class="tabs">
                    <div id="tab2p" class="tab active">
                        <ul id="photoslist" class="photo_gallery_12">
                            @for ($i = 1; $i<=18 ; $i++) 
                            <li style="width: 32.5%;padding: 1px;">
                                <a href="{{asset('images/couples/'.$i.'.jpg')}}" class="with-caption image-link" title="Gallery">
                                    <img class="image-link" src="{{asset('images/couples/'.$i.'.jpg')}}" style="width:94.77px;height: 94.77px;" />
                                </a>
                            </li>
                            @endfor
                        </ul>   
                        </div>
                    </div>
                </div>
            </div> 
            <div class="clearleft"></div>
            <div id="header_bottom" class="page_single layout_fullwidth_padding" style="width: 100%;margin: 0px;">
                <img src="http://wd.halalindong.com/assets/templates/mobile/images/headers/bottom/13.png" alt="" width="100%" >
            </div>      
        </div>
        @include('wedding-4.bottom')
    </div>
</div>
