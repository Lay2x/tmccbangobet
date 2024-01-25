@extends('layouts.index')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ $title }}</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('visi.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="form-group mb-2">
                        <label for="">Judul Visi</label>
                        <input type="text" class="form-control" placeholder="Masukan judul visi disini..." name="judul_visi">
                        @error('judul_visi')
                        <small class="text-danger">{{ $message }}</small>@enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Deskripsi Visi</label>
                        <textarea name="deskripsi_visi" id="" cols="30" rows="10" class="form-control"></textarea>
                        @error('deskripsi_visi')
                        <small class="text-danger">{{ $message }}</small>@enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Foto <abbr title="" style="color: black">*</abbr> </label>
                        <input id="inputImg" type="file" accept="image/*" name="icon_visi" class="form-control" required />
                        <img class="d-none w-25 h-25 my-2" id="previewImg" src="#" alt="Preview image">
                    </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-dark">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
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
@endsection