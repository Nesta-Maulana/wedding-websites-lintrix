<div data-page="about" class="page no-toolbar no-navbar hidden" id="says">
    <div class="page-content">
        <div id="pages_maincontent"> 
            <div class="page_single layout_fullwidth_padding" style="width: 100%;margin: 0px;text-align: right;" >
                <img src="http://wd.halalindong.com/assets/templates/mobile/images/headers/top/11.png" alt="" width="50%" style="display: inline-block;"  >
            </div>                  
            <div id="says_content" class="page_single layout_fullwidth_padding">
                <h2 class="page_title">Ucapan Do`a</h2>
                <h2 id="Note"></h2>
                <div class="contactform">
                    <form class="" role="form" method="POST" action="http://wd.halalindong.com/anindaprimus/save_comment"  enctype="multipart/form-data">
                        <input type="hidden" name="consumer_id" id="consumer_id" value="13"">
                        <label>Nama:</label>
                        <input type="text" name="name" id="name" value=""" class="form_input" required/>
                        <label>Ucapan:</label>
                        <textarea name="comment_state" id="comment_state" class="form_textarea textarea" rows="" cols="" required></textarea>
                        <input type="submit" name="submit" class="form_submit submit_button" id="submit" value="Kirim" />
                    
                        <label id="loader" style="display:none;"><img src="http://wd.halalindong.com/assets/templates/mobile/images/loader.gif" alt="Loading..." id="LoadingGraphic" /></label>
                    </form>
                </div>
            </div>
            <div id="says_comment" class="page_single layout_fullwidth_padding">  
                <ul class="features_list_detailed" id="comments">   
                    <li>
                        <div class="feat_small_details" >
                            <h4><a href="#">miranti</a></h4>
                            <a href="#">primusss congrats ya mus..semoga menjadi keluarga samawa aamiin happy selalu </a>
                        </div>
                    </li>
                    <li>
                        <div class="feat_small_details" >
                            <h4><a href="#">Novalia Apriatini</a></h4>
                            <a href="#">Barakallah anin sayang. Dilancarin semuanya,  semua doa terbaik buat kalian.  </a>
                        </div>
                    </li>
                    <li>
                        <div class="feat_small_details" >
                            <h4><a href="#">S</a></h4>
                            <a href="#">Konyil</a>
                        </div>
                    </li>
                    <li>
                        <div class="feat_small_details" >
                            <h4><a href="#">Keluarga supriyono dan bude dewi acc ozi</a></h4>
                            <a href="#">Selamet menempuh hidup baru ya mba. Semoga menjadi keluarga sakinah mawadah warohmah. Amin</a>
                        </div>
                    </li>
                    <li>
                        <div class="feat_small_details" >
                            <h4><a href="#">Atu</a></h4>
                            <a href="#">Finally ya imus dpt jodoh...Semoga long lasting...aman damai tentram. Lancar jaya smpai gerbang halal ya mus.... 😊</a>
                        </div>
                    </li>               
                    <input type="number" id="comment_start" value="0">
                </ul>
            <a href="javascript:view_more();" class="button_full btyellow external submit_button" id="view_more">view more</a>
        </div>
        <div class="page_single layout_fullwidth_padding" style="width: 100%;margin: 0px;">
            <img src="{{ asset('wedding-3/images/headers/bottom/13.png') }}" alt="" width="50%" >
        </div>      
    </div>
    @include('wedding-3.bottom')
</div>