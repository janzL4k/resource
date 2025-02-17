@extends('layouts.index')

@section('content')
    <div class="section-header">
        <h1>Pengumuman</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></div>
            <div class="breadcrumb-item">Pengumuman</div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h4>Buat Pengumuman </h4>
            <div class="card-header-action">
                <a href="{{ route('pengumuman.create') }}" class="btn btn-primary"><i class="fas fa-plus"> Buat Pengumuman
                    </i></a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="table-1">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Judul Pengumuman</th>
                            <th class="text-center">Deskripsi Pengumuman</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($pengumuman as $umum)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">{{ $umum->judul }}</td>
                            <td class="text-center">{{ $umum->deskripsi }}</td>
                            <td class="text-center">
                                <div class="d-flex d-inline justify-content-center">
                                    <a href="{{ route('pengumuman.edit', $umum->id) }}"
                                       class="btn btn-sm btn-success ml-1"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="{{ route('pengumuman.show', $umum->id) }}"
                                       class="btn btn-sm btn-primary ml-1"><i class="fas fa-eye"></i></a>
                                    <form action="{{ route('pengumuman.destroy', $umum->id) }}" method="get">
                                        @csrf

                                        <button type="submit" class="btn btn-danger btn-sm ml-1"
                                                onclick="return confirm('Apa Anda yakin ?');"><i
                                                class="fas fa-trash"></i></button>
                                    </form>

                                </div>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>

    </div>
@endsection
