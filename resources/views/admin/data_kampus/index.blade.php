@extends('layouts.index')

@section('content')
    <div class="section-header">
        <h1>Data Kampus Penerima</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></div>
            <div class="breadcrumb-item">Data Kampus Penerima</div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h4>Daftar Kampus </h4>
            <div class="card-header-action">
                <a href="{{ route('kampus.create') }}" class="btn btn-primary"><i class="fas fa-plus">Tambah Kampus
                    </i></a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="table-1">
                    <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama Kampus</th>
                        <th class="text-center">Jumlah Pendaftar</th>
                        <th class="text-center">Penerima</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($results as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama}}</td>
                            <td>{{ $item->kuota_pendaftar}}</td>
                            <td>{{ $item->kuota_diterima}}</td>

                            <td class="text-center">
                                <div class="d-flex d-inline justify-content-center">
                                    <a href="{{ route('kampus.edit', $item->id) }}" class="btn btn-sm btn-success ml-1"><i
                                            class="fas fa-pencil-alt"></i></a>
                                    <a href="{{ route('kampus.show', $item->id) }}"
                                       class="btn btn-sm btn-primary ml-1"><i class="fas fa-eye"></i></a>
                                    <form action="{{ route('kampus.destroy', $item->id) }}" method="get">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm ml-1"
                                                onclick="return confirm('Apa Anda yakin ?');"><i
                                                class="fas fa-trash"></i></button>
                                    </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
