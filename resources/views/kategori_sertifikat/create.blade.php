@extends('layouts.index')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $title }}</h3>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Error!</strong> 
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{ route('kategori_sertifikat.store') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="">Nama Kategori Sertifikat</label>
                        <input type="text" class="form-control" placeholder="Masukkan nama kategori sertifikat disini..." name="nama_kategori_sertifikat" value="{{ old('nama_kategori_sertifikat') }}">
                    </div>
                    <div class="form-group">
                        <label for="">Poin</label>
                        <input type="text`" class="form-control" placeholder="Cth, 5, 20, 45 dst" name="poin" value="{{ old('poin') }}">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-dark">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection