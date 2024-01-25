@extends('layouts.web')
@section('isi')
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
								<div class="text-center bg-primary py-5 px-4">
									<img class="img-fluid mb-4" src="{{ asset('web/img/region.png')}}" alt="" style="64px; height: 64px;">
									<h1 class="display-6 text-white" data-toggle="counter-up">{{ $region }}</h1>
									<span class="fs-5 fw-semi-bold text-secondary">Jumlah Region</span>
								</div>
							</div>
							<div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
								<div class="text-center bg-secondary py-5 px-4">
									<img class="img-fluid mb-4" src="{{ asset('web/img/chapter.png')}}" alt="" style="width: 64px; height: 64px;">
									<h1 class="display-6" data-toggle="counter-up">{{ $chapter }}</h1>
									<span class="fs-5 fw-semi-bold text-primary">Jumlah Chapter</span>
								</div>
							</div>
							<div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
								<div class="text-center bg-secondary py-5 px-4">
									<img class="img-fluid mb-4" src="{{ asset('web/img/community.png')}}" alt="" style="width: 64px; height: 64px;">
									<h1 class="display-6" data-toggle="counter-up">{{ $community }}</h1>
									<span class="fs-5 fw-semi-bold text-primary">Jumlah Community</span>
								</div>
							</div>
							<div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
								<div class="text-center bg-primary py-5 px-4">
									<img class="img-fluid mb-4" src="{{ asset('web/img/people.png')}}" alt="" style="width: 64px; height: 64px;">
									<h1 class="display-6 text-white" data-toggle="counter-up">{{ $user }}</h1>
									<span class="fs-5 fw-semi-bold text-secondary">Jumlah Anggota</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Features End -->
@endsection