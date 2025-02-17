@extends('layouts.index')

@section('title')
    Detail Pengumuman
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Detail Pengumuman</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></div>
                <div class="breadcrumb-item">Detail Pengumuman</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Detail Pengumuman</h4>
                            <div class="card-header-action">
                                <a href="{{route('pengumuman.index')}}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <tr>
                                    <th>Judul</th>
                                    <td>{{ $details->judul }}</td>
                                </tr>
                                <tr>
                                    <th>Deskripsi</th>
                                    <td>{{ $details->deskripsi }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
