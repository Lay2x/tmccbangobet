@extends('layouts.index')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ $title }}</h3>
                <a href="{{ route('penjualan_produk.create') }}" class="btn btn-dark btn-sm" style="float: right;"><i class="fas fa-plus"></i> Tambah</a>
            </div>
            <div class="card-body table table-responsive">
                @if ($message = Session::get('Sukses'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <p>{{ $message }}</p>
                </div>
                @endif
                <table class="table table-bordered" id="example1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Penjualan</th>
                            <th>Anggota</th>
                            <th>Kategori Produk</th>
                            <th>Produk</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            
                            <th>Aksi</th>
                        </tr>
                    <tbody>
                        @foreach ($penjualan_produk as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ Carbon\Carbon::parse($row->tanggal_penjualan_produk)->isoFormat('dddd, D MMMM Y')  }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->nama_kategori_produk }}</td>
                            <td>{{ $row->nama_produk}}</td>
                            <td>
                                @if ($row->id_produk == 1)
                                <b> Rp. {{ $row->harga_produk }} </b> 
                                @elseif($row->id_produk == 2)
                                <b> Rp. {{ $row->harga_produk }} </b> 
                                @elseif($row->id_produk == 3)
                                <b> Rp. {{ $row->harga_produk }} </b> 
                                @else
                                <b> Rp. {{ $row->harga_produk }} </b> 
                                @endif
                            </td>
                            <td><i> @if ($row->id_produk == 1)
                                <b> Rp. {{ $row->stok_produk }}  </b> 
                                @elseif($row->id_produk == 2)
                                <b> Rp. {{ $row->harga_produk }} </b> 
                                @elseif($row->id_produk == 3)
                                <b> Rp. {{ $row->harga_produk }} </b> 
                                @else
                                <b> Rp. {{ $row->harga_produk }} </b> 
                                @endif</i></td>
                            <td>
                                <a href="{{ route('penjualan_produk.edit', $row->id_penjualan_produk) }}" class="btn btn-primary btn-xs" style="display: inline-block"><i class="fas fa-edit">Edit</i></a>
                                <form action="{{ route('penjualan_produk.destroy', $row->id_penjualan_produk) }}" method="POST" style="display: inline-block">
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