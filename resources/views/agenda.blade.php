@extends('layouts.web')
@section('isi')
<!-- Service Start -->
<div class="container-xxl py-5">
	<div class="container">
		<div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
			<p class="section-title bg-white text-center text-primary px-3">Kegiatan</p>
			<h1 class="mb-5">Kegiatan Terbaru</h1>
		</div>
		<div class="row gy-5 gx-4">
			@foreach ($keg as $row)
			@if ($row->id_publish_kegiatan == 1)
			<div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.1s">
				<div class="service-item d-flex h-100">
					<div class="service-img">
						<img class="img-fluid" src="{{ asset('file/kegiatan/'.$row->gambar_kegiatan)}}" alt="" style="width: 100%;">
					</div>
					<div class="service-text p-5 pt-0">
						<div class="service-icon">
							<img class="img-fluid rounded-circle" src="{{ asset('file/kegiatan/'.$row->gambar_kegiatan)}}" alt="" style="width: 140px; height: 140px;">
						</div>
						<h5 class="mb-1">{{ $row->nama_kegiatan }}</h5>
						<p class="mb-3">{{ $row->nama_kategori_kegiatan }} / {{ $row->nama_sub_kategori_kegiatan }}</p>

						<p class="mb-4">{!! Str::limit($row->deskripsi_kegiatan, 130, '...') !!} <a href="{{ url('lihat-agenda/'.$row->slug_kegiatan) }}">Baca Selengkapnya</a> </p>

					</div>
				</div>
			</div>
			@elseif ($row->id_publish_kegiatan == 2)
			<td>
				@endif
			</td>
			@endforeach
		</div>
	</div>
</div>

<!-- Service End -->
@endsection