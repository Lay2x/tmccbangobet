@extends('layouts.web')
@section('isi')
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