@extends('layouts.index')
@section('content')
<div class="row">
    <div class="col">
        <a href="{{ url('iuran') }}" class="btn btn-secondary mb-4" title="kembali ke halaman depan"><i class="fas fa-arrow-left fa-spin"></i> Kembali</a>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ $title }}</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('pembayaran', $data[0]->user_id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('GET')
                    <input type="hidden" class="form-control" name="user_id" value="{{ $data[0]->user_id }}" readonly>
                    <div class="form-group">
                        <label for="jenis_iuran">Jenis Iuran</label>
                        <input type="text" class="form-control" name="jenis_iuran" value="{{ $data[0]->jenis_iuran }}" readonly>
                        @error('jenis_iuran')<small class="text-danger">{{$message}}</small>@enderror
                    </div>
                    <div class="form-group">
                        <label for="total_tagihan">Total Tagihan</label>
                        <input type="text" class="form-control" name="total_tagihan" value="{{ $data[0]->jumlah_tagihan }}" readonly>
                        @error('total_tagihan')<small class="text-danger">{{$message}}</small>@enderror
                    </div>
                    <div class="form-group">
                        <label for="struk_pembayaran">Upload Struk Pembayaran</label>
                        <input type="file" class="form-control" name="struk_pembayaran" id="inputImg">
                        @error('struk_pembayaran')<small class="text-danger">{{$message}}</small>@enderror
                        <img class="d-none w-25 h-25 my-2" id="previewImg" src="#" alt="Preview image">
                    </div>
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