@extends('layouts.index')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ $title }}</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('kategori_iuran.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <!-- <div class="form-group">
                        <label for="user_id">ID Anggota</label>
                        <input type="text" class="form-control" name="user_id" value="{{ Auth::user()->id }}" readonly>
                        @error('user_id')<small class="text-danger">{{$message}}</small>@enderror
                    </div> -->
                    <div class="form-group mb-2">
                        <label for="">Jenis Kategori Iuran</label>
                        <select name="jenis_iuran" id="dropdown">
                            <option value=""></option>
                            @foreach ($data as $row)
                            <option value="{{ $row->nama_iuran }}">{{ $row->nama_iuran
                                }}</option>
                            @endforeach
                        </select>
                        @error('jenis_iuran')
                        <small class="text-danger">{{ $message }}</small>@enderror
                    </div>
                    <div class="form-group">
                        <label for="jumlah_tagihan">Total Tagihan</label>
                        <input type="text" class="form-control" name="jumlah_tagihan" placeholder="Rp." autofocus>
                        @error('jumlah_tagihan')<small class="text-danger">{{$message}}</small>@enderror
                    </div>
                    <!-- <div class="form-group">
                        <label for="jatuh_tempo">Jatuh Tempo</label>
                        <input type="date" class="form-control" name="jatuh_tempo">
                        @error('jatuh_tempo')<small class="text-danger">{{$message}}</small>@enderror
                    </div> -->
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-dark">Buat Iuran</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    document.getElementById('inputImg').addEventListener('change', function() {
        // Get the file input value and create a URL for the selected image
        var input = this;
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('previewImg').setAttribute('src', e.target.result);
                document.getElementById('previewImg').classList.add("d-block");
            };
            reader.readAsDataURL(input.files[0]);
        }
    });
</script>
@endsection