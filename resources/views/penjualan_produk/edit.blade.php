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
                    <form action="{{ route('penjualan_produk.update', $penjualan_produk->id_penjualan_produk) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="">Tanggal Penjualan</label>
                        <input type="date" name="tanggal_penjualan_produk" class="form-control" placeholder="Masukkan tanggal penjualan disini..." value="{{ $penjualan_produk->tanggal_penjualan_produk }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Anggota</label>
                        <select name="id_user" id="dropdown" class="form-control">
                            <option value=""></option>
                            @foreach ($anggota as $row)
                                <option @if ($penjualan_produk->id_user == $row->id) selected @endif value="{{ $row->id }}">{{ $row->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Produk</label>
                        <select name="id_produk" id="dropdown2" class="form-control">
                            <option value=""></option>
                            @foreach ($produk as $row)
                                <option @if ($penjualan_produk->id_penjualan_produk == $row->id_produk) selected @endif value="{{ $row->id_produk }}">{{ $row->nama_produk }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Kategori Produk</label>
                        <select name="id_kategori_produk" id="dropdown3" class="form-control">
                            <option value=""></option>
                            @foreach ($kategori_produk as $row)
                                <option @if ($penjualan_produk->id_kategori_produk == $row->id_kategori_produk) selected @endif value="{{ $row->id_kategori_produk }}">{{ $row->nama_kategori_produk }}</option>
                            @endforeach
                        </select>
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