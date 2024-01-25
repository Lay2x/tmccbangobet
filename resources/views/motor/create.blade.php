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
        <form  method="POST" action="{{ route('motor.store') }}" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="">No. Kendaraan</label>
                <input type="text" name="nomor_plat" class="form-control" placeholder="Silahkan masukkan nomor Kendaraan disini..." value="{{ old('nomor_plat') }}">
            </div>
            <div class="form-group">
                <label for="">Nama Motor</label>
                <input type="text" name="nama_motor" class="form-control" placeholder="Silahan masukkan nama Motor disini" value="{{ old('nama_motor') }}">
            </div>
            <div class="form-group">
                <label for="">Pemilik</label>
                <select name="id" id="dropdown">
                    <option value=""></option>
                    @foreach ($user as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mb-2">
                            <label for="">Gambar <abbr title="" style="color: black">*</abbr> </label>
                            <input id="inputImg" type="file" accept="image/*" name="gambar_motor" class="form-control" required/>
                            <img class="d-none w-25 h-25 my-2" id="previewImg" src="#" alt="Preview image">
                        </div>
        </div>   
    <div class="card-footer">
        <button class="btn btn-dark" type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection
