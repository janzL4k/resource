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
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="table-1">
                    <thead>
                    <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nim</th>
                            <th>Universitas</th>
                            <th>Prodi</th>
                            <th>Semester</th>
                            <th>Status Berkas</th>
                            <th> Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $data['listCalon'] as $calon )
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $calon->nama }}</td>
                                <td>{{ $calon->nim }}</td>
                                <td>{{ $calon->universitas }}</td>
                                <td>{{ $calon->prodi }}</td>
                                <td>{{ $calon->semester }}</td>
                                <td> <span class="badge badge-warning">{{ $calon->status }}</span></td>
                                <td class="text-center">
                                    <div class="d-flex d-inline justify-content-center">
                                        <a href="{{ route('mahasiswa_calon.show', $calon->id) }}" class="btn btn-sm btn-primary ml-1">Review Berkas</a>
                                        <a href="{{ route('mahasiswa_calon.exportpdf', $calon->id) }}" class="btn btn-sm btn-success ml-1"><i class="fas fa-print"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
