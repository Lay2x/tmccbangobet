@extends('layouts.index')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $title }}</h3>
                    <a href="{{ route('kredit.create') }}" class="btn btn-dark btn-sm" style="float: right;"><i class="fas fa-plus"></i> Tambah</a>
                </div>
                <div class="card-body table table-responsive">
                    @if ($message = Session::get('Sukses'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    <table class="table table-bordered" id="example2">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nominal</th>
                                <th>Tanggal</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                            <tbody>
                            @foreach ($kredit as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>Rp. {{ number_format($row->nominal_kredit) }}</td>
                                <td>{{ Carbon\Carbon::parse($row->tanggal_kredit)->isoFormat('dddd, D MMMM Y, H:m:s')  }}</td>
                                <td>{{ $row->keterangan_kredit }}</td>
                                <td>
                                    <a href="{{ route('kredit.edit', $row->id_kredit) }}" class="btn btn-primary btn-xs" style="display: inline-block"><i class="fas fa-edit">Edit</i></a>
                                    <form action="{{ route('kredit.destroy', $row->id_kredit) }}" method="POST" style="display: inline-block">
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