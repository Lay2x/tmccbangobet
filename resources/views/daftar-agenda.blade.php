@extends('layouts.web')
@section('isi')
{{-- listagenda --}}

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 300px;">
            <p class="section-title bg-white text-center text-primary px-3">Data Pendaftaran Kegiatan</p>
        </div><br>
        <form action="{{ route('daftar_kegiatan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    
                    <div class="form-group mb-2">
                        <label for=""> Nama Kegiatan</label>
                        <select name="id_kegiatan" id="sub-dd" class="form-control">
                            <option value=""></option>
                            @foreach ($daftar_kegiatan as $row)
                            <option value="{{ $row->id_kegiatan }}">{{ $row->nama_kegiatan }} | Biaya Admin Rp. {{number_format($row->biaya_kegiatan)}} | Tanggal {{$row->tanggal_kegiatan}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Anggota</label>
                        <select name="id" id="dropdown">
                            <option value=""></option>
                            @foreach ($user as $item)
                            <option value="{{ $item->id }}"> {{$item->id}}. {{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-dark">Save</button>
                </form>
    </div>
</div>

@endsection