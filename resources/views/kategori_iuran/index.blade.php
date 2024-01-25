@extends('layouts.index')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ $title }}</h3>
                <a href="{{ route('kategori_iuran.create') }}" class="btn btn-dark btn-sm" style="float: right;"><i class="fas fa-plus"></i> Tambah</a>
            </div>
            <div class="card-body table table-responsive">
                @if ($message = Session::get('Sukses'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                @if ($message = Session::get('tambah'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                @if ($message = Session::get('delete'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <table class="table table-bordered" id="example2">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis Kategori Iuran</th>
                            <th>Nominal Iuran</th>
                            <th>Aksi</th>
                        </tr>
                    <tbody>
                        @foreach( $data as $row )
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->jenis_kategori_iuran }}</td>
                            <td>{{ $row->nominal }}</td>
                            <td><a href="{{ route('kategori_iuran.edit', $row->id_kategori_iuran) }}" class="btn btn-primary btn-xs" role="button" style="display: inline-block"><i class="fas fa-edit">Ubah</i></a>
                                <form action="{{ route('kategori_iuran.destroy', $row->id_kategori_iuran) }}" method="POST" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" value="Button" title="Delete" class="btn btn-danger btn-xs btn-flat show_confirm"><i class="fas fa-trash">Delete</i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </thead>
                </table>
            </div>`
        </div>
    </div>
</div>
@endsection