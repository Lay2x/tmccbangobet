@extends('layouts.index')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ $title }}</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('kategori_garasi.update', $data[0]->id_garasi) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="merek_item">Merek Item</label>
                        <input type="text" class="form-control" placeholder="Masukkan Merek Item disini..." name="merek_item" value="{{ $data[0]->merek_item }}">
                    </div>
                    <div class="form-group">
                        <label for="jenis_item">Jenis Item</label>
                        <input type="text" class="form-control" placeholder="Masukkan Jenis Item disini..." name="jenis_item" value="{{ $data[0]->jenis_item }}">
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