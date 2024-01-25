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
                    <form action="{{ route('kategori_sertifikat.update', $kategori_sertifikat->id_kategori_sertifikat) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="">Nama Kategori Sertifikat</label>
                        <input type="text" class="form-control"  name="nama_kategori_sertifikat" value="{{ $kategori_sertifikat->nama_kategori_sertifikat }}">
                    </div>
                    <div class="form-group">
                        <label for="">Poin</label>
                        <input type="text" class="form-control"  name="poin" value="{{ $kategori_sertifikat->poin }}">
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