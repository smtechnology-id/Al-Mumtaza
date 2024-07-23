@extends('layouts.userlayout')

@section('content')
    <div class="container">
        <div class="card-body">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>




            </div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif
            <form action="{{ route('editProfilePost') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-3" style="">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="{{ asset('images/students-images/' . $profile->photo) }}" class="card-img"
                                        alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Detail Santri</h5>

                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Foto Profile Baru</label>
                                            <input type="file" name="photo" class="form-control"
                                                id="exampleInputnamaLengkap1" aria-describedby="namaLengkapHelp" value="{{ $profile->photo }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                                            <input type="text" name="nama_lengkap" required class="form-control"
                                                id="exampleInputnamaLengkap1" aria-describedby="namaLengkapHelp"
                                                value="{{ $profile->nama_lengkap }}" autofocus>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nisn" class="form-label">Nomor NIS/NISN</label>
                                            <input type="number" name="nisn" required class="form-control"
                                                id="nisn" aria-describedby="namaLengkapHelp"
                                                value="{{ $profile->nisn }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                            <select name="jenis_kelamin" required id="jenis_kelamin" class="form-control">
                                                <option value="Laki-Laki">Laki-Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nik" class="form-label">NIK</label>
                                            <input type="number" name="nik" required class="form-control"
                                                id="nik" aria-describedby="namaLengkapHelp"
                                                value="{{ $profile->nik }}">
                                        </div>

                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Timeline Start -->
                        <h2 class="small-title">History Pelanggaran</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="no_kk" class="form-label">Nomor KK</label>
                                    <input type="number" name="no_kk" required class="form-control" id="no_kk"
                                        aria-describedby="namaLengkapHelp" value="{{ $profile->no_kk }}">
                                </div>
                                <div class="mb-3">
                                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" required class="form-control"
                                        id="tempat_lahir" aria-describedby="namaLengkapHelp"
                                        value="{{ $profile->tempat_lahir }}">
                                </div>
                                <div class="mb-3">
                                    <label for="tanggal_lahir" class="form-label"> Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" required class="form-control"
                                        id="tanggal_lahir" aria-describedby="namaLengkapHelp"
                                        value="{{ $profile->tanggal_lahir }}">
                                </div>
                                <div class="mb-3">
                                    <label for="alamat_lengkap" class="form-label">Alamat Lengkap</label>
                                    <textarea name="alamat_lengkap" required id="" cols="30" rows="3" class="form-control">{{ $profile->alamat_lengkap }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                        <!-- Timeline End -->
                    </div>

                </div>

            </form>
        </div>
    @endsection
