<div data-page="wish" class="page no-toolbar no-navbar hidden" id="says">
    <div class="page-content">
        <div id="pages_maincontent"> 
            <div class="page_single layout_fullwidth_padding" style="width: 100%;margin: 0px;text-align: right;" >
                <img src="http://wd.halalindong.com/assets/templates/mobile/images/headers/top/11.png" alt="" width="50%" style="display: inline-block;"  >
            </div>                  
            <div id="says_content" class="page_single layout_fullwidth_padding">
                <h2 class="page_title">Ucapan Do`a</h2>
                <h2 id="Note"></h2>
                <div class="contactform"> 
                    {{ Form::open(['route'=>'send-wish.wedding-1','role'=>'form','enctype'=>'multipart/form-data']) }} 
                    {{ Form::hidden('customer_id', $id, ['id'=>'customer_id']) }} {{ Form::label('nama', 'Nama :',['']) }} 
                    {{ Form::text('nama', '',["id"=>"nama","class"=>"form_input","required"=>"required"]) }} 
                    {{ Form::label('wish', 'Ucapan :',['']) }} 
                    {{ Form::textarea('wish', '', ['class'=>'form_textarea textarea','rows'=>'','cols'=>'','required'=>'required']) }} 
                    {{ Form::submit("Kirim Ucapan", ['class'=>'form_submit submit_button','id'=>'submit','name'=>'submit']) }} 
                    <label id="loader" style="display:none;">
                        <img src="{{ asset('wedding-1/images/loader.gif') }}" alt="Loading..." id="LoadingGraphic" />
                    </label>
                    {!! Form::close() !!}
                </div>
            </div>
            <div id="says_comment" class="page_single layout_fullwidth_padding">  
                <ul class="features_list_detailed" id="comments">   
                    @foreach ($wish as $doa)
                    <div>
                        <li>
                            <div class="feat_small_details" >
                                <h4> 
                                    {{ $doa->nama }}
                                </h4> 
                                {{ $doa->wish }}<br> 
                                <span style="font-size: 10px;color: #aaaaaa;">
                                    {{ substr($doa->created_at, 0,10) }}
                                </span>
                            </div>
                        </li>
                    </div> 
                    @endforeach 
                </ul>
            {{-- <a href="javascript:view_more();" class="button_full btyellow external submit_button" id="view_more">view more</a> --}}
        </div>
        <div class="page_single layout_fullwidth_padding" style="width: 100%;margin: 0px;">
            <img src="{{ asset('wedding-3/images/headers/bottom/11-3.png') }}" alt="" width="50%" >
        </div>      
    </div>
    @include('wedding-3.bottom')
</div>
</div>