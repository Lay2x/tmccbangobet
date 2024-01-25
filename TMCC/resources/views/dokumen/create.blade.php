@extends('layouts.index')
@section('content')
<!-- Default box -->
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
        <form  method="POST" action="{{ route('dokumen.store') }}" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="">No. Dokumen</label>
                <input type="text" name="nomor_dokumen" class="form-control" placeholder="Silahkan masukkan nomor dokumen disini..." value="{{ old('nomor_dokumen') }}">
            </div>
            <div class="form-group">
                <label for="">Nama Dokumen</label>
                <input type="text" name="nama_dokumen" class="form-control" placeholder="Silahan masukkan nama dokumen disini" value="{{ old('nama_dokumen') }}">
            </div>
            <div class="form-group">
                <label for="">Kategori Dokumen</label>
                <select name="id_kategori_dokumen" id="dropdown">
                    <option value=""></option>
                    @foreach ($kategori_dokumen as $item)
                        <option value="{{ $item->id_kategori_dokumen }}">{{ $item->nama_kategori_dokumen }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">File Dokumen</label>
                <input type="file" name="file_dokumen" accept=".doc,.docx,.xml,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/pdf, application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint, text/plain" class="form-control" placeholder="Silahkan masukkan File disini...">
            </div>
        </div>   
    <div class="card-footer">
        <button class="btn btn-dark" type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection
