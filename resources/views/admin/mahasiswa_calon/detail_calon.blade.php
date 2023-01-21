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
            <h4>Validasi Penerima </h4>
            <div class="card-header-action d-flex">
                <a href="{{ route('mahasiswa_calon.index') }}" class="btn btn-primary"><i
                        class="fas fa-arraow-back">Kembali</i></a>
                <form action="{{ route('set_lolos.update', $mahasiswa_calon->id) }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-success btn-sm ml-1 "
                            onclick="return confirm('Mahasiswa Akan Di Luluskan ?');"><i class="fas fa-check-circle"></i>
                        Set
                        Lolos
                    </button>
                </form>
            </div>
        </div>

        <div class="section-body">
            <div class="text-center" style="text-align: center">
                <center>
                    <img src="https://www.bi.go.id/id/SiteAssets/bi-b.png" style="width: 50%;">
                    <h4 style="margin-top: -2%;">Berkas Pendaftar Beasiswa Bank Indonesia Tahun 2022/2023</h4>
                </center>
            </div>
            <br>
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="card-body">
                        <h6 class="text-primary">Detail Mahasiswa</h6>
                        <table class="table">
                            <tr>
                                <th>Nama</th>
                                <td>{{ $mahasiswa_calon->nama }}</td>
                            </tr>
                            <tr>
                                <th>Nim</th>
                                <td>{{ $mahasiswa_calon->nim }}</td>
                            </tr>
                            <tr>
                                <th>Universitas</th>
                                <td>{{ $mahasiswa_calon->universitas }}</td>
                            </tr>
                            <tr>
                                <th>Prodi</th>
                                <td>{{ $mahasiswa_calon->prodi }}</td>
                            </tr>
                            <tr>
                                <th>Semester</th>
                                <td>{{ $mahasiswa_calon->semester }}</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>{{ $mahasiswa_calon->alamat }}</td>
                            </tr>
                            <tr>
                                <th>Tgl Lahir</th>
                                <td>{{ $mahasiswa_calon->tgl_lahir }}</td>
                            </tr>
                            <tr>
                                <th>Tempat Lahir</th>
                                <td>{{ $mahasiswa_calon->temp_lahir }}</td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>{{ $mahasiswa_calon->jenis_kelamin }}</td>
                            </tr>
                            <tr>
                                <th>Agama</th>
                                <td>{{ $mahasiswa_calon->agama }}</td>
                            </tr>
                            <tr>
                                <th>Nama Ayah</th>
                                <td>{{ $mahasiswa_calon->ayah }}</td>
                            </tr>
                            <tr>
                                <th>Pekerjaan Ayah</th>
                                <td>{{ $mahasiswa_calon->pekerjaan_ayah }}</td>
                            </tr>
                            <tr>
                                <th>Nama Ibu</th>
                                <td>{{ $mahasiswa_calon->ibu }}</td>
                            </tr>
                            <tr>
                                <th>Pekerjaan Ibu</th>
                                <td>{{ $mahasiswa_calon->perkjaan_ibu }}</td>
                            </tr>
                            <tr>
                                <th>Jumlah Saudara</th>
                                <td>{{ $mahasiswa_calon->saudara }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-12 col-md-4 ">
                    <div class="card-body">
                        <div class="form-group">
                            <div class="input-group">
                                <img src="{{ $mahasiswa_calon->foto }}" width="100%" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr align=“center” size=“2” width=“50%”>

            <div class="container">
                <h6 class="text-primary">Berkas Pendaftar</h6>
                <div class="card mt-4 mb-4">
                    <div class="row">
                        <div class="card-body">
                            <h5>2. KTP (Kartu Tanda Penduduk)</h5>
                            <img src="{{ $mahasiswa_calon->ktp }}" width="100%;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="card-body">
                            <h5 class="mb-2">3. Kartu Keluarga</h5>
                            <img src="{{ $mahasiswa_calon->kk }}" width="100%;">
                            <br>
                            <h5>4. Transkip Nilai pdf</h5>
{{--                            <img src="{{ $mahasiswa_calon->transkip }}" width="100%;">--}}
                            <br>
                            <h5>5.Form A1</h5>
                            <img src="{{ $mahasiswa_calon->form_a1 }}" width="100%;">
                            <br>
                            <h5>6. Surat Keterangan Beasiswa</h5>
                            <img src="{{ $mahasiswa_calon->suket_beasiswa }}" width="100%;">
                            <br>
                            <h5>7. SKTM (Surat Keterangan Kurang Mampu)</h5>
                            <img src="{{ $mahasiswa_calon->sktm }}" width="100%;">
                            <br>
                            <h5>8. Piagam Sertifikat (Berkas Tambahan)/Slip Gaji Ortua pdf</h5>
{{--                            <img src="{{ $mahasiswa_calon->sertifikat }}" width="100%;">--}}
                            <br>
                            <h5>9. Motivation Later pdf</h5>
{{--                            <img src="{{ $mahasiswa_calon->motivation_later }}" width="100%;">--}}
                        </div>
                    </div>
                </div>
            </div>
@endsection
