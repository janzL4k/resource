@extends('layouts.index')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Edit Profile</h1>

            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></div>
                <div class="breadcrumb-item">Edit Profile</div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Profile</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('profil.update') }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email"
                                   class="form-control @error('email') is-invalid @enderror"
                                   value="{{ $profil->email }}" readonly>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tipe">Tipe</label>
                            <input type="text" id="tipe" name="tipe"
                            class="form-control @error('tipe') is-invalid @enderror"
                            value="{{ $profil->tipe }}" readonly>
                            @error('tipe')
                            <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" id="name" name="name"
                            class="form-control @error('name') is-invalid @enderror"
                            value="{{ $profil->name }}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Ubah Password</label>
                            <input type="password" id="password" name="password" placeholder="Masukkan Password Baru"
                                   class="form-control @error('password') is-invalid @enderror">
                                   <p style="color:red">Saat akan ubah password harap dicatat dan simpan, jika tidak ingin ubah password boleh dikosongkan.</p>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" value="Simpan">Update Data</button>
                        </div>
                    </form>
                </div>
            </div>
            </div>

            </div>
            <div class="col-sm-6">
                 <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Profile</h4>
                </div>

                <div class="card-body">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email"
                                   class="form-control @error('email') is-invalid @enderror"
                                   value="{{ $profil->email }}" readonly>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tipe">Tipe</label>
                            <input type="text" id="tipe" name="tipe"
                            class="form-control @error('tipe') is-invalid @enderror"
                            value="{{ $profil->tipe }}" readonly>
                            @error('tipe')
                            <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" id="name" name="name"
                            class="form-control @error('name') is-invalid @enderror"
                            value="{{ $profil->name }}" readonly>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Ubah Password</label>
                            <input type="password" id="password" name="password" placeholder="Masukkan Password Baru"
                                   class="form-control @error('password') is-invalid @enderror"
                                   value="{{ $profil->password }}" readonly>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                            @enderror
                        </div>
                    </form>
                </div>
    </section>

@endsection
