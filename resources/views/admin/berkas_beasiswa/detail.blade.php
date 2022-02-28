@extends('layouts.index')

@section('content')
    <div class="section-header">
        <h1>Detail Berkas</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Berkas</a></div>
            <div class="breadcrumb-item"><a href="#">Detail</a></div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h4>Berkas Pendaftar </h4>
            <div class="card-header-action">
                <a href="{{ route('berkas.index') }}" class="btn btn-primary"><i class="fas fa-arraow-back">Kembali</i></a>
            </div>
        </div>
        <div class="section-body">
            <form action="" method="post">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">

                        <div class="card">

                            <div class="card-body">
                                <div class="form-group">
                                    <h6 class="text-primary">Data Diri</h6>
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" disabled
                                        placeholder="{{ $detail_berkas->nama }}">
                                </div>
                                <div class="form-group">
                                    <label>Nim</label>
                                    <input type="text" class="form-control" disabled
                                        placeholder="{{ $detail_berkas->nim }}">
                                </div>
                                <div class="form-group">
                                    <label class=" text-md-right text-left">Address</label>
                                    <div class="">
                                        <textarea class="form-control" name="address" disabled
                                            placeholder="{{ $detail_berkas->alamat }}"></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" class="form-control datemask" disabled value="{{ $detail_berkas->tgl_lahir}}" placeholder="{{ $detail_berkas->tgl_lahir }}"
                                            name="tgl_lahir">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Tempat Lahir</label>
                                        <input type="text" class="form-control" name="tmp_lahir" disabled value="{{ $detail_berkas->tmp_lahir}}" placeholder="{{ $detail_berkas->tmp_lahir }}">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Jenis Kelamin</label>
                                        <select class="form-control form-control-lg" name="jk" disabled
                                            value="{{ $detail_berkas->jk }}">
                                            <option>{{ $detail_berkas->jk }} </option>

                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Agama</label>
                                        <select class="form-control form-control-lg" name="agama" disabled
                                            value="{{ $detail_berkas->agama }}">
                                            <option>{{ $detail_berkas->agama }} </option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Nama Ayah</label>
                                        <input type="text" class="form-control" name="ayah" disabled value="{{ $detail_berkas->ayah}}" placeholder="{{ $detail_berkas->ayah }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Pekerjaan Ayah</label>
                                        <input type="text" class="form-control" name="pekerjaan_ayah" disabled value="{{ $detail_berkas->pekerjaan_ayah}}" placeholder="{{ $detail_berkas->pekerjaan_ayah }}">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Nama Ibu</label>
                                        <input type="text" class="form-control" name="ibu" disabled value="{{ $detail_berkas->ibu}}" placeholder="{{ $detail_berkas->ibu }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Pekerjaan Ibu</label>
                                        <input type="text" class="form-control" name="pekerjaan_ibu" disabled value="{{ $detail_berkas->pekerjaan_ibu}}" placeholder="{{ $detail_berkas->pekerjaan_ibu }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Saudara</label>
                                    <input type="text" class="form-control" disabled
                                        placeholder="{{ $detail_berkas->saudara }}">
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
                                    <input type="text" class="form-control" disabled
                                        placeholder="{{ $detail_berkas->foto }}">
                                </div>

                                <div class="form-group">
                                    <label>KTP</label>
                                    <input type="text" class="form-control" disabled
                                        placeholder="{{ $detail_berkas->ktp }}">
                                </div>

                                <div class="form-group">
                                    <label>Kartu Keluarga</label>
                                    <input type="text" class="form-control" disabled
                                        placeholder="{{ $detail_berkas->kk }}">
                                </div>

                                <div class="form-group">
                                    <label>Transkip Nilai</label>
                                    <input type="text" class="form-control" disabled
                                        placeholder="{{ $detail_berkas->transkip }}">

                                </div>

                                <div class="form-group">
                                    <label>Form A1</label>
                                    <input type="text" class="form-control" disabled
                                        placeholder="{{ $detail_berkas->khs }}">

                                </div>
                                <div class="form-group">
                                    <label>Surat Rekomendasi Beasiswa</label>
                                    <input type="text" class="form-control" disabled
                                        placeholder="{{ $detail_berkas->suket_beasiswa }}">

                                </div>
                                <div class="form-group">
                                    <label>SKTM/Slip Gaji</label>
                                    <input type="text" class="form-control" disabled
                                        placeholder="{{ $detail_berkas->sktm }}">

                                </div>
                                <div class="form-group">
                                    <label>Piagam Sertifikat</label>
                                    <input type="text" class="form-control" disabled
                                        placeholder="{{ $detail_berkas->sertifikat }}">

                                </div>
                                <div class="form-group">
                                    <label>Motivation Later</label>
                                    <input type="text" class="form-control" disabled
                                        placeholder="{{ $detail_berkas->motivation_later }}">

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
        </div>
        </form>
    </div>
    </div>
@endsection
