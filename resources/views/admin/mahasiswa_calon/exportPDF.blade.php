<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Detail Mahasiswa Calon</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<style>
    .col {
        font-weight: bold;
    }

    @page {
        size: a4 portrait;
        margin: 0.9;
        padding: 0.9; // you can set margin and padding 0
    }

    table {
        border-collapse: collapse;
        width: 100%;
        font-family: Times New Roman;
        font-size: 12px;
    }

    th,
    td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

</style>

<body>
<div class=" mt-4">
    <div class="text-center" style="text-align: center">
        <center>
            <img src="https://www.bi.go.id/id/SiteAssets/bi-b.png" style="width: 50%;">
            <h4 style="margin-top: -2%;">Berkas Pendaftar Beasiswa Bank Indonesia Tahun 2022/2023</h4>
        </center>
    </div>
    <br>
    <div class="container">
        <div class="mt-2">
            <div class="profile mb-4">
                {{--                @if ($data['mahasiswaProgramVokasi']->userMahasiswa->link_gambar_profil)--}}
                {{--                <img--}}
                {{--                                            src="{{ public_path('gambar/mahasiswa/' . $data['mahasiswaProgramVokasi']->userMahasiswa->link_gambar_profil) }}"--}}
                {{--                    style="width: 140px; margin-right:30px; float: right">--}}
                {{--                                @else--}}
                <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPyGNr2qL63Sfugk2Z1-KBEwMGOfycBribew&usqp=CAU"
                    style="width: 140px; margin-right:30px; float: right">
                {{--                                @endif--}}
            </div>
            <dic class="center mb-2">
                <h6 class="">Detail Calon Mahasiswa</h6>
            </dic>
            <div class="row">
                <div class="col-md-8">
                    <table class="table-borderless">
                        <tr>
                            <th><small><b>Nama Lengkap</b></small></th>
                            <td><small>:{{ $exportpdf->nama }}</small></td>
                        </tr>
                        <tr>
                            <th><small><b>Nim Mahasiswa</b></small></th>
                            <td><small>:{{ $exportpdf->nim }}</small></td>
                        </tr>
                        <tr>
                            <th><small><b>Prodi</b></small></th>
                            <td><small>:{{ $exportpdf->prodi }}</small></td>
                        </tr>
                        <tr>
                            <th><small><b>Semester</b></small></th>
                            <td><small>:{{ $exportpdf->semester }}</small></td>
                        </tr>
                        <tr>
                            <th><small><b>Universitas</b></small></th>
                            <td><small>:{{ $exportpdf->universitas }}</small></td>
                        </tr>
                        <tr>
                            <th><small><b>Alamat</b></small></th>
                            <td><small>:{{ $exportpdf->alamat }}</small></td>
                        </tr>
                        <tr>
                            <th><small><b>Tanggal Lahir</b></small></th>
                            <td><small>:{{ $exportpdf->tgl_lahir }}</small></td>
                        </tr>
                        <tr>
                            <th><small><b>Jenis Kelamik</b></small></th>
                            <td><small>:{{ $exportpdf->jenis_kelamin }}</small></td>
                        </tr>
                        <tr>
                            <th><small><b>Agama</b></small></th>
                            <td><small>:{{ $exportpdf->agama }}</small></td>
                        </tr>
                        <tr>
                            <th><small><b>Nama Ayah</b></small></th>
                            <td><small>:{{ $exportpdf->ayah }}</small></td>
                        </tr>
                        <tr>
                            <th><small><b>Nama Ibu</b></small></th>
                            <td><small>:{{ $exportpdf->ibu }}</small></td>
                        </tr>
                        <tr>
                            <th><small><b>Pekerjaan Ayah</b></small></th>
                            <td><small>:{{ $exportpdf->pekerjaan_ayah }}</small></td>
                        </tr>
                        <tr>
                            <th><small><b>Pekerjaan Ibu</b></small></th>
                            <td><small>:{{ $exportpdf->pekerjaan_ibu }}</small></td>
                        </tr>
                        <tr>
                            <th><small><b>Jumlah Saudara</b></small></th>
                            <td><small>:{{ $exportpdf->saudara }}</small></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="card mt-4 mb-4">
                <div class="row">
                    <div class="card-body">
                        <h5>2. KTP (Kartu Tanda Penduduk)</h5>
                        <img src="{{ asset('/data/foto/' . $exportpdf->ktp) }}" width="100%;">
                    </div>
                </div>
                <div class="row">
                    <div class="card-body">
                        <h5>3. Kartu Keluarga</h5>
                        <img src="{{ asset('/data/foto/' . $exportpdf->kk) }}" width="100%;">
                        <br>
                        <h5>4. Transkip Nilai</h5>
                        <iframe src="{{asset('/data/pdf/ml.pdf.pdf#toolbar=0')}}" align="top" height="620" width="100%"
                                frameborder="0" scrolling="auto"></iframe>
                        {{--                        <embed type="application/pdf" src="{{ asset('data/pdf/' . $exportpdf->transkip.'pdf#toolbar=0') }}" width="100%"></embed>--}}
                        {{--                        <iframe src="{{public_path('data/pdf/' . $exportpdf->transkip) }}" width="100%" height="500px"></iframe>--}}
                    </div>
                </div>
                <div class="row">
                    <div class="card-body">

                    </div>
                </div>
                <div class="row">
                    <div class="card-body">
                        <h5>5.Form A1</h5>
                        <embed type="application/pdf" src="{{ asset('/data/pdf' . $exportpdf->khs) }}" width="900"
                               height="800"></embed>
                    </div>
                </div>
                <div class="row">
                    <div class="card-body">
                        <h5>6. Surat Keterangan Beasiswa</h5>
                        <object type="application/pdf" data="{{public_path('data/pdf/transkip.pdf')}}" width="600"
                                height="400"></object>
                        <iframe src="{{public_path('data/pdf/transkip.pdf')}}" width="600" height="400"></iframe>
                        <embed type="application/pdf" src="{{public_path('data/pdf/transkip.pdf')}}" width="600"
                               height="400"></embed>
                    </div>
                </div>
                <div class="row">
                    <div class="card-body">
                        <h5>7. SKTM (Surat Keterangan Kurang Mampu)</h5>
                        <embed type="application/pdf" src="{{ public_path('/data/pdf/' . $exportpdf->sktm) }}"
                               width="900"
                               height="800"></embed>
                    </div>
                </div>
                <div class="row">
                    <div class="card-body">
                        <h5>8. Piagam Sertifikat (Berkas Tambahan)/Slip Gaji Ortua</h5>
                        <object type="application/pdf" data=" {{ public_path('/data/pdf/' . $exportpdf->sertifikat) }}"
                                width="900" height="800">
                        </object>
                    </div>
                </div>
                <div class="row">
                    <div class="card-body">
                        <h5>9. Motivation Later</h5>
                        <object type="application/pdf"
                                data="{{ public_path('/data/foto/' . $exportpdf->motivation_later) }}"
                                width="900" height="800">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
