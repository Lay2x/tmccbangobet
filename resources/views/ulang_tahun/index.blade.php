
@extends('layouts.index')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $title }} , Bulan {{ Carbon\Carbon::parse($month)->isoFormat('MMMM Y')  }}</h3>
                </div>
                <div class="card-body table table-responsive">
                    @if ($message = Session::get('Sukses'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <table class="table table-bordered" id="example1">
                        <thead>
                            <tr>
                                <th scope="col"><center>No</th>
                                <th scope="col"><center>ID Anggota</th>
                                <th scope="col"><center>Ulang Tahun</th>
                                <th scope="col"><center>Nama</th>
                                <th scope="col"><center>Email</th>
                                <th scope="col"><center>No. HP</th>
                                <th scope="col"><center>Ucapan</th>
                            </tr>
                        <tbody>
                            @foreach ($hbd as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        @if ($row->id_kategori_anggota == 1)
                                        A - {{ str_pad($row->id, 5, '0', STR_PAD_LEFT) }}
                                        @elseif($row->id_kategori_anggota == 2)
                                        B - {{ str_pad($row->id, 5, '0', STR_PAD_LEFT) }}
                                        @else
                                        K - {{ str_pad($row->id, 5, '0', STR_PAD_LEFT) }}
                                        @endif
                                    </td>
                                    <td>{{ Carbon\Carbon::parse($row->tanggal_lahir)->isoFormat('dddd, D MMMM Y')  }}</td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->email }}</td>
                                    <td>+62{{ $row->no_hp }}</td>
                                    <td>
                                    @if ($row->status == 'Verifikasi')
                                    <span class="badge badge-warning"> HBD <i>{{ $row->name }} <i class="fa fa-birthday-cake" aria-hidden="true"></i> Semoga Makin Besar, Kuat & Tahan Lama</i></span>
                                    @endif
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