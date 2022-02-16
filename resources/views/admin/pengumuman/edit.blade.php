@extends('layouts.index')

@section('content')
    <div class="section-header">
        <h1> Edit Pengumuman</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></div>
            <div class="breadcrumb-item">Edit Pengumuman</div>
        </div>
    </div>

    <div class="card">
        <form  action="{{ route('pengumuman.update',$pengumuman->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-header">
                <h4>Edit Pengumuman</h4>
                <div class="card-header-action">
                    <a href="{{route('pengumuman.index')}}" class="btn btn-primary">Kembali</a>
                </div>
            </div>
          <div class="card-body">
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control @error('judul')
                is-invalid
                @enderror " id="judul" name="judul" value="{{$pengumuman->judul}}" required>
            @error('judul')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>
            <div class="form-group mb-0">
              <label>Pengumuman</label>
              <textarea class="form-control @error('desripsi') is-invalid @enderror" id="desripsi" name="deskripsi"  style="height: 131px;" required> {{ $pengumuman->deskripsi }}</textarea>
              @error('desripsi')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
          <div class="card-footer text-right">
            <button class="btn btn-primary">Update</button>
          </div>
        </form>
      </div>
@endsection
