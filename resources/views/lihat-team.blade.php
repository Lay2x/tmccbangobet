@extends('layouts.web')
@section('isi')
<!-- Team Start -->
<div class="container-xxl py-5">
	<div class="container">
		<div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
			<p class="section-title bg-white text-center text-primary px-3">Team</p>
			<h1 class="mb-5">Daftar Pengurus TMCC</h1>
		</div>
		<div class="row gy-5 gx-4">
			@foreach ($tim as $row)
			<div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.1s">
				<div class="service-item d-flex h-100">
					<div class="service-img">
						<img class="img-fluid" src="{{ asset('file/foto/'.$row->foto)}}" alt="" style="width: 100%;">
					</div>
					<div class="service-text p-5 pt-0">
						<div class="service-icon">
							<img class="img-fluid rounded-circle" src="{{ asset('file/foto/'.$row->foto)}}" alt="" style="width: 140px; height: 140px;">
						</div>
						<h5 class="mb-1">{{ $row->name }} </h5>
						<p class="mb-1">{{ $row->jabatan }} </p>
						
						<div>
							<!-- <td>
								<a href="file/foto/{{ $row->foto }}"><button class="btn btn-danger btn-xs" type="button"><i class="fas fa-eye"> View</i></button></a>
							</td> -->
							<p class="mb-1">{{ $row->nama_region }} </p>
						</div>

					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
<!-- Team End -->

@endsection