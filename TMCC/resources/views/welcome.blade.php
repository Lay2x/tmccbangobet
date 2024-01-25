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

	<!-- Service Start -->
	<div class="container-xxl py-5">
		<div class="container">
			<div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
				<p class="section-title bg-white text-center text-primary px-3">Berita</p>
				<h1 class="mb-5">Berita Terbaru</h1>
			</div>
			<div class="row gy-5 gx-4">
				@foreach ($berita as $row)
				<div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.1s">
					<div class="service-item d-flex h-100">
						<div class="service-img">
							<img class="img-fluid" src="{{ asset('file/berita/'.$row->gambar_berita)}}" alt="" style="width: 100%;">
						</div>
						<div class="service-text p-5 pt-0">
							<div class="service-icon">
								<img class="img-fluid rounded-circle" src="{{ asset('file/berita/'.$row->gambar_berita)}}" alt="" style="width: 140px; height: 140px;">
							</div>
							<h5 class="mb-1">{{ $row->judul_berita }}</h5>
							<p class="mb-3">{{ $row->nama_kategori_berita }}</p>

								<p class="mb-4">{!! Str::limit($row->isi_berita, 130, '...') !!} <a href="#">Baca Selengkapnya</a> </p>
								<a class="btn btn-square rounded-circle" href=""><i class="bi bi-chevron-double-right"></i></a>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
	<!-- Service End -->

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

	
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="mb-5">Kontak Kami</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="mb-4">Form Pertanyaan</h3>
                    <p class="mb-4">TJika anda ingin bertanya ataupun berkomunikasi langsung dengan tim Komunitas Pintu Kota Kita, anda bisa mengisi form dibawah ini.</p>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 250px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-secondary rounded-pill py-3 px-5" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h3 class="mb-4">Detail Kontak</h3>
                    <div class="d-flex border-bottom pb-3 mb-3">
                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle">
                            <i class="fa fa-map-marker-alt text-body"></i>
                        </div>
                        <div class="ms-3">
                            <h6>Lokasi Kami</h6>
                            <span>{{ $konf->alamat_setting }}</span>
                        </div>
                    </div>
                    <div class="d-flex border-bottom pb-3 mb-3">
                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle">
                            <i class="fa fa-phone-alt text-body"></i>
                        </div>
                        <div class="ms-3">
                            <h6>Telp</h6>
                            <span>{{ $konf->no_hp_setting }}</span>
                        </div>
                    </div>
                    <div class="d-flex border-bottom-0 pb-3 mb-3">
                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle">
                            <i class="fa fa-envelope text-body"></i>
                        </div>
                        <div class="ms-3">
                            <h6>Email</h6>
                            <span>{{ $konf->email_setting }}</span>
                        </div>
                    </div>

                    <iframe class="w-100 rounded"
                        src="{{ $konf->maps_setting }}"
                        frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

@endsection
