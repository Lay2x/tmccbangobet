@extends('layouts.web')
@section('isi')
{{-- listagenda --}}
<div class="container-xxl pt-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-medium" style="color: #4b5320">Kegiatan / {{ $keg->nama_kategori_kegiatan }} / {{ $keg->nama_sub_kategori_kegiatan }}</p>
            <h1 class="display-5 mb-5">{{ $keg->nama_kegiatan }}</h1>
        </div>
        <!--  -->
        @if ($message = Session::get('Sukses'))
        <div class="col-md 6 alert alert-success">
            <h5 class="text-center">{{ $message }}</h5>
        </div>
        @endif
        <!--  -->
        <div class="row g-4 mb-2">
            <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" style=" display: block; margin-left: auto; margin-right: auto; width: 100%;" src="{{ asset('file/kegiatan/' . $keg->gambar_kegiatan) }}" alt="{{ $keg->nama_kegiatan }}">
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="">{{ $keg->nama_kegiatan }}</a>
                        <span> <i class="fa fa-calendar"></i> {{$keg->tanggal_kegiatan}}</i> <i class="fa fa-clock"></i> {{$keg->jam_kegiatan}}</span>
                        <br><br>
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
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 300px;">
            <p class="section-title bg-white text-center text-primary px-3">Data Pendaftaran Anggota </p>
        </div><br>
        <div class="row gy-5 gx-4">
            <!DOCTYPE html>
            <html>

            <head>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <style>
                    table {
                        border-collapse: collapse;
                        border-spacing: 0;
                        width: 100%;
                        border: 1px solid #ddd;
                    }

                    th,
                    td {
                        text-align: left;
                        padding: 8px;
                    }

                    tr:nth-child(even) {
                        background-color: #f2f2f2
                    }
                </style>
            </head>

            <body>

                <div style="overflow-x:auto;">
                    <table>
                        <tr>
                            <th><center>Nama Anggota</th>
                            <th><center>Nama Kegiatan</th>
                            <th><center>Tanggal</th>
                            <th><center>Keterangan</th>
                            <th><center></th>
                        </tr>
                        <tr>
                            @foreach ($daftar_kegiatan as $row)
                            <td>
                                <center>{{ $row->name }}
                            </td>
                            <td>
                                <center>{{ $row->nama_kegiatan }}
                            </td>
                            <td>
                                <center>{{ $row->tanggal_kegiatan }}
                            </td>
                            <td>@if ($row->biaya_kegiatan == 0)
                                <b>
                                    <center>
                                        <h5><i>Tanpa Biaya Administrasi</i></h5>
                                    </center>
                                    @elseif ($row->biaya_kegiatan > 1)
                                    <b>
                                        <center>
                                            <i>Biaya Administrasi Rp.{{ number_format($row->biaya_kegiatan) }}</i>
                                        </center>

                                        @endif
                            </td>
                            @if(Auth::check())
                            @if(Auth::user()->id == $row->id)
                            <td>
                                <form action="{{ route('daftar_kegiatan.destroy', $row->id_daftar_kegiatan) }}" method="POST" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" value="Button" title="Delete" class="btn btn-danger center-block"><i class="fas fa-window-close"> Batal</i></button>
                                </form>
                            </td>
                            @endif
                            @endif
                        </tr>
                        @endforeach
                    </table>
                </div>

            </body>

            </html>


        </div>
    </div>
</div>

@if($keg->id_status_kegiatan == 1)
<div class="row g-0">
    <div class="col-md-12 text-center">

        <form action="{{ route('daftar_kegiatan.store') }}" method="POST">
            @csrf

            <select name="id_kegiatan" id="" hidden>
                <option value="{{ $list_kegiatan->id_kegiatan }}">{{$list_kegiatan->nama_kegiatan}}</option>
            </select>
            @error('id_kegiatan') <p>{{$message}}</p>@enderror
            <button type="submit" class="btn btn-success">Daftar Kegiatan</button>
            <!-- <p><i> Silahkan Login Terlebih dahulu </i></p> -->
        </form>
    </div>
</div>
@elseif($keg->id_status_kegiatan == 2)
<div class="row g-0">
    <div class="col-md-12 text-center text-danger">
        <p><b><i>" Pendaftaran telah ditutup "</i></b></p>
    </div>
</div>
@endif




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
@endsection