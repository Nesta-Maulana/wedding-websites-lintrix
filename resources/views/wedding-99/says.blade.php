<div data-page="about" class="page no-toolbar no-navbar hidden" id="says">
    <div class="page-content">
        <div id="pages_maincontent">     
            <div id="says_content" class="page_single layout_fullwidth_padding"> 
                <h2 class="page_title">Ucapan Do`a</h2>
                <h2 id="Note"></h2>
                <div class="contactform">
                    <form class="" role="form" method="POST" action="http://wd.halalindong.com/putriandre8/save_comment"  enctype="multipart/form-data">
                        <input type="hidden" name="consumer_id" id="consumer_id" value="1"">
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
                            <h4><a href="#">aa</a></h4>
                            <a href="#">halo</a>
                        </div>
                    </li>
                    <li>
                        <div class="feat_small_details" >
                            <h4><a href="#">Hfhh</a></h4>
                            <a href="#">Gg uhhj</a>
                        </div>
                    </li>
                    <li>
                        <div class="feat_small_details" >
                            <h4><a href="#">Ygjj</a></h4>
                            <a href="#">Tyuu</a>
                        </div>
                    </li>
                    <li>
                        <div class="feat_small_details" >
                            <h4><a href="#">Ooo</a></h4>
                            <a href="#">Ooo</a>
                        </div>
                    </li>
                    <li>
                        <div class="feat_small_details" >
                            <h4><a href="#">testing</a></h4>
                            <a href="#">congrats</a>
                        </div>
                    </li>
                    <input type="number" id="comment_start" value="0">
                </ul>
                <a href="javascript:view_more();" class="button_full btyellow external submit_button" id="view_more">View more</a>
            </div>
        </div>
        @include('wedding-99.bottom')
    </div>
</div>

      