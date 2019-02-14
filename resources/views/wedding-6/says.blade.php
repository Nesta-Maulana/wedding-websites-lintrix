<div data-page="about" class="page no-toolbar no-navbar hidden" id="says">
    <div class="page-content">
        <div id="pages_maincontent">
          
            <div class="page_single layout_fullwidth_padding" style="margin-top: 20px;" >
                <img src="{{ asset('wedding-6/images/headers/top/3.png')}}" alt="" width="40%" style="text-align: center;display: block;margin: 0 auto;">
            </div>      
            <div id="says_content" class="page_single layout_fullwidth_padding">
                <h2 class="page_title">Ucapan Do`a</h2> 
                <h2 id="Note"></h2>
                <div class="contactform">
                <form class="" role="form" method="POST" action=""  enctype="multipart/form-data">
                    <input type="hidden" name="consumer_id" id="consumer_id" value="1">
                    <label>Nama:</label>
                    <input type="text" name="name" id="name" value="" class="form_input" required/>
                    <label>Ucapan:</label>
                    <textarea name="comment_state" id="comment_state" class="form_textarea textarea" rows="" cols="" required></textarea>
                    <input type="submit" name="submit" class="form_submit submit_button" id="submit" value="Kirim" />
                
                    <label id="loader" style="display:none;"><img src="{{ asset('wedding-6/images/loader.gif')}}" alt="Loading..." id="LoadingGraphic" /></label>
                </form>
                </div>
            </div>
          
            <div id="says_content" class="page_single layout_fullwidth_padding">  
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
                <a href="javascript:view_more();" class="button_full btyellow external submit_button" id="view_more">view more</a>
            </div>
            <div class="page_single layout_fullwidth_padding">
                <img src="{{ asset('wedding-6/images/headers/bottom/3.png')}}" alt="" width="50%" style="text-align: center;display: block;margin: 0 auto;">
            </div>
        </div>
        @include('wedding-6.bottom')
    </div>
</div>

     