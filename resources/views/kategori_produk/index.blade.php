@extends('layouts.index')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $title }}</h3>
                    <a href="{{ route('kategori_produk.create') }}" class="btn btn-dark btn-sm" style="float: right;"><i class="fas fa-plus"></i> Tambah</a>
                </div>
                <div class="card-body table table-responsive">
                    @if ($message = Session::get('Sukses'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    <table class="table table-bordered" id="example2">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Kategori</th>
                                <th>Nama Kategori Produk</th>
                                <th>Aksi</th>
                            </tr>
                            <tbody>
                            @foreach ($kategori_produk as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->id_kategori_produk }}</td>
                                <td>{{ $row->nama_kategori_produk }}</td>
                                <td>
                                    <a href="{{ route('kategori_produk.edit', $row->id_kategori_produk) }}" class="btn btn-primary btn-xs" style="display: inline-block"><i class="fas fa-edit">Edit</i></a>
                                    <form action="{{ route('kategori_produk.destroy', $row->id_kategori_produk) }}" method="POST" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-xs btn-flat show_confirm"><i class="fas fa-trash"> Delete</i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection