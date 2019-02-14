<div data-page="photos" class="page no-toolbar no-navbar hidden" id="gallery">
    <div class="page-content">
        <div id="pages_maincontent">
            <div id="gallery_content" class="page_single layout_fullwidth">	  
                <h2 class="page_title">Galeri Foto</h2>          
                <div class="tabs-animated-wrap photos_tabs">
                    <div class="tabs">
                        <div id="tab2p" class="tab active">
                            <ul id="photoslist" class="photo_gallery_12">
                                @for ($i = 1; $i<=18 ; $i++) 
                                <li style="width: 32.5%;padding: 1px;">
                                    <a rel="gallery-3" href="{{asset('images/couples/'.$i.'.jpg')}}" class="with-caption image-link" title="Putri & Andre Prewedding" class="swipebox">
                                        <img class="image-link" src="{{asset('images/couples/'.$i.'.jpg')}}" alt="image"/>
                                    </a>
                                </li>
                                @endfor
                            </ul>   
                        </div>
                    </div>
                </div>         
            </div> 
        <div class="clearleft"></div>
        @include('wedding-7.bottom')
    </div>
</div>
      
      