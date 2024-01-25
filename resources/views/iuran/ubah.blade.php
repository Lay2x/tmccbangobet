@extends('layouts.index')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ $title }}</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('iuran.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="form-group mb-2">
                        <label for="">Jenis Iuran</label>
                        <select class="form-control" name="jenis_iuran" id="dropdown">
                            <option value=""></option>
                            @foreach ($oldData as $row)
                            <option value="{{ $row->nama_iuran }}">{{ $row->nama_iuran}}</option>
                            @endforeach
                        </select>
                        @error('jenis_iuran')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="id_user">ID Anggota</label>
                        <input type="text" class="form-control" name="id_user" value="{{ Auth::user()->id }}" readonly>
                        @error('id_user')<small class="text-danger">{{$message}}</small>@enderror
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