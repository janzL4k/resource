@extends('layouts.index')

@section('content')
    <div class="section-header">
        <h1>Pengumuman</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Pengumuman</a></div>
            <div class="breadcrumb-item"><a href="#">index</a></div>
            {{-- <div class="breadcrumb-item">Advanced Forms</div> --}}
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h4>Buat Pengumuman </h4>
            <div class="card-header-action">
                <a href="{{ route('pengumuman.create') }}" class="btn btn-primary"><i class="fas fa-plus">Buat Pengumuman
                    </i></a>
            </div>
        </div>
        <div class="card-header">
            <h4> </h4>
            <div class="card-header-action p-4">

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
                            <th>Judul Pengumuman</th>
                            <th>Deskripsi</th>
                            <th>Acktion</th>

                        </tr>
                        <?php $no = 1; ?>
                        @foreach ($pengumuman as $umum)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $umum->judul }}</td>
                                <td>{{ $umum->deskripsi }}</td>
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
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-body ms-auto">
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
