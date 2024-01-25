@extends('layouts.index')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ $title }}</h3>
                @if( Auth::user()->id_kategori_admin == 1 )
                <form action="{{ route('iuran.store') }}" method="POST" style="float: right;">
                    @csrf
                    <button type="submit" class="btn btn-secondary show-confirm" onclick="return confirm('Buat tagihan iuran baru untuk semua anggota aktif)"><i class="fas fa-plus"></i> Buat tagihan baru</button>
                </form>
                @endif
            </div>
            <div class="card-body table table-responsive">
                @if ($message = Session::get('Verifikasi'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
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
                <table class="table table-bordered" id="example2">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Anggota</th>
                            <th>Jenis Iuran</th>
                            <th>Total Tagihan</th>
                            <th>Status</th>
                            <th>Bukti Pembayaran</th>
                            <th>Jatuh Tempo</th>
                            <th>Aksi</th>
                        </tr>
                    <tbody>
                        @foreach($data as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->jenis_iuran }}</td>
                            <td>Rp. {{ number_format($row->jumlah_tagihan) }}</td>
                            @if( $row->status == 'Menunggu Konfirmasi' )
                            <td class="text-primary" style="text-transform: capitalize;">{{ $row->status }} <i class="fas fa-hourglass-half fa-spin" style="color: #221f51;"></i></td>
                            @elseif( $row->status == 'Belum Bayar' )
                            <td class="text-danger">{{ $row->status }}</td>
                            @else
                            <td class="text-success">{{ $row->status }}</td>
                            @endif
                            @if( $row->struk_pembayaran != "" )
                            <td><a href="{{ asset('file/struk pembayaran/' . $row->struk_pembayaran) }}" target="_blank"><i class="fas fa-download"></i> Download</a></td>
                            @else
                            <td>Tidak ada data</td>
                            @endif
                            <td>{{ $row->jatuh_tempo }}</td>
                            <td>
                                @if( $row->status == 'Menunggu Konfirmasi' || $row->status == 'Lunas' )
                                <a href="{{ url('bayar', $row->user_id) }}" class="btn btn-warning btn-xs disabled" role="button" style="display: inline-block"><i class="fas fa-money-bill-wave"> Bayar</i></a>
                                @else
                                <a href="{{ url('bayar', $row->user_id) }}" class="btn btn-warning btn-xs" role="button" style="display: inline-block"><i class="fas fa-money-bill-wave"> Bayar</i></a>
                                @endif
                                @if (Auth::user()->id_kategori_admin == 1 && $row->status == 'Lunas' )
                                <a href="{{ url('verifikasi', $row->user_id) }}" onclick="return confirm('Verifikasi pembayaran ini? Mohon cek kembali STRUK PEMBAYARAN!')" class="btn btn-primary btn-xs disabled"><i class="fas fa-check"></i> Verifikasi</a>
                                @elseif(Auth::user()->id_kategori_admin == 1 && $row->status == 'Belum Bayar' )
                                <a href="{{ url('verifikasi', $row->user_id) }}" onclick="return confirm('Verifikasi pembayaran ini? Mohon cek kembali STRUK PEMBAYARAN!')" class="btn btn-primary btn-xs disabled"><i class="fas fa-check"></i> Verifikasi</a>
                                @elseif(Auth::user()->id_kategori_admin == 1 && $row->status == 'Menunggu Konfirmasi' )
                                <a href="{{ url('verifikasi', $row->user_id) }}" onclick="return confirm('Verifikasi pembayaran ini? Mohon cek kembali STRUK PEMBAYARAN!')" class="btn btn-primary btn-xs"><i class="fas fa-check"></i> Verifikasi</a>
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