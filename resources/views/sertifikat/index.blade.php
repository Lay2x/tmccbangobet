@extends('layouts.index')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">{{ $title }}</h3>
          <a href="{{ route('sertifikat.create') }}" class="btn btn-dark btn-sm" style="float: right"><i class="fas fa-plus"></i> Tambah</a>
        </div>
        <div class="card-body">
          @if ($message = Session::get('Sukses'))
          <div class="alert alert-success">
            <p class="m-0">{{ $message }}</p>
          </div>
          @endif
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama </th>
                <th>Kategori Sertifikat</th>
                <th>Nomor Sertifikat </th>
                <th>Keterangan </th>
                <th>Tanggal </th>
                <th>File Sertifikat</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody class="overflow-x-auto">
              @foreach ($sertifikat as $row)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $row->name }}</td> 
                
                <td>
                  {{ $row->nama_kategori_sertifikat }}
                  <br>
                  <span class="badge badge-success"> {{ $row->poin }} Poin</span>
                </td>
                <td>
                {{ $row->nomor_sertifikat }}
                                    </td>
                                    <td>
                {{ $row->keterangan }}
                                    </td>
                <td>{{ $row->tanggal }}</td>
                <td>
                    <a href="file/sertifikat/{{ $row->gambar_sertifikat }}"><button class="btn btn-warning btn-xs" type="button"><i class="fas fa-download"> Show</i></button></a>
                </td>
                <td><a href="{{ route('sertifikat.edit', $row->id_sertifikat) }}" class="btn btn-primary btn-xs" role="button" style="display: inline-block"><i class="fas fa-edit">Edit</i></a>
                  <form action="{{ route('sertifikat.destroy', $row->id_sertifikat) }}" method="POST" style="display: inline-block">
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