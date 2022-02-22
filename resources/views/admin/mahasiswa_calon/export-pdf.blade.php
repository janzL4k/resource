<style>
    .genbi img {
        width: 200px;
        float: left;
    }

    .bi img {
        width: 250px;

    }

    .cover h3 {
        margin-top: 10px;
        float: left;
    }

    .row {
        margin-left: 4%;
    }

    .list ul li {
        list-style-type: none;
    }

</style>

<body>


    {{-- <img src="{{ public_path('/images/cover.png') }}" alt=""> --}}
    <center>
        <img src="https://www.bi.go.id/id/SiteAssets/bi-b.png" style="width: 50%;">
        <h1 style="margin-top: -2%;">Berkas Pendaftar Beasiswa Bank Indonesia Tahun 2022/2023</h1>
    </center>

    </div>
    <div class="content" style="margin-left: 10%">
        <div class="card-header" style="background-color: rgb(23, 199, 223); width: 130px;">
            <h3 style=" padding: 1px; padding-left: 10px">Data Diri</h3>
        </div>
        <div class="row">
            <div class=" col" style=" width: 50%; float: left ">
                <ul class="list" style="list-style-type:none; padding: 1px;">
                    <li> <b>Nama </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp; : {{ $exportpdf->nama }}</li>
                    <li><b>Nim</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;: {{ $exportpdf->nim }}</li>
                    <li><b>Prodi</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; : {{ $exportpdf->prodi }}</li>
                    <li><b>Semester</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                        {{ $exportpdf->semester }}</li>
                    <li><b>Universtas</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                        {{ $exportpdf->universitas }}</li>
                    <li><b>Alamat</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp; : {{ $exportpdf->alamat }}</li>
                    <li><b style="padding-right: 2%;">Tanggal Lahir</b>&nbsp; : {{ $exportpdf->tgl_lahir }}
                    </li>
                    <li><b style="padding-right: 2%;">Tempat Lahir</b> &nbsp; :{{ $exportpdf->tmp_lahir }}</li>
                    <li><b style="padding-right: 0%;">Jenis Kelamin</b>&nbsp;&nbsp;&nbsp;&nbsp; :{{ $exportpdf->jk }}
                    </li>
                    <li><b style="padding-right: 10%;">Agama</b> : {{ $exportpdf->agama }}</li>
                    <li><b style="padding-right: 5%;">Nama Ayah</b> :&nbsp;{{ $exportpdf->ayah }}</li>
                    <li><b>Pekerjaan Ayah</b> &nbsp;:{{ $exportpdf->pekerjaan_ayah }}</li>
                    <li><b>Nama Ibu</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                        {{ $exportpdf->ibu }}</li>
                    <li><b>Pekerjaan Ibu</b> &nbsp;&nbsp;&nbsp;&nbsp;: {{ $exportpdf->pekerjaab_ibu }}</li>
                    <li><b>Jumlah saudara</b>&nbsp;&nbsp;: {{ $exportpdf->saudara }}</li>

                </ul>
            </div>
            <div class="row-img" style=" position: absolute; margin-left: 50%;">
                <div class="card-body">
                    <h5>Foto Pendaftar</h5>
                    <img src=" {{ asset('/data/foto/' . $exportpdf->foto) }} " style="width: 200px; height:300px;">
                </div>
            </div>
        </div>

        <br>
        <div class="card mt-4 mb-4">
            <ul class="list " style="margin-left: 2%;">
                <br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br>
            </ul>
            <div class="card">
                <div class="card-header" style="background-color: rgb(23, 199, 223); width: 130px; height: 30px;">
                    <h3 style=" padding: 1px; padding-left: 10px">Data Berkas</h3>
                </div>
                <div class="row">
                    <h5>1. Foto Pendaftar</h5>
                    <img src="{{ asset('/data/foto/' . $exportpdf->foto) }}" width="50%;">
                </div>
            </div>

            <div class="row">
                <div class="card-body">
                    <h5>2. KTP (Kartu Tanda Penduduk)</h5>
                    <img src="{{ asset('/data/foto/' . $exportpdf->ktp) }}" width="50%;">
                </div>
            </div>
            <div class="row">
                <div class="card-body">
                    <h5>3. Kartu Keluarga</h5>
                    <img src="{{ asset('/data/foto/' . $exportpdf->kk) }}" width="50%;">
                </div>
            </div>
            <div class="row">
                <div class="card-body">
                    <h5>4. Transkip Nilai</h5>
                    <embed type="application/pdf" src="{{ asset('/data/pdf/' . $exportpdf->transkip) }}" width="900"
                        height="800"></embed>

                </div>
            </div>
            <div class="row">
                <div class="card-body">
                    <h5>5. Kartu Hasil Studi</h5>
                    <embed type="application/pdf" src="{{ asset('/data/pdf/' . $exportpdf->khs) }}" width="900"
                        height="800"></embed>
                </div>
            </div>
            <div class="row">
                <div class="card-body">
                    <h5>6. Surat Keterangan Beasiswa & FORM A1</h5>
                    <object type="application/pdf" data="{{ asset('/data/foto/' . $exportpdf->suket_beasiswa) }}"
                        width="900" height="800">
                    </object>
                </div>
            </div>
            <div class="row">
                <div class="card-body">
                    <h5>7. SKTM (Surat Keterangan Kurang Mampu)</h5>
                    <embed type="application/pdf" src="{{ asset('/data/foto/' . $exportpdf->sktm) }}" width="900"
                        height="800"></embed>
                </div>
            </div>

            <div class="row">
                <div class="card-body">
                    <h5>8. Piagam Sertifikat (Berkas Tambahan)/Slip Gaji Ortua</h5>
                    <object type="application/pdf" data=" {{ asset('/data/pdf/' . $exportpdf->sertifikat) }}"
                        width="900" height="800">
                    </object>
                </div>
            </div>

            <div class="row">
                <div class="card-body">
                    <h5>9. Motivation Later</h5>
                    <object type="application/pdf" data=" {{ asset('/data/pdf/' . $exportpdf->motivation_later) }}"
                        width="900" height="800">
                </div>
            </div>
        </div>



    </div>
</body>
