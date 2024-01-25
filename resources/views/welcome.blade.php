<?php
$konf = DB::table('setting')->first();
?>
@extends('layouts.web')
@section('isi')

<!-- Carousel Start -->
<div class="container-fluid px-0 mb-5">
	<div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-inner">
			@foreach ($banner as $row)
			<div class="carousel-item active">
				<img class="w-100" src="{{ asset('file/galeri/'.$row->gambar_galeri)}}" alt="Image">
				<div class="carousel-caption">
					<div class="container">
						<div class="row justify-content-start">
							<div class="col-lg-8 text-start">
								<h1 class="text-white mb-5 animated slideInRight">{{ $row->nama_galeri }}</h1>
								<!-- <a href="" class="btn btn-secondary rounded-pill py-3 px-5 animated slideInRight">Login</a> -->
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
			<!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
			<!-- <span class="visually-hidden">Previous</span> -->
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
			<!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
			<!-- <span class="visually-hidden">Next</span> -->
		</button>
	</div>
</div>
<!-- Carousel End -->


<!-- Features Start -->
<div class="container-xxl py-5">
	<div class="container">
		<div class="row g-5 align-items-center">
			<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
				<p class="section-title bg-white text-start text-primary pe-3">Tentang</p>
				<h3 class="mb-4">Tentang TMCC Indonesia</h3>
				{!! $konf->tentang_setting !!}
			</div>
			<div class="col-lg-6">
				<div class="rounded overflow-hidden">
					<div class="row g-0">
						<div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
							<div class="text-center bg-dark py-5 px-4">
								<img class="img-fluid mb-4" src="{{ asset('web/img/region.png')}}" alt="" style="width: 120; height: 120;">
								<h1 class="display-6 text-white" data-toggle="counter-up">{{ $region }}</h1>
								<span class="fs-5 fw-semi-bold text-light">Jumlah Region</span>
							</div>
						</div>
						<div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
							<div class="text-center bg-danger py-5 px-4">
								<img class="img-fluid mb-4" src="{{ asset('web/img/chapter.png')}}" alt="" style="width: 120; height: 120;">
								<h1 class="display-6 text-white" data-toggle="counter-up">{{ $chapter }}</h1>
								<span class="fs-5 fw-semi-bold text-light">Jumlah Chapter</span>
							</div>
						</div>
						<div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
							<div class="text-center bg-danger py-5 px-4">
								<img class="img-fluid mb-4" src="{{ asset('web/img/community.png')}}" alt="" style="width: 120; height: 120;">
								<h1 class="display-6 text-white" data-toggle="counter-up">{{ $community }}</h1>
								<span class="fs-5 fw-semi-bold text-light">Jumlah Community</span>
							</div>
						</div>
						<div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
							<div class="text-center bg-dark py-5 px-4">
								<img class="img-fluid mb-4" src="{{ asset('web/img/people.png')}}" alt="" style="width: 120; height: 120;">
								<h1 class="display-6 text-white" data-toggle="counter-up">{{ $user }}</h1>
								<span class="fs-5 fw-semi-bold text-light">Jumlah Member</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Features End -->

<!-- Service Start -->

<!-- Contact End -->

@endsection