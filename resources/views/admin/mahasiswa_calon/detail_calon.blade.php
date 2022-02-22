@extends('layouts.index')

@section('content')
    <div class="section-header">
        <h1>Konfirmasi Calon</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Berkas</a></div>
            <div class="breadcrumb-item"><a href="#">Detail</a></div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h4>Action</h4>
        </div>
        <div class="section-body">
            {{-- <form action="{{ route('mahasiswa_calon.store') }}" method="post" enctype="multipart/form-data"> --}}
            {{-- @method('PUT') --}}
            {{-- @csrf --}}
            <div class="card-header">
                <h1> </h1>
                <a href="{{ route('mahasiswa_calon.index') }}" class="btn btn-primary"><i
                        class="fas fa-arraow-back">Kembali</i></a>
                <form action="{{ route('set_lolos.update', $mahasiswa_calon->id) }}" method="post">
                    @csrf

                    <button type="submit" class="btn btn-success btn-sm ml-1"
                        onclick="return confirm('Apa Anda yakin Loloskan ?');"><i class="fas fa-check-circle"></i> Set
                        Lolos</button>
                </form>

            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <h6 class="text-primary">Data Mahasiswa</h6>
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" disabled
                                    name="{{ $mahasiswa_calon->nama }}" value="{{ $mahasiswa_calon->nama }}"
                                    placeholder="{{ $mahasiswa_calon->nama }}">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Nim</label>
                                    <input type="text" class="form-control" name="nim" disabled
                                        value="{{ $mahasiswa_calon->nim }}" placeholder="{{ $mahasiswa_calon->nim }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Universitas</label>
                                    <input type="text" class="form-control" name="universitas" disabled
                                        value="{{ $mahasiswa_calon->universitas }}"
                                        placeholder="{{ $mahasiswa_calon->universitas }}">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Prodi</label>
                                    <input type="text" class="form-control" name="prodi" disabled
                                        value="{{ $mahasiswa_calon->prodi }}"
                                        placeholder="{{ $mahasiswa_calon->prodi }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Semester</label>
                                    <input type="text" class="form-control" name="semester" disabled
                                        value="{{ $mahasiswa_calon->semester }}"
                                        placeholder="{{ $mahasiswa_calon->semester }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" text-md-right text-left">Alamat</label>
                                <textarea name="alamat" class="form-control" disabled
                                    value="{{ $mahasiswa_calon->alamat }}"
                                    placeholder="{{ $mahasiswa_calon->alamat }}"></textarea>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" class="form-control datemask" disabled
                                        value="{{ $mahasiswa_calon->tgl_lahir }}"
                                        placeholder="{{ $mahasiswa_calon->tgl_lahir }}" name="tgl_lahir">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Tempat Lahir</label>
                                    <input type="text" class="form-control" name="tmp_lahir" disabled
                                        value="{{ $mahasiswa_calon->tmp_lahir }}"
                                        placeholder="{{ $mahasiswa_calon->tmp_lahir }}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Jenis Kelamin</label>
                                    <select class="form-control form-control-lg" name="jk" disabled
                                        value="{{ $mahasiswa_calon->jk }}" placeholder="{{ $mahasiswa_calon->jk }}">
                                        <option>{{ $mahasiswa_calon->jk }} </option>

                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Agama</label>
                                    <select class="form-control form-control-lg" name="agama" disabled
                                        value="{{ $mahasiswa_calon->agama }}"
                                        placeholder="{{ $mahasiswa_calon->agama }}">
                                        <option>{{ $mahasiswa_calon->agama }} </option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Nama Ayah</label>
                                    <input type="text" class="form-control" name="ayah" disabled
                                        value="{{ $mahasiswa_calon->ayah }}"
                                        placeholder="{{ $mahasiswa_calon->ayah }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Pekerjaan Ayah</label>
                                    <input type="text" class="form-control" name="pekerjaan_ayah" disabled
                                        value="{{ $mahasiswa_calon->pekerjaan_ayah }}"
                                        placeholder="{{ $mahasiswa_calon->pekerjaan_ayah }}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Nama Ibu</label>
                                    <input type="text" class="form-control" name="ibu" disabled
                                        value="{{ $mahasiswa_calon->ibu }}" placeholder="{{ $mahasiswa_calon->ibu }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Pekerjaan Ibu</label>
                                    <input type="text" class="form-control" name="pekerjaan_ibu" disabled
                                        value="{{ $mahasiswa_calon->pekerjaan_ibu }}"
                                        placeholder="{{ $mahasiswa_calon->pekerjaan_ibu }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Jumlah Saudara</label>
                                <input type="text" class="form-control" name="jmlh_saudara" disabled
                                    value="{{ $mahasiswa_calon->jmlh_saudara }}"
                                    placeholder="{{ $mahasiswa_calon->saudara }}">
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
                                    <input class="form-control" id="inputGroupFile02" name="foto"
                                        value="{{ $mahasiswa_calon->foto }}" disabled
                                        placeholder="">
                                    <label class="input-group-text bg-primary text-white" for="inputGroupFile02">Pilih
                                        File </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>KTP</label>
                                <div class="input-group">
                                    <input class="form-control" id="inputGroupFile02"
                                        name="{{ $mahasiswa_calon->foto }}" value="{{ $mahasiswa_calon->ktp }}" disabled
                                        placeholder="{{ $mahasiswa_calon->ktp }}">
                                    <label class="input-group-text bg-primary text-white" for="inputGroupFile02">Pilih
                                        File </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Kartu Keluarga</label>
                                <div class="input-group">
                                    <input class="form-control" id="inputGroupFile02" name="kk"
                                        value="{{ $mahasiswa_calon->kk }}" disabled
                                        placeholder="{{ $mahasiswa_calon->kk }}">
                                    <label class="input-group-text bg-primary text-white" for="inputGroupFile02">Pilih
                                        File </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Transkip Nilai</label>
                                <div class="input-group">
                                    <input class="form-control" id="inputGroupFile02" name="transkip"
                                        value="{{ $mahasiswa_calon->transkip }}" disabled
                                        placeholder="{{ $mahasiswa_calon->transkip }}">
                                    <label class="input-group-text bg-primary text-white" for="inputGroupFile02">Pilih
                                        File </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Kartu Hasil Studi</label>
                                <div class="input-group">
                                    <input class="form-control" id="inputGroupFile02" name="khs"
                                        value="{{ $mahasiswa_calon->khs }}" disabled
                                        placeholder="{{ $mahasiswa_calon->khs }}">
                                    <label class="input-group-text bg-primary text-white" for="inputGroupFile02">Pilih
                                        File </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Surat Keterangan Beasiswa & FORM A1</label>
                                <div class="input-group">
                                    <input class="form-control" id="inputGroupFile02" name="suket_beasiswa"
                                        value="{{ $mahasiswa_calon->suket_beasiswa }}" disabled
                                        placeholder="{{ $mahasiswa_calon->suket_beasiswa }}">
                                    <label class="input-group-text bg-primary text-white" for="inputGroupFile02">Pilih
                                        File </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>SKTM/Slip Gaji</label>
                                <div class="input-group">
                                    <input class="form-control" id="inputGroupFile02" name="sktm"
                                        value="{{ $mahasiswa_calon->sktm }}" disabled
                                        placeholder="{{ $mahasiswa_calon->sktm }}">
                                    <label class="input-group-text bg-primary text-white" for="inputGroupFile02">Pilih
                                        File </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Piagam Sertifikat</label>
                                <div class="input-group">
                                    <input class="form-control" name="sertifikat"
                                        value="{{ $mahasiswa_calon->sertifikat }}" disabled
                                        placeholder="{{ $mahasiswa_calon->sertifikat }}">
                                    <label class="input-group-text bg-primary text-white" for="inputGroupFile02">Pilih
                                        File </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Motivation Later</label>
                                <div class="input-group">
                                    <input class="form-control" name="motivation_later"
                                        value="{{ $mahasiswa_calon->motivation_later }}" disabled
                                        placeholder="{{ $mahasiswa_calon->motivation_later }}">
                                    <label class="input-group-text bg-primary text-white" for="inputGroupFile02">Pilih
                                        File </label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- </form> --}}
            </div>
        </div>
    @endsection
