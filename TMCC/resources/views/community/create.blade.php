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
                    <form action="{{ route('community.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="form-group mb-2">
                        <label for="">Pusat</label>
                        <select name="id_pusat" id="pusat-dd" class="form-control">
                            <option value="">Pilih Pusat</option>
                            @foreach ($pusat as $row)
                            <option value="{{ $row->id_pusat }}">{{ $row->nama_pusat }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Pilih Region</label>
                        <select name="id_region" id="region-dd" class="form-control">
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Pilih Chapter</label>
                        <select name="id_chapter" id="chapter-dd" class="form-control">
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Nama Community</label>
                        <input type="text" name="nama_community" class="form-control" placeholder="Masukkan nama community" value="{{ old('nama_community') }}">
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-dark"><i class="fas fa-save fa-pulse"> </i> Save</button>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection
