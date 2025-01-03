@extends('user.layout.layout')
@section('content')
<div class="container-xl">
	<div class="row">
		<div class="col-md-10 mx-auto">
			<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
				<!-- Carousel indicators -->
				<div class="carousel-indicators">
					@foreach ($media->chunk(3) as $index => $chunk)
					<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}" aria-current="{{ $index == 0 ? 'true' : '' }}" aria-label="Slide {{ $index + 1 }}"></button>
					@endforeach
				</div>
				<!-- Wrapper for carousel items -->
				<div class="carousel-inner">
					@foreach ($media->chunk(3) as $index => $chunk)
					<div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
						<div class="row">
							@foreach ($chunk as $foto)
							<div class="col-sm-4">
								<div class="thumb-wrapper">
									<div class="img-box">
										@if ($foto->foto)
										<img src="{{ asset('storage/media-img/' . $foto->foto) }}" class="img-fluid" >
										@else
										<img src="{{ asset('storage/media-img/img-default.png') }}" class="img-fluid">
										@endif
									</div>
									<div class="thumb-content">
										<h4 class="title-foto">{{ $foto->title }}</h4>
										<p class="media-desk">{{ $foto->keterangan_foto }}</p>
										<a href="#" class="btn btn-primary">More <i class="fa fa-angle-right"></i></a>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
					@endforeach
				</div>
				<!-- Carousel controls -->
				<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</div>
	</div>
</div>
@endsection
