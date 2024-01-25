@extends('layouts.web')
@section('isi')
    <!-- Product Start -->
	<div class="container-xxl py-5">
		<div class="container">
			<div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
				<p class="section-title bg-white text-center text-primary px-3">Galeri</p>
				<h1 class="mb-5">Galeri TMCC Indonesia</h1>
			</div>
			<div class="row gx-4">
				@foreach ($galeri as $item)
				<div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
					<div class="product-item">
						<div class="position-relative" style="max-width: 100%;">
							<img class="img-fluid" src="{{ asset('file/galeri/'.$item->gambar_galeri)}}" alt="" style="">
						</div>
						<div class="text-center p-4">
							<span class="d-block h5">{{ $item->nama_galeri }}</span>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
	<!-- Product End -->
@endsection