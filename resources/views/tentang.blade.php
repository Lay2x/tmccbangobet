@extends('layouts.web')
@section('isi')
<!-- Features Start -->
<div class="container-xxl py-5">
	<div class="container">
		<div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
			<p class="section-title bg-white text-center text-primary px-3">Visi</p>
		</div><br>
		<div class="row gy-5 gx-4">
			@foreach ($visi as $item)
			<div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.1s">
				<div class="service-item d-flex h-100">
					<div class="service-img">
						<img class="img-fluid" src="{{ asset('file/visi/'.$item->icon_visi)}}" alt="" style="width: 100%;">
					</div>
					<div class="service-text p-5 pt-0">
						<div class="service-icon">
							<img class="img-fluid rounded-circle" src="{{ asset('file/visi/'.$item->icon_visi)}}" alt="" style="width: 140px; height: 140px;">
						</div>
						<h5 class="mb-1">{{ $item->judul_visi }}</h5>

						<p class="mb-4">{!! Str::limit($item->deskripsi_visi, 185, '...') !!} </p>

					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
<div class="container-xxl py-5">
	<div class="container">
		<div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
			<p class="section-title bg-white text-center text-primary px-3">Misi</p>
		</div><br>
		<div class="row gy-5 gx-4">
			@foreach ($misi as $item)
			<div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.1s">
				<div class="service-item d-flex h-100">
					<div class="service-img">
						<img class="img-fluid" src="{{ asset('file/misi/'.$item->icon_misi)}}" alt="" style="width: 100%;">
					</div>
					<div class="service-text p-5 pt-0">
						<div class="service-icon">
							<img class="img-fluid rounded-circle" src="{{ asset('file/misi/'.$item->icon_misi)}}" alt="" style="width: 140px; height: 140px;">
						</div>
						<h5 class="mb-1">{{ $item->judul_misi }}</h5>

						<p class="mb-4">{!! Str::limit($item->deskripsi_misi, 185, '...') !!} </p>

					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
<!-- Features End -->
@endsection