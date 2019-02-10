<div data-page="about" class="page no-toolbar no-navbar">
    <div class="page-content">
        <div id="pages_maincontent">   
            <div class="page_single layout_fullwidth_padding" style="margin: 0px;width: 100%;" >
                <img src="http://wd.halalindong.com/assets/templates/mobile/images/headers/top/13.png" alt="" width="100%" style="">
            </div>                    
            <div id="says_content" class="page_single layout_fullwidth_padding"> 
            <h2 class="page_title">Ucapan Do`a</h2>            
            <h2 id="Note"></h2>
            
            <div class="contactform">
                <form class="" role="form" method="POST" action="http://wd.halalindong.com/hanestyaricky/save_comment"  enctype="multipart/form-data">
                    <input type="hidden" name="consumer_id" id="consumer_id" value="16"">
                    <label>Nama:</label>
                    <input type="text" name="name" id="name" value=""" class="form_input" required/>
                    <label>Ucapan:</label>
                    <textarea name="comment_state" id="comment_state" class="form_textarea textarea" rows="" cols="" required></textarea>
                    <input type="submit" name="submit" class="form_submit submit_button" id="submit" value="Kirim" />
                
                    <label id="loader" style="display:none;"><img src="http://wd.halalindong.com/assets/templates/mobile/images/loader.gif" alt="Loading..." id="LoadingGraphic" /></label>
                </form>
            </div>
            <ul class="features_list_detailed" id="comments">
                <li>
                    <div class="feat_small_details" >
                        <h4><a href="#">taela</a></h4>
                        <a href="#">selamat cuk</a>
                    </div>
                </li>
                <li>
                    <div class="feat_small_details" >
                        <h4><a href="#">afi</a></h4>
                        <a href="#">bejpo</a>
                    </div>
                </li>
                <li>
                    <div class="feat_small_details" >
                        <h4><a href="#">Eko Sulistio</a></h4>
                        <a href="#">Selamat ya.. semoga samawa. Aamiin ☺️🙏</a>
                    </div>
                </li>
                <li>
                    <div class="feat_small_details" >
                        <h4><a href="#">Titik</a></h4>
                        <a href="#">Selamat ya</a>
                    </div>
                </li>
                <li>
                    <div class="feat_small_details" >
                        <h4><a href="#">xxx</a></h4>
                        <a href="#">tes</a>
                    </div>
                </li>
                <input type="number" id="comment_start" value="0">
            </ul>
            <a href="javascript:view_more();" class="button_full btyellow external submit_button" id="view_more">View more</a>
        </div>
        <div id="header_bottom" class="page_single layout_fullwidth_padding" style="width: 100%;margin: 0px;">
            <img src="http://wd.halalindong.com/assets/templates/mobile/images/headers/bottom/13.png" alt="" width="100%" >
        </div>      
    </div>
    @include('wedding-4.bottom')
</div>
      