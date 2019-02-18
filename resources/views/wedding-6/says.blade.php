<div data-page="about" class="page no-toolbar no-navbar hidden" id="says">
    <div class="page-content">
        <div id="pages_maincontent">
          
            <div class="page_single layout_fullwidth_padding" style="width: 100%;margin: 0px;text-align: center;" >
                <img src="{{ asset('wedding-6/images/headers/top/11.png')}}" alt="" width="100%" style="display: inline-block;"  >
            </div>    
            <div id="says_content" class="page_single layout_fullwidth_padding">
                <h2 class="page_title"><strong>Wedding Wishes</strong></h2>
                <h2 id="Note"></h2>
                <div class="contactform">
                    <form class="" role="form" method="POST" action=""  enctype="multipart/form-data">
                        <input type="hidden" name="consumer_id" id="consumer_id" value="57"">
                        <label>Name:</label>
                        <input type="text" name="name" id="name" value=""" class="form_input" required/>
                        <label>Wishes:</label>
                        <textarea name="comment_state" id="comment_state" class="form_textarea textarea" rows="" cols="" required></textarea>
                        <input type="submit" name="submit" class="form_submit submit_button" id="submit" value="Send" />
                        <label id="loader" style="display:none;"><img src="http://wd.halalindong.com/assets/templates/mobile/images/loader.gif" alt="Loading..." id="LoadingGraphic" /></label>
                    </form>
                </div>
                <ul class="features_list_detailed" id="comments" style="">
                    <div>
                        <li>
                            <div class="feat_small_details" >
                                <h4><a href="#">Hfh</a></h4>
                                <a href="#">Fhh</a>
                            </div>
                        </li>
                        <li>
                            <div class="feat_small_details" >
                                <h4><a href="#">Qw</a></h4>
                                <a href="#">Err</a>
                            </div>
                        </li>
                        <li>
                            <div class="feat_small_details" >
                                <h4><a href="#">E</a></h4>
                                <a href="#">E</a>
                            </div>
                        </li>
                        <li>
                            <div class="feat_small_details" >
                                <h4><a href="#">e</a></h4>
                                <a href="#">e</a>
                            </div>
                        </li>
                        <li>
                            <div class="feat_small_details" >
                                <h4><a href="#">Ria Rubiana Ardiwinata</a></h4>
                                <a href="#">Selamat menempuh hidup baru Mala & Reza..Semoga menjadi keluarga yang sakinah, mawadah & warahmah..Langgeng sampe kakek nenek & dikaruniai anak yang sholeh & sholehah...😘</a>
                            </div>
                        </li>
                    </div>
                    <input type="number" id="comment_start" value="0" style="display: none;">
                </ul>
                <a href="javascript:view_more();" class="button_full btyellow external submit_button" id="view_more">view more</a>
            </div>            
            <div class="page_single layout_fullwidth_padding" style="width: 100%;margin: 0px;padding-bottom: 32px;">
                <img src="{{ asset('wedding-6/images/headers/top/14.png')}}" alt="" width="100%" >
            </div>
        </div>
        @include('wedding-6.bottom')
    </div>
</div>

     