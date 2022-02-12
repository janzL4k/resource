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
                <li><b>Universtas</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $exportpdf->universitas }}</li>
                <li><b>Alamat</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp; : {{ $exportpdf->alamat }}</li>
                <li><b style="padding-right: 2%;">Tanggal Lahir</b>&nbsp; : {{ $exportpdf->tgl_lahir }}
                </li>
                <li><b style="padding-right: 2%;">Tempat Lahir</b> &nbsp; :{{ $exportpdf->tmp_lahir }}</li>
                <li><b style="padding-right: 0%;">Jenis Kelamin</b>&nbsp;&nbsp;&nbsp;&nbsp; :{{ $exportpdf->jk }}</li>
                <li><b style="padding-right: 10%;">Agama</b> : {{ $exportpdf->agama }}</li>
                <li><b style="padding-right: 5%;">Nama Ayah</b> :{{ $exportpdf->ayah }}</li>
                <li><b>Pekerjaan Ayah</b> &nbsp;:{{ $exportpdf->pekerjaan_ayah }}</li>
                <li><b>Nama Ibu</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $exportpdf->ibu }}</li>
                <li><b>Pekerjaan Ibu</b> &nbsp;&nbsp;&nbsp;&nbsp;: {{ $exportpdf->pekerjaab_ibu }}</li>
                <li><b>Jumlah saudara</b>&nbsp;&nbsp;: {{ $exportpdf->saudara }}</li>

            </ul>
        </div>
        <div class="row-img" style="background: blue; width: 260px; position: absolute; margin-left: 50%;">
            <div class="card-body">
                <h5>Foto Pendaftar</h5>
                <img src=" {{ 'data/foto/'.$exportpdf->foto }} " style="width: 300px;">
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
                <h5>1. Foto KTP</h5>
                <img src="{{ 'data/foto/'.$exportpdf->ktp }}" width="100%;">
            </div>
        </div>

        <div class="row">
            <div class="card-body">
                <h5>2. Foto KK</h5>
                <img src="{{ 'data/foto/'.$exportpdf->ktp }}" alt="">
            </div>
        </div>
        <div class="row">
            <div class="card-body">
                <h5>3. Foto kk</h5>
                <img src="{{ 'data/foto/'.$exportpdf->kk }}" alt="">
            </div>
        </div>
        <div class="row">
            <div class="card-body">
                <h5>4. Transkip Nilai</h5>
                <img src="" alt="">
            </div>
        </div>
        <div class="row">
            <div class="card-body">
                <h5>5. Foto KTP</h5>
                <img src="" alt="">
            </div>
        </div>
        <div class="row">
            <div class="card-body">
                <h5>6. Foto KTP</h5>
                <img src="" alt="">
            </div>
        </div>

        <div class="row">
            <div class="card-body">
                <h5>7. Foto KTP</h5>
                <img src="" alt="">
            </div>
        </div>
    </div>



</div>
</body>
