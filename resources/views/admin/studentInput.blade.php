@extends('admin.layouts.app')

@section('content')
    <div class="container my-3">
        <div class="card">
            <h5 class="card-header">Input Siswa</h5>
            <div class="card-body">
                <h5 class="card-title">Form Input Data Siswa</h5>
                <form action="{{ route('studentCreate') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row justify-content-start">
                        <div class="col-md-8">
                            <div class="form-group my-3">
                                <label for="nama_lengkap">Nama Lengkap <span style="color: red">*</span> </label>
                                <input type="text" required class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" value="{{ old('nama_lengkap') }}">
                                @error('nama_lengkap')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group my-3">
                                <label for="nomor_siswa">No Siswa / Stambuk <span style="color: red">*</span> </label>
                                <input type="number" required class="form-control" name="nomor_siswa" id="nomor_siswa" placeholder="Nomor Siswa" value="{{ old('nomor_siswa') }}">
                                @error('nomor_siswa')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group my-3">
                                <label for="email">Email<span style="color: red">*</span> </label>
                                <input type="email" required class="form-control" name="email" id="email" placeholder="Email" value="{{ old('email') }}">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- ... -->
                            <div class="form-group my-3">
                                <label for="password">Password <span style="color: red">*</span> </label>
                                <input type="password" required class="form-control" name="password" id="password" placeholder="********">
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group my-3">
                                <label for="confirmation_password">Konfirmasi Password <span style="color: red">*</span> </label>
                                <input type="password" required class="form-control" name="password_confirmation" id="password_confirmation" placeholder="********">
                                @error('confirmation_password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
@endsection
