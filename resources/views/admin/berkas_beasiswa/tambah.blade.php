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
                                    @enderror " id="nama" name="nama" >
                                    @error('nama')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Nim</label>
                                        <input type="text" class="form-control @error('nim')
                                        is-invalid
                                        @enderror" name="nim" id="nim">
                                        @error('nim')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Universitas</label>
                                        <input type="text" class="form-control @error('universitas')
                                        is-invalid
                                        @enderror" name="universitas" id="universitas">
                                        @error('universitas')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Prodi</label>
                                        <input type="text" class="form-control @error('prodi')
                                        is-invalid
                                        @enderror" name="prodi" id="prodi">
                                        @error('prodi')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Semester</label>
                                        <input type="number" class="form-control @error('semester')
                                        is-invalid
                                        @enderror" name="semester" id="semester">
                                        @error('semester')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                        <label class=" text-md-right text-left">Alamat</label>
                                        <textarea name="alamat" id="alamat" class="form-control @error('alamat')
                                        is-invalid
                                        @enderror" ></textarea>
                                        @error('alamat')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" class="form-control datemask @error('tgl_lahir')
                                        is-invalid
                                        @enderror" placeholder="YYYY/MM/DD"
                                            name="tgl_lahir" id="tgl_lahir">
                                            @error('tgl_lahir')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Tempat Lahir</label>
                                        <input type="text" class="form-control @error('tmp_lahir')
                                        is-invalid
                                        @enderror" name="tmp_lahir">
                                        @error('tmp_lahir')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="jk">Jenis Kelamin</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jk" id="exampleRadios1" value="Laki-Laki" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                              Laki-Laki
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jk" id="exampleRadios2" value="Perempuan">
                                            <label class="form-check-label" for="exampleRadios2">
                                              Perempuan
                                            </label>
                                          </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="jk">agama</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="agama" id="exampleRadios1" value="Islam" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                              islam
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="radio" name="agama" id="exampleRadios2" value="Kristen">
                                            <label class="form-check-label" for="exampleRadios2">
                                              kristen
                                            </label>
                                          </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Nama Ayah</label>
                                        <input type="text" class="form-control @error('ayah')
                                        is-invalid
                                        @enderror" name="ayah" id="ayah">
                                        @error('ayah')
                                        <span class="text-danger">
                                        {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Pekerjaan Ayah</label>
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
                                        <label>Nama Ibu</label>
                                        <input type="text" class="form-control @error('ibu')
                                        is-invalid
                                        @enderror" name="ibu" id="ibu">
                                        @error('ibu')
                                        <span class="text-danger">
                                        {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Pekerjaan Ibu</label>
                                        <input type="text" class="form-control @error('pekerjaan_ibu')
                                        is-invalid
                                        @enderror" name="pekerjaan_ibu" id="pekerjaan_ibu">
                                        @error('pekerjaan_ibu')
                                        <span class="text-danger">
                                        {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Saudara</label>
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
                                    <label>Foto</label>

                                    <div class="input-group">
                                        <input type="file" class="form-control @error('foto')
                                        is-invalid
                                        @enderror" id="foto" name="foto">
                                        <label class="input-group-text bg-primary text-white" for="foto">Pilih File </label>
                                        @error('foto')
                                        <span class="text-danger">
                                        {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>KTP</label>
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
                                    <label>Kartu Keluarga</label>
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
                                    <label>Transkip Nilai</label>
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
                                    <label>Kartu Hasil Studi</label>
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
                                    <label>Surat Keterangan Beasiswa & FORM A1</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control @error('suket_beasiswa')
                                        is-invalid
                                        @enderror" id="suket_beasiswa" name="suket_beasiswa">
                                        <label class="input-group-text bg-primary text-white" for="suket_beasiswa">Pilih File </label>
                                        @error('suket_beasiswa')
                                        <span class="text-danger">
                                        {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>SKTM/Slip Gaji</label>
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
                                    <label>Piagam Sertifikat</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control @error('sertifikat')
                                        is-invalid
                                        @enderror" name="sertifikat" id="sertifikat">
                                        <label class="input-group-text bg-primary text-white" for="sertifikat">Pilih File </label>
                                        @error('sertifikat')
                                        <span class="text-danger">
                                        {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Motivation Later</label>
                                     <div class="input-group">
                                        <input type="file" class="form-control @error('motivation_later')
                                        is-invalid
                                        @enderror" name="motivation_later" id="motivation_later">
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
                    <div class=" form-group card-footer">
                        <button class="btn btn-primary mr-1 " type="submit">Simpan</button>
                        <button class="btn btn-secondary" type="reset">Reset</button>
                    </div>
            </form>
        </div>
    </div>
    </div>
    </div>
@endsection
