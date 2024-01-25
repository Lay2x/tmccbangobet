@extends('layouts.index')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    {{ $title }}
                </div>
                <div class="card-body table table-responsive">
                    <table class="table table-bordered" id="example1">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Debit</th>
                                <th scope="col">Kredit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($kas as $row)
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ Carbon\Carbon::parse($row->tanggal_kas)->isoFormat('dddd, D MMMM Y,  H:mm:ss')  }}</td>
                                    <td>{{ $row->keterangan_kas }}</td>
                                    <td>
                                        @if ($row->debit_kas == "")
                                            Rp. 0
                                        @endif
                                        @if ($row->debit_kas != "")
                                            Rp. {{ number_format($row->debit_kas) }}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($row->kredit_kas == "")
                                        Rp. 0
                                    @endif
                                    @if ($row->kredit_kas != "")
                                        Rp. {{ number_format($row->kredit_kas) }}
                                    @endif
                                    </td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection