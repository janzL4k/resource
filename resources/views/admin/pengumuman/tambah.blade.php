@extends('layouts.index')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Pengumuman</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></div>
            <div class="breadcrumb-item">Buat Pengumuman</div>
        </div>
    </div>

    <div class="card">
        <form  action="{{ route('pengumuman.store') }}" method="POST">
        @csrf
        <div class="card-header">
            <h4>Buat Pengumuman</h4>
            <div class="card-header-action">
                <a href="{{route('pengumuman.index')}}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
          <div class="card-body">
            <div class="card-body">
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control @error('judul')
                    is-invalid
                    @enderror " id="judul" name="judul" placeholder="Masukkan Isi Judul Pengumuman" rows="10">
                @error('judul')
                <div class="invalid-feedback" style="display: block">
                    {{ $message }}
                </div>
                @enderror
                </div>
                <div class="form-group mb-0">
                    <label>Pengumuman</label>
                    <textarea class="form-control deskripsi @error('deskripsi') is-invalid @enderror" name="deskripsi" placeholder="Masukkan Konten / Isi Pengumuman" rows="10" style="height: 131px;">{!! old('deskripsi') !!}</textarea>
                    @error('deskripsi')
                    <div class="invalid-feedback" style="display: block">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
          </div>
          <div class="card-footer text-right">
            <button class="btn btn-primary">Submit</button>
          </div>
        </form>
    </section>
      </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.6.2/tinymce.min.js"></script>
<script>
    var editor_config = {
        selector: "textarea.content",
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        relative_urls: false,
    };

    tinymce.init(editor_config);
</script>
@stop
