<!--Gallery-->
<div id="fh5co-gallery" class="fh5co-section-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
				<span>Our Memories</span>
				<h2>Gallery</h2>
			</div>
		</div>
		<div class="row row-bottom-padded-md">
			<div class="col-md-12">
                
            <ul id="fh5co-gallery-list">
                @for ($i = 1; $i<=12 ; $i++) 
				<li class="one-third animate-box animated-slow" data-animate-effect="fadeIn">
					<a class="gallery-img image-popup image-popup" href="{{ asset('images/couples/'.$i.'.jpg') }}">
					</a>
				</li>
                @endfor
			</ul>
			</div>
		</div>
	</div>
</div>