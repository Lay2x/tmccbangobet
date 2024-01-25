<?php
$konf = DB::table('setting')->first();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>{{$konf->perusahaan_setting}}</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="{{ $konf->keyword_setting }}" name="keywords">
	<meta content="{{ $konf->deskripsi_setting }}" name="description">

	<!-- Favicon -->
	<link href="{{ asset('logo/'.$konf->logo_setting) }}" rel="icon">

	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">

	<!-- Icon Font Stylesheet -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

	<!-- Libraries Stylesheet -->
	<link href="{{ asset('web/lib/animate/animate.min.css')}}" rel="stylesheet">
	<link href="{{ asset('web/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
	<link href="{{ asset('web/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

	<!-- Customized Bootstrap Stylesheet -->
	<link href="{{ asset('web/css/bootstrap.min.css')}}" rel="stylesheet">

	<!-- Template Stylesheet -->
	<link href="{{ asset('web/css/style.css')}}" rel="stylesheet">
</head>
<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
	<div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
</div>
<!-- Spinner End -->


<!-- Topbar Start -->
<div class="container-fluid bg-dark px-0">
	<div class="row g-0 d-none d-lg-flex">
		<div class="col-lg-6 ps-5 text-start">
			<div class="h-100 d-inline-flex align-items-center text-light">
				<span>Follow Us:</span>
				<a class="btn btn-link text-light" href=""><i class="fab fa-facebook-f"></i></a>
				<a class="btn btn-link text-light" href=""><i class="fab fa-twitter"></i></a>
				<a class="btn btn-link text-light" href=""><i class="fab fa-instagram"></i></a>
			</div>
		</div>
	</div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
	<a href="index.html" class="navbar-brand d-flex align-items-center">
		<img src="{{ asset('logo/'.$konf->logo_setting)}}" style="width: 80px;">
		{{-- <h1 class="m-0">TMCC</h1> --}}
	</a>
	<button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarCollapse">
		<div class="navbar-nav ms-auto p-4 p-lg-0">
			<a href="{{ url('/') }}" class="nav-item nav-link active"><i class="fas fa-home"></i> Home</a>
			<a href="{{ url('tentang') }}" class="nav-item nav-link"><i class="fa fa-motorcycle"></i> Visi & Misi</a>
			<a href="{{ url('news') }}" class="nav-item nav-link"><i class="fa fa-info"></i> Berita</a>
			<div class="nav-item dropdown">
				<a href="#" class="nav-item nav-link" data-bs-toggle="dropdown"><i class="fas fa-file-alt"></i> Halaman</a>
				<div class="dropdown-menu bg-light m-0">
					<a href="{{ url('lihat-galeri') }}" class="dropdown-item">Galeri</a>
					<a href="{{ url('lsertifikat') }}" class="dropdown-item">Sertifikat</a>
					<a href="{{ url('lihat-team') }}" class="dropdown-item">Tim</a>
				</div>
			</div>
			<a href="{{ url('agenda') }}" class="text-premiere nav-item nav-link"><i class="fas fa-calendar-alt"></i> Kegiatan</a>
			<a href="{{ url('kontak') }}" class="nav-item nav-link"><i class="fa fa-address-book" aria-hidden="true"></i> Kontak</a>
			@if( Auth::user())
			<form method="POST" action="{{ route('logout') }}">
				@csrf
				<a href="{{ route('logout') }}" onclick="event.preventDefault();
              this.closest('form').submit();" class=" text-danger nav-item nav-link"><i class="fas fa-sign-out-alt"></i> Logout</a>
			</form>
			<a href="{{ route('dashboard.index') }}" class="nav-link"><i class="nav-icon fa fa-home"></i></a>
			@else
			<a href="{{ route('login') }}" class="text-success nav-item nav-link"><i class="fas fa-sign-in-alt"></i> Login</a>
			@endif
			
		</div>
	</div>
</nav>
<!-- Navbar End -->



@yield('isi')

<!-- Footer Start -->
<div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
	<div class="container py-5">
		<div class="row g-5">
			<div class="col-lg-4 col-md-6">
				<h5 class="text-white mb-4">Our Office</h5>
				<p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{ $konf->alamat_setting }}</p>
				<p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{ $konf->no_hp_setting }}</p>
				<p class="mb-2"><i class="fa fa-envelope me-3"></i>{{ $konf->email_setting }}</p>
				<div class="d-flex pt-3">
					<a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
					<a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
					<a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
					<a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-linkedin-in"></i></a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<h5 class="text-white mb-4">Quick Links</h5>
				<a class="btn btn-link" href="tentang">Tentang</a>
				<a class="btn btn-link" href="news">Berita</a>
				<a class="btn btn-link" href="agenda">Kegiatan</a>
				<a class="btn btn-link" href="lihat-galeri">Galeri</a>
				<a class="btn btn-link" href="kontak">Kontak</a>
			</div>
			{{-- <div class="col-lg-3 col-md-6">
					<h5 class="text-white mb-4">Business Hours</h5>
					<p class="mb-1">Monday - Friday</p>
					<h6 class="text-light">09:00 am - 07:00 pm</h6>
					<p class="mb-1">Saturday</p>
					<h6 class="text-light">09:00 am - 12:00 pm</h6>
					<p class="mb-1">Sunday</p>
					<h6 class="text-light">Closed</h6>
				</div> --}}
			<div class="col-lg-4 col-md-6">
				<h5 class="text-white mb-4">TMCC Indonesia</h5>
				<p>Telkom Group Motorcycle Community</p>
				<div class="position-relative w-100">
					<input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
					<button type="button" class="btn btn-secondary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid bg-secondary text-body copyright py-4">
	<div class="container">
		<div class="row">
			<div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
				&copy; Designed By <a href="https://spunix.net"> &nbsp;<img class="img-fluid" src="{{ asset('spunix.png')}}" alt="" style="max-width: 10%;"></a>
			</div>
			<div class="col-md-6 text-center text-md-end">
				<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->

				<a class="fw-semi-bold" href="#">{{ $konf->perusahaan_setting }}</a>, All Right Reserved.
			</div>
		</div>
	</div>
</div>
<!-- Copyright End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('web/lib/wow/wow.min.js')}}"></script>
<script src="{{ asset('web/lib/easing/easing.min.js')}}"></script>
<script src="{{ asset('web/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{ asset('web/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{ asset('web/lib/counterup/counterup.min.js')}}"></script>
<script src="{{ asset('web/lib/parallax/parallax.min.js')}}"></script>
<script src="{{ asset('web/lib/lightbox/js/lightbox.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{ asset('web/js/main.js')}}"></script>
</body>

</html>