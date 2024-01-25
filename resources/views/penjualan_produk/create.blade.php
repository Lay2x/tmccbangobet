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
                <form action="{{ route('penjualan_produk.store') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="form-group mb-3">
                        <label for="">Tanggal Penjualan</label>
                        <input type="date" name="tanggal_penjualan_produk" class="form-control" placeholder="Masukkan tanggal penjualan disini..." value="{{ old('tanggal_penjualan_produk') }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Anggota</label>
                        <select name="id_user" id="dropdown" class="form-control">
                            <option value=""></option>
                            @foreach ($anggota as $row)
                            <option value="{{ $row->id }}">{{ $row->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Kategori Produk</label>
                        <select name="id_kategori_produk" id="dropdown3" class="form-control">
                            <option value=""></option>
                            @foreach ($kategori_produk as $row)
                            <option value="{{ $row->id_kategori_produk }}">{{ $row->nama_kategori_produk }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for=""> Produk</label>
                        <select name="id_produk" id="dropdown3" class="form-control">
                            <option value=""></option>
                            @foreach ($produk as $row)
                            <option value="{{ $row->id_produk }}">{{ $row->nama_produk }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for=""> Harga</label>
                        <select name="harga_produk" id="dropdown3" class="form-control">
                            <option value=""></option>
                            @foreach ($produk as $row)
                            <option value="{{ $row->harga_produk }}">{{ $row->nama_produk }} Rp. {{ $row->harga_produk }} </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for=""> Stock Produk</label>
                        <select name="stok_produk" id="dropdown3" class="form-control">
                            <option value=""></option>
                            @foreach ($produk as $row)
                            <option value="{{ $row->stok_produk }}">{{ $row->nama_produk }} ( {{ $row->stok_produk }} pcs ) </option>
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