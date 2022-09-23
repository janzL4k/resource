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
                            <th> Status</th>
                        </tr>
                    </thead>
                    <tbody>
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
    </div>
@endsection
