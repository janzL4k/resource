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
               {{-- @method('PUT') --}}
                @csrf
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <h6 class="text-primary">Data Mahasiswa</h6>
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama" name="nama">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Nim</label>
                                        <input type="text" class="form-control" name="nim">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Universitas</label>
                                        <input type="text" class="form-control" name="universitas">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Prodi</label>
                                        <input type="text" class="form-control" name="prodi">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Semester</label>
                                        <input type="text" class="form-control" name="semester">
                                    </div>
                                </div>
                                <div class="form-group">
                                        <label class=" text-md-right text-left">Alamat</label>
                                        <textarea name="alamat" class="form-control" ></textarea>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" class="form-control datemask" placeholder="YYYY/MM/DD"
                                            name="tgl_lahir">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Tempat Lahir</label>
                                        <input type="text" class="form-control" name="tmp_lahir">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Jenis Kelamin</label>
                                        <select class="form-control form-control-lg" name="jk">
                                            <option> </option>
                                            <option>Laki-Laki</option>
                                            <option>Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Agama</label>
                                        <select  class="form-control form-control-lg" name="agama">
                                            <option> </option>
                                            <option >Islam</option>
                                            <option>Kristen</option>
                                            <option>Hindu</option>
                                            <option>Budha</option>
                                            <option>Katolik</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Nama Ayah</label>
                                        <input type="text" class="form-control" name="ayah">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Pekerjaan Ayah</label>
                                        <input type="text" class="form-control" name="pekerjaan_ayah">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Nama Ibu</label>
                                        <input type="text" class="form-control" name="ibu">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Pekerjaan Ibu</label>
                                        <input type="text" class="form-control" name="pekerjaan_ibu">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Saudara</label>
                                    <input type="text" class="form-control" name="jmlh_saudara">
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
                                        <input type="file" class="form-control" id="inputGroupFile02" name="foto">
                                        <label class="input-group-text bg-primary text-white" for="inputGroupFile02">Pilih File </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>KTP</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="inputGroupFile02" name="ktp">
                                        <label class="input-group-text bg-primary text-white" for="inputGroupFile02">Pilih File </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Kartu Keluarga</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="inputGroupFile02" name="kk">
                                        <label class="input-group-text bg-primary text-white" for="inputGroupFile02">Pilih File </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Transkip Nilai</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="inputGroupFile02" name="transkip">
                                        <label class="input-group-text bg-primary text-white" for="inputGroupFile02">Pilih File </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Kartu Hasil Studi</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="inputGroupFile02" name="khs">
                                        <label class="input-group-text bg-primary text-white" for="inputGroupFile02">Pilih File </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Surat Keterangan Beasiswa & FORM A1</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="inputGroupFile02" name="suket_beasiswa">
                                        <label class="input-group-text bg-primary text-white" for="inputGroupFile02">Pilih File </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>SKTM/Slip Gaji</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="inputGroupFile02" name="sktm">
                                        <label class="input-group-text bg-primary text-white" for="inputGroupFile02">Pilih File </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Piagam Sertifikat</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" name="sertifikat">
                                        <label class="input-group-text bg-primary text-white" for="inputGroupFile02">Pilih File </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Motivation Later</label>
                                     <div class="input-group">
                                        <input type="file" class="form-control" name="motivation_later">
                                        <label class="input-group-text bg-primary text-white" for="inputGroupFile02">Pilih File </label>
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
