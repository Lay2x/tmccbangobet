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
                    <form action="{{ route('region.store') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="">Pilih Pusat</label>
                        <select name="id_pusat" id="dropdown">
                            <option value=""></option>
                            @foreach ($pusat as $item)
                                <option value="{{ $item->id_pusat }}">{{ $item->nama_pusat }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Nama region</label>
                        <input type="text" name="nama_region" class="form-control" value="{{ old('nama_region') }}">
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