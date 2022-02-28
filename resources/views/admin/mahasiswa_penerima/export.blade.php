
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<style>
    /* Extra small devices (phones, 600px and down) */
    @media only screen and (max-width: 320px) {
        .header {}

    }

    /* Extra small devices (phones, 600px and down) */
    @media only screen and (max-width: 600px) {
        .title {
            text-align: center;
        }

        #title #img {
            width: 100%;
        }

        .header {
            width: 20%;

        }

    }

    /* Small devices (portrait tablets and large phones, 600px and up) */
    @media only screen and (min-width: 600px) {}

    /* Medium devices (landscape tablets, 768px and up) */
    @media only screen and (min-width: 768px) {
        /* .img{
    width: 10%; */
    }

    /* Large devices (laptops/desktops, 992px and up) */
    @media only screen and (min-width: 992px) {

        .title .img {
            width: 15%;
            float: left;
            position: absolute;
        }

        .title {
            margin-bottom: 35px;
        }


    }

    td {
        font-size: 12px;
    }

    thead {}

</style>

<body>
    <div class="container mt-4" style="margin-bottom: 50px;">
        <div class="title" style="text-align:center; color: rgb(145, 144, 144);">
            <div class="img">
                <img src="https://www.bi.go.id/id/SiteAssets/bi-b.png" style="width: 200px;">
            </div>
            <h5>BANK INDONESIA</h5>
            <h6>SELEKSI BEASISWA BANK INDONESIA</h6>

        </div>
        <div class="line"
            style="width: 100%; height: 6px; background-color: rgb(9, 113, 211); margin-bottom: 2 ">
        </div>
        <div class="title-2 mb-4" style="text-align:center; color: rgb(145, 144, 144); margin-top: 10px;">
            <h6>Hasil Seleksi Berkas Mahasiswa</h6>
            <h6>TAHUN AKADEMIK 2022/2023</h6>
        </div>
        <div class="table-responsive-sm">


            <table class="table table-bordered table-striped text-center mb-4">

                <tbody>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Nim</th>
                        <th>Universitas</th>
                        <th>Prodi</th>
                        <th>Status</th>
                      </tr>
                      @foreach ($mahasiswa_penerima as $item)

                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->nim }}</td>
                        <td>{{ $item->universitas }}</td>
                        <td>{{ $item->prodi }}</td>
                        <td>{{ $item->status }}</td>
                      </tr>
                      @endforeach
            </table>
            <br>

        </div>
    </div>
    <br><br>
</body>

</html>
