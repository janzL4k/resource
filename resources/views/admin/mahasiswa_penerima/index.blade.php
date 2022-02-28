@extends('layouts.index')

@section('content')
    <div class="section-header">
        <h1>Data Penerima beasiswa</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Penerima</a></div>
            <div class="breadcrumb-item"><a href="#">index</a></div>
            {{-- <div class="breadcrumb-item">Advanced Forms</div> --}}
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h4>Daftar Penerima </h4>
            <div class="card-header-action">
                <a href="{{ route('mahasiswa_penerima.export') }}" class="btn btn-danger btn-icon icon-right">Export Pdf <i class="fas fa-print"></i></a>
              </div>

              <div class="card-header-action">
                <form class="form" method="get" action="{{ route('mahasiswa_penerima.search') }}">
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="Search" id="search" value="{{ request('search') }}">
                        <div class="input-group-btn">
                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

        <div class="card-body p-0">
            <div class="table-responsive table-invoice">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nim</th>
                            <th>Universitas</th>
                            <th>Prodi</th>
                            <th>Semester</th>
                            <th> Status</th>
                        </tr>

                        @foreach ($diterima as $lolos)
                            <tr>
                                <td>{{  $loop->iteration}}</td>
                                <td>{{ $lolos->nama }}</td>
                                <td>{{ $lolos->nim }}</td>
                                <td>{{ $lolos->universitas }}</td>
                                <td>{{ $lolos->prodi }}</td>
                                <td>{{ $lolos->semester }}</td>
                                <td> <div class="btn btn-success">{{ $lolos->status }}</div></td>



                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-body">
            <nav aria-label="...">
              <ul class="pagination">
                <li class="page-item disabled active">
                  <a class="page-link" href="#" tabindex="-1">Jumlah data</a>
                </li>
                <li class="page-item active disabled">
                  <a class="page-link" href="#">{{ $jumlah_penerima }}<span class="sr-only"></span></a>
                </li>

              </ul>
            </nav>
          </div>
    </div>
@endsection
