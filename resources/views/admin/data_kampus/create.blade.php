@extends('layouts.index')

@section('content')
    <div class="section-header">
        <h1>Tambah Kampus</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Kampus</a></div>
            <div class="breadcrumb-item"><a href="#">Tambah</a></div>
        </div>
    </div>


    <div class="card col-md-6" >
        <div class="card-header">
            <h4>  </h4>
            <div class="card-header-action">
                <a href="/data_kampus.index" class="btn btn-primary"><i
                        class="fas fa-arraow-back">Kembali</i></a>
            </div>

        </div>
        <div class="section-body">
            <form action="{{ route('kampus.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <h6 class="text-primary">Data Kampus</h6>
                                    <label for="nama">Nama Kampus</label>
                                    <input type="text" class="form-control @error('nama')
                                    is-invalid
                                    @enderror " id="nama" name="nama" >
                                    @error('nama')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="kuota_pendaftar">Kuota Pendaftar</label>
                                        <input type="text" class="form-control @error('kuota_pendaftar')
                                        is-invalid @enderror" name="kuota_pendaftar" id="kuota_pendaftar">
                                        @error('kuota_pendaftar')
                                        <span class="text-danger">{{ $message }}</span>
                                       @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Kuota Diterima</label>
                                        <input type="text" class="form-control @error('kuota_diterima')
                                        is-invalid
                                        @enderror " name="kuota_diterima" id="kuota_diterima">
                                        @error('kuota_diterima')
                                        <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                    </div>
                                </div>


                            </div>
                            <div class=" form-group card-footer">
                                <button class="btn btn-primary mr-1 " type="submit">Simpan</button>
                                <button class="btn btn-secondary" type="reset">Reset</button>
                            </div>
                        </div>

                    </div>

            </form>
        </div>
    </div>
    </div>
    </div>
@endsection
