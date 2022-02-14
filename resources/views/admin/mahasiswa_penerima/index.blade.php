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
            <div class="card-header-action p-4">
                <div class="dropdown d-inline">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Urut berdasarkan
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item has-icon" href="#"><i class="far fa-clock"></i>Terbaru</a>
                      <a class="dropdown-item has-icon" href="#"><i class="fas fa-building"></i>Kampus</a>
                    </div>
                  </div>
            </div>
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
                            <th> Status</th>
                        </tr>
                        <?php $no=1; ?>
                        @foreach ($mahasiswa_penerima as $lolos)
                            <tr>
                                <td>{{ $no++ }}</td>
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
