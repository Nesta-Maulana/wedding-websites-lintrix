<div data-page="wish" class="page no-toolbar no-navbar hidden" id="wish">
    <div class="page-content">
        <div id="pages_maincontent">
            <div class="page_single layout_fullwidth_padding" style="width: 100%;margin: 0px;text-align: center;" >
                <img src="{{ asset('wedding-1/images/headers/top/7.png') }}" alt="" width="100%" style="display: inline-block;"  >
            </div>
            <div id="says_content" class="page_single layout_fullwidth_padding">
                <h2 class="page_title">
                    <strong>Ucapan Do`a</strong>
                </h2>
                <h2 id="Note"></h2>
                <div class="contactform">
                    <div class="contactform">
                        <form class="" role="form" method="POST" action="http://wd.halalindong.com/putriandre7/save_comment"  enctype="multipart/form-data">
                            <input type="hidden" name="consumer_id" id="consumer_id" value="1"">
                            <label>Nama:</label>
                            <input type="text" name="name" id="name" value=""" class="form_input" required/>
                            <label>Ucapan:</label>
                            <textarea name="comment_state" id="comment_state" class="form_textarea textarea" rows="" cols="" required></textarea>
                            <input type="submit" name="submit" class="form_submit submit_button" id="submit" value="Kirim" />
                            <label id="loader" style="display:none;"><img src="{{ asset('wedding-1/images/loader.gif') }}" alt="Loading..." id="LoadingGraphic" /></label>
                      </form>
                    </div>
                </div>
            {{-- Wish Start --}}
                <ul class="features_list_detailed" id="comments" style="">
                    <div>
                        <li>
                            <div class="feat_small_details" >
                                <h4>
                                    <a href="says.htm#">Nesta Maulana</a>
                                </h4>
                                <a href="says.htm#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia nisi amet, dolores vitae quasi, libero necessitatibus aspernatur asperiores enim voluptatibus repellat. Odit maxime quas tempora incidunt iusto, quasi accusamus in!</a><br>
                                <span style="font-size: 10px;color: #aaaaaa;">22 Januari 2018</span>
                            </div>
                        </li>

                        <li>
                            <div class="feat_small_details" >
                                <h4>
                                    <a href="says.htm#">Nesta Maulana</a>
                                </h4>
                                <a href="says.htm#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia nisi amet, dolores vitae quasi, libero necessitatibus aspernatur asperiores enim voluptatibus repellat. Odit maxime quas tempora incidunt iusto, quasi accusamus in!</a><br>
                                <span style="font-size: 10px;color: #aaaaaa;">22 Januari 2018</span>
                            </div>
                        </li>

                        <li>
                            <div class="feat_small_details" >
                                <h4>
                                    <a href="says.htm#">Nesta Maulana</a>
                                </h4>
                                <a href="says.htm#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia nisi amet, dolores vitae quasi, libero necessitatibus aspernatur asperiores enim voluptatibus repellat. Odit maxime quas tempora incidunt iusto, quasi accusamus in!</a><br>
                                <span style="font-size: 10px;color: #aaaaaa;">22 Januari 2018</span>
                            </div>
                        </li>

                        <li>
                            <div class="feat_small_details" >
                                <h4>
                                    <a href="says.htm#">Nesta Maulana</a>
                                </h4>
                                <a href="says.htm#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia nisi amet, dolores vitae quasi, libero necessitatibus aspernatur asperiores enim voluptatibus repellat. Odit maxime quas tempora incidunt iusto, quasi accusamus in!</a><br>
                                <span style="font-size: 10px;color: #aaaaaa;">22 Januari 2018</span>
                            </div>
                        </li>
                    </div>
                    <input type="number" id="comment_start" value="0" style="display: none;">
                </ul>
                {{-- <a href="javascript:view_more();" class="button_full btyellow external submit_button" id="view_more">view more</a> --}}
            </div>
        
            <div class="page_single layout_fullwidth_padding" style="width: 100%;margin: 0px;padding-bottom: 32px;">
                <img src="{{ asset('wedding-1/images/headers/bottom/7.png') }}" alt="" width="100%" >
            </div>      
        </div>
        @include('wedding-1.bottom')  
    </div>
</div>