<div id="couple" class="item">
    <img src="{{asset('wedding-2/img/subpage-images/2.jpg')}}" alt="The Wedding" class="fullBg">
    <div class="content">
        <div class="content_overlay_fullwidth content_overlay_bgcolor85"></div>
        <div class="content_inner content_inner_fullwidth">
            <div class="row contentscroll">
                <div class="container">
                    <div class="col-md-12">
                        <!-- Couple -->
                        <div class="clearfix">
                            <h1 class="text-center">
                                <span class="heading-seperator hide11 h1-heading-effect">
                                    <span class="heading-left-seperator"></span>
                                    The Couple
                                    <span class="heading-right-seperator"></span>                                
                                </span>                            
                            </h1>
                            <div class="col-md-12 gallery">
                                <div class="row">
                                    <div class="clearfix">
                                        <div class="clearfix text-center">
                                            <div class="col-md-5 col-sm-5">	
                                                <div class="half-filed-box effect-01 hide11 marbot30">
                                                    <div class="grid center-block thumbnail big-thumbnail thumbnail-img-border">
                                                        <figure>
                                                            <img src="{{asset('images/couples/pria/6.jpg')}}"  class="img-responsive img-circle img-scale-none" alt="" />
                                                            <figcaption>
                                                                <h4>Fajar Putra Maulana</h4>
                                                            </figcaption>
                                                        </figure>                                                    
                                                    </div>
                                                    <div class="clearfix">
                                                        <h2 class="couple-title">
                                                            <small>
                                                                - Mempelai Pria -
                                                            </small> 
                                                                Fajar Putra Maulana
                                                        </h2>
                                                        <p>
                                                	       Putra Pertama dari pasangan <br>Bpk. Ferdiansyah & Ibu Tari Ananda.

                                                        </p>
                                                        <div class="clearfix">
                                            	           <img src="{{asset('wedding-2/img/stev-sign.png')}}" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-2 col-sm-2">
                                                <div class="clearfix">
                                                    <div class="couple-heart hide11 heart">
                                                        <i class="fa fa-heart-o left-heart"></i>
                                                        <i class="fa fa-heart-o right-heart"></i> 
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-5 col-sm-5">
                                            	<div class="half-filed-box effect-02 hide11 marbot30">
                                                    <div class="grid center-block thumbnail big-thumbnail thumbnail-img-border">
                                                	   <figure>
                                                            <img src="{{asset('images/couples/wanita/6.jpg')}}"  class="img-responsive img-circle img-scale-none" alt="" />
                                                            <figcaption>
                                                                <h4>Senja Putri Alfiah </h4>
                                                            </figcaption>
													   </figure>   
                                                    </div>
                                                    <div class="clearfix">
                                                        <h2 class="couple-title">
                                                            <small> - Mempelai Wanita -</small>
                                                            Senja Putri Alfiah                                                
                                                        </h2>
                                                        <p> 
                                                            Putri ketiga dari pasangan <br> Bpk. Muhammad Maulana & Ibu Natasha Alfiah
                                                        </p>
                                                        <div class="clearfix">
                                                            <img src="{{asset('wedding-2/img/melissa-sign.png')}}" alt=""> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  Couple End-->
                        
                        <!-- Seperator -->
                        	<div class="clearfix accura-seperator accura-seperator-bottom-big"></div>

              			<!-- Seperator -->
                        
                        <!-- Count Down -->
                        <div class="clearfix">
                            <h1 class="text-center">
                                <span class="heading-seperator hide11 h1-heading-effect">
                                  <span class="heading-left-seperator"></span>Friend Wish
                                  <span class="heading-right-seperator"></span>                                
                                </span>                            
                            </h1>
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
                        <div class="clearfix accura-seperator accura-seperator-bottom-big"></div>
                        <div>
                            <h1 style="text-align: center;">
                                <span class="heading-seperator hide11 h1-heading-effect">
                                   <span class="heading-left-seperator"></span> Send Your Wish  <span class="heading-right-seperator"></span>                                
                                </span>                            
                            </h1>
                            <p class="lead hide11 fadeInRight-trans1" style="text-align: center;">
                                If you received an invitation, we’d like to plan in advance.<br/> <span class="bold">Kindly reply</span>, for any question please  <span class="bold">fill the form </span>.                        
                            </p>
                            {{ Form::open(['route'=>'send-wish.wedding-2','id'=>'reservation_form','role'=>'form','class'=>'reserve_form hide11 fadeInRight-trans1','enctype'=>'multipart/form-data']) }} 
                            
                            {{ Form::hidden('customer_id', $id, ['id'=>'customer_id']) }} {{ Form::label('nama', 'Nama :',['']) }} 
                            <div style="width: 100%">
                                <div class="border-box clr" style="width: 100%">
                                    {{ Form::text('nama', '',["id"=>"nama","class"=>"required","required"=>"required", "style"=>"width:100%"]) }} 
                                </div>  
                            </div>
                            
                            <div class="marbot30" style="width: 100%">
                                <div class="border-box clr" style="width: 100%">
                                    {{ Form::textarea('wish', '',['class'=>'required','rows'=>'','cols'=>'','required'=>'required','style'=>'width:100%']) }} 
                                </div>  
                            </div>
                            <div>
                                {{ Form::submit("Kirim Ucapan", ['class'=>'button btn btn-default btn-default-reverse arrow','id'=>'submit','name'=>'submit']) }}
                            </div>
                            {{ Form::close() }}
                            <div id="post_message" class="post_message"></div>
                        </div>
                        <!--  Count Down End -->
                   </div>
                </div>
            </div>
        </div>
	</div>
</div>