@extends('layouts.web')
@section('isi')
<!-- Features Start -->
<div class="container-xxl py-5">
	<div class="container">
		<div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
			<p class="section-title bg-white text-center text-primary px-3">Sertifikat TMCC</p>
		</div><br>
		<div class="row gy-5 gx-4">
			@foreach ($sertifikat as $item)
			<div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.1s">
				<div class="service-item d-flex h-100">
					<div class="service-img">
						<img class="img-fluid" src="{{ asset('file/sertifikat/'.$item->gambar_sertifikat)}}" alt="" style="width: 100%;">
					</div>
					<div class="service-text p-5 pt-0">
						<div class="service-icon">
							<img class="img-fluid rounded-circle" src="{{ asset('file/sertifikat/'.$item->gambar_sertifikat)}}" alt="" style="width: 140px; height: 140px;">
						</div>
						<h5 class="mb-1">{{ $item->nama_kategori_sertifikat }} </h5>
						<p class="mb-1">Di Berikan Kepada <i>{{ $item->name }}</i> </p>
						<div>
							<a href="file/sertifikat/{{ $item->gambar_sertifikat }}"><button class="btn btn-success btn-xs" type="button"><i class="fas fa-eye"> View</i></button></a>
						</div>

					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>

@endsection