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
            <div class="card-header-action">
                <form>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
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

                            <th> Action</th>
                        </tr>
                        @foreach ($mahasiswa_calon as $calon)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $calon->nama }}</td>
                                <td>{{ $calon->nim }}</td>
                                <td>{{ $calon->universitas }}</td>
                                <td>{{ $calon->prodi }}</td>

                                <td>{{ $calon->semester }}</td>

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
        <div class="card-body float-right">
            <nav aria-label="...">
              <ul class="pagination">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active">
                  <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
          </div>
    </div>
@endsection
