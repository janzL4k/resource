@extends('layouts.index')

@section('content')
    <div class="section-header">
        <h1>Data Calon Penerima</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Calon Penerima</a></div>
            <div class="breadcrumb-item"><a href="#">index</a></div>
            {{-- <div class="breadcrumb-item">Advanced Forms</div> --}}
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h4>Daftar Calon </h4>
            <h4></h4>
            {{-- <div class="card-header-action p-4">
                <div class="dropdown d-inline">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Urut berdasarkan
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item has-icon" href="{{route('mahasiswa_calon.index') }}"><i class="far fa-clock"></i>Terbaru</a>
                      <form class="form" method="get" action="{{route('mahasiswa_calon.kampus') }}">
                             <a class="dropdown-item has-icon" href=""><i class="fas fa-building"></i>Kampus</a>

                    </form>
                        </div>
                  </div>
            </div> --}}
            <div class="card-header-action">
                <form class="form" method="get" action="{{ route('mahasiswa_calon.search') }}">
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
                            <th>Status Mahasiswa</th>

                            <th> Action</th>
                        </tr>
                        @foreach ($calons as $calon)
                            <tr>
                                <td>{{  $loop->iteration }}</td>
                                <td>{{ $calon->nama }}</td>
                                <td>{{ $calon->nim }}</td>
                                <td>{{ $calon->universitas }}</td>
                                <td>{{ $calon->prodi }}</td>

                                <td>{{ $calon->semester }}</td>
                                <td>{{ $calon->status }}</td>

                                <td class="text-center">
                                    <div class="d-flex d-inline justify-content-center">
                                        <a href="{{ route('mahasiswa_calon.show', $calon->id) }}" class="btn btn-sm btn-primary ml-1"><i class="fas fa-eye"></i></a>
                                        <a href="{{ route('mahasiswa_calon.exportpdf', $calon->id) }}" class="btn btn-sm btn-success ml-1"><i class="fas fa-print"></i></a>


                                    </div>
                                </td>

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
                  <a class="page-link" href="#">{{ $jumlah_calon }}<span class="sr-only"></span></a>
                </li>

              </ul>
            </nav>
          </div>

    </div>
@endsection
