<div data-page="photos" class="page no-toolbar no-navbar hidden" id="photos">
    <div class="page-content">
        <div id="pages_maincontent">
            <div class="page_single layout_fullwidth_padding" style="width: 100%;margin: 0px;text-align: center;"> <img src="{{asset('wedding-1/images/headers/top/7.png')}}" alt="" width="100%" style="display: inline-block;"></div>
            <div id="sub_content" class="page_single layout_fullwidth">
                <h2 class="page_title"> <strong>Galeri Foto</strong></h2>
                <div class="tabs-animated-wrap photos_tabs">
                    <div class="tabs">
                        <div id="tab2p" class="tab active">
                            <ul id="photoslist" class="photo_gallery_12"> @for ($i = 1; $i
                                <=18 ; $i++)<li style="width: 32.5%;padding: 1px;">
                                    <a href="{{asset('images/couples/'.$i.'.jpg')}}" class="with-caption image-link" title="Gallery"> <img class="image-link" src="{{asset('images/couples/'.$i.'.jpg')}}" /> </a>
                                    </li> @endfor</ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearleft"></div>
            <div class="page_single layout_fullwidth_padding" style="width: 100%;margin: 0px;padding-bottom: 32px;"> <img src="{{asset('wedding-1/images/headers/bottom/7.png')}}" alt="" width="100%"></div>
        </div> @include('wedding-1.bottom')</div>
    </div>
    <div class="show">
        <div class="overlay"></div>
        <div class="img-show"> <span>X</span> <img src="" style="width:100%;height: width:100%"></div>
    </div>
    <div data-page="photos" class="page no-toolbar no-navbar hidden" id="photos">
        <div class="page-content">
            <div id="pages_maincontent">
                <div class="page_single layout_fullwidth_padding" style="width: 100%;margin: 0px;text-align: center;">
                    <img src="{{asset('wedding-1/images/headers/top/7.png')}}" alt="" width="100%" style="display: inline-block;">
                </div>
                <div id="sub_content" class="page_single layout_fullwidth">
                    <h2 class="page_title">
                    <strong>Galeri Foto</strong>
                </h2>
                    <div class="tabs-animated-wrap photos_tabs">
                        <div class="tabs">
                            <div id="tab2p" class="tab active">
                                <ul id="photoslist" class="photo_gallery_12">
                                    @for ($i = 1; $i
                                    <=18 ; $i++) <li style="width: 32.5%;padding: 1px;">
                                        <a href="{{asset('images/couples/'.$i.'.jpg')}}" class="with-caption image-link" title="Gallery">
                                            <img class="image-link" src="{{asset('images/couples/'.$i.'.jpg')}}" />
                                        </a>
                                        </li>
                                        @endfor
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="clearleft"></div>
                <div class="page_single layout_fullwidth_padding" style="width: 100%;margin: 0px;padding-bottom: 32px;">
                    <img src="{{asset('wedding-1/images/headers/bottom/7.png')}}" alt="" width="100%">
                </div>
            </div>
            @include('wedding-1.bottom')
        </div>
    </div>

    <div class="show">
        <div class="overlay"></div>
        <div class="img-show">
            <span>X</span>
            <img src="" style="width:100%;height: width:100%">
        </div>
    </div>