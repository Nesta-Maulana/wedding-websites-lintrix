<div data-page="wish" class="page no-toolbar no-navbar hidden" id="wish">
	<div class="page-content">
		<div id="pages_maincontent">
			<div class="page_single layout_fullwidth_padding" style="width: 100%;margin: 0px;text-align: center;" > 
				<img src="{{ asset('wedding-1/images/headers/top/7.png') }}" alt="" width="100%" style="display: inline-block;" >
			</div>
			<div id="says_content" class="page_single layout_fullwidth_padding">
				<h2 class="page_title"> 
					<strong>Ucapan Do`a</strong>
				</h2>
				<h2 id="Note"></h2>
				<div class="contactform">
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
				</div> {{-- Wish Start --}}
				<ul class="features_list_detailed" id="wish" style=""> 
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
					{{-- <input type="number" id="comment_start" value="0" style="display: none;"> --}}
				</ul> {{-- <a href="javascript:view_more();" class="button_full btyellow external submit_button" id="view_more">view more</a> --}}
			</div>
			<div class="page_single layout_fullwidth_padding" style="width: 100%;margin: 0px;padding-bottom: 32px;"> 
				<img src="{{ asset('wedding-1/images/headers/bottom/7.png') }}" alt="" width="100%" >
			</div>
		</div> 
		@include('wedding-1.bottom')
	</div>
</div>