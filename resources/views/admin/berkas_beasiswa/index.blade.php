@extends('layouts.index')

@section('content')
    <div class="section-header">
        <h1>Upload Berkas</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Forms</a></div>
            <div class="breadcrumb-item">Advanced Forms</div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>Berkas Pendaftar </h4>
            <div class="card-header-action">
                <a href="{{ route('berkas.create') }}" class="btn btn-primary"><i class="fas fa-plus">Tambah Berkas
                    </i></a>
            </div>
        </div>
        <div class="card-header">
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
                            <th>Alamat</th>
                            <th>Jenis Kelamin </th>
                            <th> Agama</th>
                            <th> Action</th>

                        </tr>
                        @foreach ($datas as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->nim }}</td>
                                <td>{{ $item->universitas }}</td>
                                <td>{{ $item->prodi }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->jk }} </td>
                                <td>{{ $item->agama }}</td>
                                <td class="text-center">
                                    <div class="d-flex d-inline justify-content-center">
                                        {{-- <a href="/berkas/edit" class="btn btn-sm btn-success ml-1"><i
                                                class="fas fa-pencil-alt"></i></a> --}}
                                        <a href="{{ route('berkas.show', $item->id) }}" class="btn btn-sm btn-primary ml-1"><i
                                                class="fas fa-eye"></i></a>
                                        <form action="{{ route('berkas.destroy', $item->id) }}" method="post">
                                            @csrf

                                            <button type="submit" class="btn btn-danger btn-sm ml-1"
                                                onclick="return confirm('Apa Anda yakin ?');"><i
                                                    class="fas fa-trash"></i></button>
                                        </form>

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
