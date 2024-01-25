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
                    <form action="{{ route('kredit.update', $kredit->id_kredit) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-2">
                        <label for="">Nominal</label>
                        <input type="number" class="form-control" placeholder="Masukkan nominal disini..." name="nominal_kredit" value="{{ $kredit->nominal_kredit }}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Tanggal Keluar</label>
                        <input type="datetime-local" name="tanggal_kredit" class="form-control" value="{{ $kredit->tanggal_kredit }}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Keterangan</label>
                        <textarea name="keterangan_kredit" class="form-control" rows="5">{{ $kredit->keterangan_kredit }}</textarea>
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