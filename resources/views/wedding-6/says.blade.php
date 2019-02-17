<div data-page="about" class="page no-toolbar no-navbar hidden" id="says">
    <div class="page-content">
        <div id="pages_maincontent">
            <div id="says_content" class="page_single layout_fullwidth_padding">
                <h2 class="page_title">Ucapan Do`a</h2> 
                <h2 id="Note"></h2>
                <div class="contactform"> 
                    {{ Form::open(['route'=>'send-wish.wedding-5','role'=>'form','enctype'=>'multipart/form-data']) }} 
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
                   
            <div id="says_content" class="page_single layout_fullwidth_padding">  
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
            </div>
        </div>
        @include('wedding-6.bottom')
    </div>
</div>

     