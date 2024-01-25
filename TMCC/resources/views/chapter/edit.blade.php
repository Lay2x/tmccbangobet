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
                    <form action="{{ route('chapter.update', $chapter->id_chapter) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="">Pilih Region</label>
                        <select name="id_region" id="dropdown">
                            <option value=""></option>
                            @foreach ($region as $item)
                                <option @if ($chapter->id_region == $item->id_region) selected @endif value="{{ $item->id_region }}">{{ $item->nama_region }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Nama chapter</label>
                        <input type="text" name="nama_chapter" class="form-control" value="{{ $chapter->nama_chapter }}">
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