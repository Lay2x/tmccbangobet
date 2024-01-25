@extends('layouts.index')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ $title }}</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('kategori_garasi.store') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="merek_item">Merek Item</label>
                        <input type="text" class="form-control" placeholder="Masukkan merek item disini..." name="merek_item">
                        @error('merek_item')<small class="text-danger">{{$message}}</small>@enderror
                    </div>
                    <div class="form-group">
                        <label for="jenis_item">Jenis Item</label>
                        <input type="text" class="form-control" placeholder="Masukkan merek item disini..." name="jenis_item">
                        @error('jenis_item')<small class="text-danger">{{$message}}</small>@enderror
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