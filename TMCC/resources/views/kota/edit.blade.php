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
                    <form action="{{ route('kota.update', $kota->id_kota) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="">Pilih Provinsi</label>
                        <select name="id_provinsi" id="dropdown">
                            <option value=""></option>
                            @foreach ($provinsi as $item)
                                <option @if ($kota->id_provinsi == $item->id_provinsi) selected @endif value="{{ $item->id_provinsi }}">{{ $item->nama_provinsi }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Kota</label>
                        <input type="text" name="nama_kota" class="form-control" value="{{ $kota->nama_kota }}">
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