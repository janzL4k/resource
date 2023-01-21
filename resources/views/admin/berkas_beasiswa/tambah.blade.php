@extends('layouts.index')

@section('content')
    <div class="section-header">
        <h1>Tambah Berkas</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Berkas</a></div>
            <div class="breadcrumb-item"><a href="#">Tambah</a></div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h4>Tambah Data </h4>
            <div class="card-header-action">
                <a href="/berkas" class="btn btn-primary"><i
                        class="fas fa-arraow-back">Kembali</i></a>
            </div>
        </div>
        <div class="section-body">
            <form action="{{ route('berkas.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <h6 class="text-primary">Data Mahasiswa</h6>
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" class="form-control @error('nama')
                                    is-invalid
                                    @enderror " id="nama" name="nama" required >
                                    @error('nama')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nim"> Nim </label>
                                        <input type="text" class="form-control @error('nim')
                                        is-invalid @enderror" name="nim" id="nim" required>
                                        @error('nim')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="universitas">Universitas</label>
                                        <input type="text" class="form-control @error('universitas')
                                        is-invalid
                                        @enderror" name="universitas" id="universitas" required>
                                        @error('universitas')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="prodi">Prodi</label>
                                        <input type="text" class="form-control @error('prodi')
                                        is-invalid
                                        @enderror" name="prodi" id="prodi" required>
                                        @error('prodi')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="semester">Semester</label>
                                        <input type="number" class="form-control @error('semester')
                                        is-invalid
                                        @enderror" name="semester" id="semester" required>
                                        @error('semester')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                        <label for="alamat" class=" text-md-right text-left">Alamat</label>
                                        <textarea name="alamat" id="alamat" class="form-control @error('alamat')
                                        is-invalid
                                        @enderror" required></textarea>
                                        @error('alamat')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                </div>
                                <div class="form-row">
                                    <div class="col-sm-6 align-self-center">
                                        <label for="tgl_lahir">Tanggal Lahir</label>
                                        <input type="date" class="form-control datemask @error('tgl_lahir')
                                        is-invalid
                                        @enderror" placeholder="YYYY/MM/DD"
                                            name="tgl_lahir" id="tgl_lahir" required>
                                            @error('tgl_lahir')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                    </div>
                                    <div class="col-sm-6 align-self-center">
                                        <label for="tmp_lahir">Tempat Lahir</label>
                                        <input type="text" class="form-control @error('tmp_lahir')
                                        is-invalid
                                        @enderror" name="tmp_lahir" id="tmp_lahir" required>
                                        @error('tmp_lahir')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-sm-6 align-self-center">
                                        <div class="form-group">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <select class="form-control-lg @error('jenis_kelamin') is-invalid @enderror "
                                            id="jenis_kelamin" name="jenis_kelamin">
                                            <option value="">--Pilih--</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        @error('jenis_kelamin')
                                        <span class="invalid-feedback" role="alert">
                                             {{ $message }}
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6 align-self-center">
                                        <div class="form-group">
                                        <label for="agama">Agama</label>
                                        <select
                                            class="form-control-lg @error('agama') is-invalid @enderror "
                                            id="agama" name="agama">
                                            <option disabled selected value="">--Pilih--</option>
                                           @foreach($data['agama'] as $item)
                                                <option value="Islam"></option>
                                            @endforeach
                                        </select>
                                        @error('agama')
                                        <span class="invalid-feedback" role="alert">
                                                            {{ $message }}
                                                        </span>
                                        @enderror
                                    </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 align-self-center">
                                        <div class="form-group">
                                            <label for="ayah">Nama Ayah</label>
                                            <input type="text" class="form-control @error('ayah')
                                        is-invalid
                                        @enderror" name="ayah" id="ayah">
                                            @error('ayah')
                                            <span class="text-danger">
                                        {{ $message }}
                                        </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6 align-self-center">
                                        <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                                        <input type="text" class="form-control @error('pekerjaan_ayah')
                                        is-invalid
                                        @enderror" name="pekerjaan_ayah" id="pekerjaan_ayah">
                                        @error('pekerjaan_ayah')
                                        <span class="text-danger">
                                        {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="ibu">Nama Ibu</label>
                                        <input type="text" class="form-control @error('ibu')
                                        is-invalid
                                        @enderror" name="ibu" id="ibu" required>
                                        @error('ibu')
                                        <span class="text-danger">
                                        {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                                        <input type="text" class="form-control @error('pekerjaan_ibu')
                                        is-invalid
                                        @enderror" name="pekerjaan_ibu" id="pekerjaan_ibu" required>
                                        @error('pekerjaan_ibu')
                                        <span class="text-danger">
                                        {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="saudara">Jumlah Saudara</label>
                                    <input type="text" class="form-control @error('saudara')
                                    is-invalid
                                    @enderror" name="saudara" id="saudara">
                                    @error('saudara')
                                    <span class="text-danger">
                                    {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 ">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <h6 class="text-primary">Berkas Pendaftar</h6>
                                    <label>Foto (Bentuk Gambar)</label>

                                    <div class="input-group">
                                        <input type="file" class="form-control @error('foto')
                                        is-invalid
                                        @enderror" id="foto" name="foto" >
                                        <label class="input-group-text bg-primary text-white">Pilih File </label>
                                        @error('foto')
                                        <span class="text-danger">
                                        {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>KTP (Bentuk Gambar)</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control @error('ktp')
                                        is-invalid
                                        @enderror" id="ktp" name="ktp">
                                        <label class="input-group-text bg-primary text-white" for="ktp">Pilih File </label>
                                        @error('ktp')
                                        <span class="text-danger">
                                        {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Kartu Keluarga (Bentuk Gambar)</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control @error('kk')
                                        is-invalid
                                        @enderror" id="kk" name="kk">
                                        <label class="input-group-text bg-primary text-white" for="kk">Pilih File </label>
                                        @error('kk')
                                        <span class="text-danger">
                                        {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Transkip Nilai (Bentuk Pdf)</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control @error('transkip')
                                        is-invalid
                                        @enderror" id="transkip" name="transkip">
                                        <label class="input-group-text bg-primary text-white" for="transkip">Pilih File </label>
                                        @error('transkip')
                                        <span class="text-danger">
                                        {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Form A1 (Bentuk Pdf)</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control @error('khs')
                                        is-invalid
                                        @enderror" id="khs" name="khs">
                                        <label class="input-group-text bg-primary text-white" for="khs">Pilih File </label>
                                        @error('khs')
                                        <span class="text-danger">
                                        {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Surat Rekomendasi Beasiswa(Bentuk Pdf)</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control @error('suket_beasiswa')
                                        is-invalid @enderror" id="suket_beasiswa" name="suket_beasiswa">
                                        <label class="input-group-text bg-primary text-white" for="suket_beasiswa">Pilih File </label>
                                        @error('suket_beasiswa')
                                        <span class="text-danger">
                                        {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>SKTM/Slip Gaji (Bentuk Pdf)</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control @error('sktm')
                                        is-invalid
                                        @enderror" id="sktm" name="sktm">
                                        <label class="input-group-text bg-primary text-white" for="sktm">Pilih File </label>
                                        @error('sktm')
                                        <span class="text-danger">
                                        {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Piagam Sertifikat (Bentuk Pdf)</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control @error('sertifikat')
                                        is-invalid
                                        @enderror" name="sertifikat" id="sertifikat" >
                                        <label class="input-group-text bg-primary text-white" for="sertifikat">Pilih File </label>
                                        @error('sertifikat')
                                        <span class="text-danger">
                                        {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Motivation Later (Bentuk Pdf)</label>
                                     <div class="input-group">
                                        <input type="file" class="form-control @error('motivation_later')
                                        is-invalid
                                        @enderror" name="motivation_later" id="motivation_later" >
                                        <label class="input-group-text bg-primary text-white" for="motivation_later">Pilih File </label>
                                        @error('motivation_later')
                                        <span class="text-danger">
                                        {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="form-group card-footer">
                        <button class="btn btn-primary mr-1" type="submit">Simpan</button>
                        <button class="btn btn-secondary" type="reset">Reset</button>
                    </div>
                </form>
        </div>
    </div>

@endsection
