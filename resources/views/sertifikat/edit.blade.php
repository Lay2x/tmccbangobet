@extends('layouts.index')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $title }}</h3>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Error!</strong> 
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{ route('sertifikat.update', $sertifikat->id_sertifikat) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="form-group mb-2">
                        <label for="">Kategori Sertifikat</label>
                        <select name="id_kategori_sertifikat" id="dropdown">
                            <option value=""></option>
                            @foreach ($kategori_sertifikat as $row)
                                <option @if ($sertifikat->id_kategori_sertifikat == $row->id_kategori_sertifikat) selected @endif value="{{ $row->id_kategori_sertifikat }}">{{ $row->nama_kategori_sertifikat }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Anggota</label>
                        <select name="id" id="dropdown2">
                            <option value=""></option>
                            @foreach ($user as $sub)
                                <option @if ($sertifikat->id == $sub->id) selected @endif value="{{ $sub->id }}">{{ $sub->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Nomor Sertifikat</label>
                        <input type="text" class="form-control" name="nomor_sertifikat" value="{{ $sertifikat->nomor_sertifikat }}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Keterangan</label>
                        <input type="text" class="form-control" name="keterangan" value="{{ $sertifikat->keterangan }}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Tanggal Sertifikat</label>
                        <input type="date" name="tanggal" class="form-control" value="{{ $sertifikat->tanggal }}">
                    </div>
                    
                    <div class="form-group mb-2">
                            <label for="">File Sertifikat <abbr title="" style="color: black">*</abbr> </label>
                            <input id="inputImg" type="file" accept="image/*" name="gambar_sertifikat" class="form-control">
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
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ),{
            ckfinder: {
                uploadUrl: '{{route('image.upload').'?_token='.csrf_token()}}',
    }
        })
        .catch( error => {
            console.error( error );
        } );
  </script>
  <script>
      CKEDITOR.replace( 'editor', {
          filebrowserUploadUrl: "{{route('image.upload', ['_token' => csrf_token() ])}}",
          filebrowserUploadMethod: 'form'
      });
  </script>
@endsection
@endsection