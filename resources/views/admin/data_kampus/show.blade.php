@extends('layouts.index')

@section('title')
    Detail Kampus
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Detail Kampus</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></div>
                <div class="breadcrumb-item">Detail Kampus</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Detail Kampus</h4>
                            <div class="card-header-action">
                                <a href="{{route('data.kampus.index')}}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <tr>
                                    <th>Nama</th>
                                    <td>{{ $kampus->nama }}</td>
                                </tr>
                                <tr>
                                    <th>Jumlah Pendaftar</th>
                                    <td>{{ $kampus->kuota_pendaftar }}</td>
                                </tr>
                                <tr>
                                    <th>Penerima</th>
                                    <td>{{ $kampus->kuota_diterima }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
