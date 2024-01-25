@extends('layouts.index')
@section('content')

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ $title }}</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('misi.update',$data[0]->id_misi) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="iconLama" value="{{ $data[0]->icon_misi }}">
                    <div class="form-group mb-2">
                        <label for="">Judul misi</label>
                        <input type="text" class="form-control" name="judul_misi" value="{{ $data[0]->judul_misi }}">
                        @error('judul_misi')<small class="text-danger">{{ $message }}</small>@enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Deskripsi</label>
                        <textarea name="deskripsi_misi" id="" cols="30" rows="10" class="form-control">{{ $data[0]->deskripsi_misi }}</textarea>
                        @error('deskripsi_misi')<small class="text-danger">{{ $message }}</small>@enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Foto <abbr title="" style="color: black">*</abbr> </label>
                        <input id="inputImg" type="file" accept="image/*" name="icon_misi" class="form-control">
                        @if( $data[0]->icon_misi )
                        <img src="{{ asset('file/misi/'. $data[0]->icon_misi) }}" alt="" width="300" class="mt-3" id="previewImg">
                        @else
                        <img class="d-none w-25 h-25 my-2" id="previewImg" src="" alt="Preview image">
                        @endif
                        @error('icon_misi')<small class="text-danger">{{ $message }}</small>@enderror
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