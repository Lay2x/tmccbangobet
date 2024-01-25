@extends('layouts.index')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ $title }}</h3>
                <a href="{{ route('kategori_garasi.create') }}" class="btn btn-dark btn-sm" style="float: right;"><i class="fas fa-plus"></i> Tambah</a>
            </div>
            <div class="card-body table table-responsive">
                @if ($message = Session::get('tambah'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                @if ($message = Session::get('hapus'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                @if ($message = Session::get('ubah'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <table class="table table-bordered" id="example1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Garasi</th>
                            <th>Merek Item</th>
                            <th>Jenis Item</th>
                            <th>Aksi</th>
                        </tr>
                        @foreach($data as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->id_garasi }}</td>
                            <td>{{ $row->merek_item }}</td>
                            <td>{{ $row->jenis_item }}</td>
                            <td>
                                <a href="{{ route('kategori_garasi.edit', $row->id_garasi) }}" class="btn btn-primary btn-xs" style="display: inline-block"><i class="fas fa-edit">Edit</i></a>
                                <form action="{{ route('kategori_garasi.destroy', $row->id_garasi)}}" method="post" style="display: inline-block">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger btn-xs show_confirm"><i class="fas fa-trash"></i> Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    <tbody>
                    </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection