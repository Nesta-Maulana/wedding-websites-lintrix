<div id="fh5co-testimonial">
	<div class="container">
		<div class="row">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading" id="fh5co-heading">
					<span>Your wishes mean a lot for us</span>
					<h2>Your Wishes.</h2>
					<!-- <span>We'll be so happy to read your best wishes to us!</span> -->
				</div>
			</div>
			
			<!-- Form -->
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-xs12 col-md-offset-3 testimonial">
	                    {{ Form::open(['route'=>'send-wish.wedding-8','class'=>'form-transparent form-text-white form','enctype'=>'multipart/form-data','id'=>'wishes-form']) }}
        				{{ Form::hidden('customer_id', $id, ['id'=>'customer_id']) }} {{ Form::label('nama', 'Nama :',['']) }} 

		                <div class="row">
		                  <div class="col-sm-12">
		                    <div class="form-group">

	                    		{{ Form::text('nama','',["id"=>"nama","class"=>"form-control","required"=>"required"]) }}
		                    </div>
		                </div>  
			                <div class="col-sm-12">
			                    <div class="form-group">
			                    	{{ Form::label('wish', 'Ucapan :',['']) }} 
        							{{ Form::textarea('wish', '', ['class'=>'form-control required','rows'=>'5','cols'=>'','required'=>'required']) }} 
			                    </div>
			                </div>
			                <div class="col-sm-12">
			                    <div class="form-group mb-0 text-center">
    								{{ Form::submit("Kirim Ucapan", ['class'=>'btn btn-primary btn-wish anchor-style','id'=>'submit','name'=>'submit']) }}                       
			                    </div>
			                  </div>
			                </div>
        				{!! Form::close() !!}
					</div>
				</div>
			</div>

			<hr/>
			<div class="row">		
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading" id="fh5co-heading2">
						<h2>Friends Wishes</h2>
						<!-- <span>Best Wishes</span> -->
					</div>
				</div>
				<!-- Wishes -->
				<div class="row">
					<div class="col-md-12 animate-box">
	                    <div class="owl-carousel">
	                        @foreach ($wish as $doa) 
	                        <div class="half-filed-box effect-02 hide11 marbot30" style="margin: 0;">
	                            <div class="clearfix">
	                                <h2 class="couple-title" style="text-align: center;">
	                                    {{ $doa->nama }}
	                                    <small>{{ substr($doa->created_at, 0,10) }}</small>       
	                                </h2>
	                                <div class="clearfix accura-seperator accura-seperator-bottom-big"></div>
	                                <p style="text-align: center"> 
	                                    {{ $doa->wish }}
	                                </p>
	                            </div>
	                        </div>
	                        @endforeach
	                    </div>   
					</div>
				</div>
			</div>

		</div>
	</div>
</div>