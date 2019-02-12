<div data-page="photos" class="page no-toolbar no-navbar hidden" id="gallery">
    <div class="page-content">
        <div id="pages_maincontent">
            <div class="page_single layout_fullwidth_padding" style="width: 100%;margin: 0px;text-align: right;" >
                <img src="http://wd.halalindong.com/assets/templates/mobile/images/headers/top/11.png" alt="" width="50%" style="display: inline-block;"  >
            </div>       
            <div id="gallery_content" class="page_single layout_fullwidth">
                <h2 class="page_title">Foto Prewedding</h2>     
                <div class="tabs-animated-wrap photos_tabs">
                    <div class="tabs">
                        <div id="tab1p" class="tab active">
                             <ul id="photoslist" class="photo_gallery_13">
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
            <div class="page_single layout_fullwidth_padding" style="width: 100%;margin: 0px;">
                <img src="{{ asset('wedding-3/images/headers/bottom/11-3.png') }}" alt="" width="50%" >
            </div>
        </div>
        @include('wedding-3.bottom')
    </div>
</div>
