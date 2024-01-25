@extends('layouts.index')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card table-responsive">
                <div class="card-header">
                    <h3 class="card-title">{{ $title }}</h3>
                    <a href="{{ route('visi.create') }}" class="btn btn-dark btn-sm" style="float: right"><i class="fas fa-plus"></i> Tambah</a>
                </div>
                <div class="card-body">
                    @if ($message = Session::get('tambah'))
                    <div class="alert alert-success">
                        <p class="m-0">{{ $message }}</p>
                    </div>
                    @endif
                    @if ($message = Session::get('hapus'))
                    <div class="alert alert-success">
                        <p class="m-0">{{ $message }}</p>
                    </div>
                    @endif
                    @if ($message = Session::get('ubah'))
                    <div class="alert alert-success">
                        <p class="m-0">{{ $message }}</p>
                    </div>
                    @endif
                    <table id="example3" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul Visi</th>
                                <th>Deskripsi </th>
                                <th>Icon</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="overflow-x-auto">
                            @foreach ($data as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->judul_visi }}</td>
                                <td>{{ $row->deskripsi_visi }}</td>
                                <td><img src="{{ asset('file/visi/'.$row->icon_visi) }}" alt="" class="img-fluid" style="width : 50%"></td>
                                <td><a href="{{ route('visi.edit', $row->id_visi) }}" class="btn btn-primary btn-xs" role="button" style="display: inline-block"><i class="fas fa-edit">Ubah</i></a>
                                    <form action="{{ route('visi.destroy', $row->id_visi) }}" method="POST" style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" value="Button" title="Delete" class="btn btn-danger btn-xs btn-flat show_confirm"><i class="fas fa-trash">Delete</i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
@endsection