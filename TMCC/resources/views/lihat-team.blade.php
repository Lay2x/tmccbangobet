@extends('layouts.web')
@section('isi')
    <!-- Team Start -->
	<div class="container-xxl py-5">
		<div class="container">
			<div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
				<p class="section-title bg-white text-center text-primary px-3">Tim</p>
				<h1 class="mb-5">Daftar Pengurus TMCC</h1>
			</div>
			<div class="row g-4">
				@foreach ($tim as $row)
				<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
					<div class="team-item rounded p-4">
						<img class="img-fluid rounded mb-4" src="{{ asset('file/foto/'.$row->foto)}}" alt="">
						<h5>{{ $row->name }}</h5>
						<p class="text-primary">{{ $row->jabatan }}</p>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
	<!-- Team End -->

@endsection