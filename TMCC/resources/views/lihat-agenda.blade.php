@extends('layouts.web')
@section('isi')
    {{-- listagenda --}}
    <div class="container-xxl pt-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium" style="color: #4b5320">Kegiatan / {{ $keg->nama_kategori_kegiatan }} / {{ $keg->nama_sub_kategori_kegiatan }}</p>
                <h1 class="display-5 mb-5">{{ $keg->nama_kegiatan }}</h1>
            </div>
            <div class="row g-4 mb-2">
                <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="project-item mb-5">
                        <div class="position-relative">
                            <img class="img-fluid"
                                style=" display: block; margin-left: auto; margin-right: auto; width: 100%;"
                                src="{{ asset('file/kegiatan/' . $keg->gambar_kegiatan) }}" alt="{{ $keg->nama_kegiatan }}">
                        </div>
                        <div class="p-4">
                            <a class="d-block h5" href="">{{ $keg->nama_kegiatan }}</a>
                            <span>{!! $keg->deskripsi_kegiatan !!}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- list --}}
      {{-- List --}}

      <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="mb-5">Rekomendasi Kegiatan Lainnya</h1>
            </div>
            <div class="row gy-5 gx-4">
                @foreach ($listagenda as $row)
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
                            <p class="mb-3">Kegiatan / {{ $row->nama_kategori_kegiatan }} / {{ $row->nama_sub_kategori_kegiatan }}</p>

                                <p class="mb-4">{!! Str::limit($row->deskripsi_kegiatan, 50, '...') !!} <a href="{{ url('lihat-agenda', $row->slug_kegiatan) }}">Baca Selengkapnya</a> </p>
                                <a class="btn btn-square rounded-circle" href="{{ url('lihat-agenda', $row->slug_kegiatan) }}"><i class="bi bi-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
