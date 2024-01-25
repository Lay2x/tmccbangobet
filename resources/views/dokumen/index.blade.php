@extends('layouts.index')
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-12">

        <div class="card">
          <div class="card-header">
            <h3 class="card-title"> {{ $title }}</h3>
            <a href="{{ route('dokumen.create') }}" class="btn btn-dark btn-sm" style="float: right"> <i class="fas fa-plus"> Tambah</i></a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            @if ($message = Session::get('Sukses'))
            <div class="alert alert-success">
                  <p>{{ $message }}</p>
            </div>
            @endif
            <table id="example2" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>No</th>
                <th>No. Dokumen</th>
                <th>Nama Dokumen</th>
                <th>Kategori</th>
                <th>File</th>
                <th>action</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($dokumen as $row)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $row->nomor_dokumen }}</td>
                <td>{{ $row->nama_dokumen }}</td>
                <td>{{ $row->nama_kategori_dokumen }}</td>
                <td>
                    <a href="file/dokumen/{{ $row->file_dokumen }}"><button class="btn btn-info btn-xs" type="button"><i class="fas fa-download">Download</i></button></a>
                </td>
                <td><a href="{{ route('dokumen.edit', $row->id_dokumen) }}" class="btn btn-primary btn-xs" role="button" style="display: inline-block"><i class="fas fa-edit">Update</i></a>
                  <form action="{{ route('dokumen.destroy', $row->id_dokumen) }}" method="POST" style="display: inline-block">
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
  <!-- /.container-fluid -->
  @endsection