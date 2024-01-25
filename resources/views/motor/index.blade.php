@extends('layouts.index')
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-12">

        <div class="card">
          <div class="card-header">
            <h3 class="card-title"> {{ $title }}</h3>
            <a href="{{ route('motor.create') }}" class="btn btn-dark btn-sm" style="float: right"> <i class="fas fa-plus"> Tambah</i></a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            @if ($message = Session::get('Sukses'))
            <div class="alert alert-success">
                  <p>{{ $message }}</p>
            </div>
            @endif
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>No</th>
                <th>No. Kendaraan</th>
                <th>Nama Motor</th>
                <th>Pemilik</th>
                <th>Foto</th>
                <th>action</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($motor as $row)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $row->nomor_plat }}</td>
                <td>{{ $row->nama_motor }}</td>
                <td>{{ $row->name }}</td>
                <td><img src="{{ asset('file/motor/'.$row->gambar_motor) }}" alt="{{ $row->nama_motor }}" style="width: 180px; height: 150px;"></td>
                
                <td><a href="{{ route('motor.edit', $row->id_motor) }}" class="btn btn-primary btn-xs" role="button" style="display: inline-block"><i class="fas fa-edit">Show</i></a>
                  <form action="{{ route('motor.destroy', $row->id_motor) }}" method="POST" style="display: inline-block">
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