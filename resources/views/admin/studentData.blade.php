@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Mumtaza</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Data Guru</a></li>
                        <li class="breadcrumb-item active">Welcome!</li>
                    </ol>
                </div>
                <h4 class="page-title">Data Guru</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="header-title">Basic Data Table</h4>
                    <a href="{{ route('studentInput') }}" class="btn btn-primary"><i class="bi bi-plus-circle-fill"></i>
                        Tambah Siswa</a>
                    <p class="text-muted mb-0">
                        Berikut Adalah Data Siswa Di Pondok Pesantren Mumtaza
                    </p>
                </div>

                <div class="card-body">
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
                    <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nomor Siswa</th>
                                <th>Nama Siswa</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($studentData as $data)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $data->nomor_siswa }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#info-header-modal{{ $data->id_user }}"><i
                                                class="bi bi-eye-fill"></i></button>

                                        <a href="" class="btn btn-primary btn-sm"><i class="bi bi-pen"></i></a>
                                        {{-- Delete Button + Modal --}}
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#danger-alert-modal{{ $data->id_user }}"><i
                                                class="bi bi-trash"></i></button>




                                        <div id="danger-alert-modal{{ $data->id_user }}" class="modal fade" tabindex="-1"
                                            role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content modal-filled bg-danger">
                                                    <div class="modal-body p-4">
                                                        <div class="text-center">
                                                            <i class="ri-close-circle-line h1"></i>
                                                            <h4 class="mt-2">Konfirmasi Penghapusan</h4>
                                                            <p class="mt-3">Anda Yakin Ingin Menghapus Data Ini ? <br>
                                                                Setelah Konfirmasi Data Tidak Akan Bisa Dikembalikan</p>
                                                            <a href="{{ route('studentDelete', ['id' => $data->id_user]) }}"
                                                                class="btn btn-light my-2">Hapus</a>
                                                        </div>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                        {{-- Detail Modal --}}
                                        <div id="info-header-modal{{ $data->id_user }}" class="modal fade" tabindex="-1"
                                            role="dialog" aria-labelledby="info-header-modalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header modal-colored-header bg-info">
                                                        <h4 class="modal-title" id="info-header-modalLabel">Detail Siswa
                                                        </h4>
                                                        <button type="button" class="btn-close btn-close-white"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h5 class="mt-0">Data {{ $data->name }}</h5>
                                                        <table class="table">
                                                            <tr>
                                                                <td>Nama</td>
                                                                <td>:</td>
                                                                <td>{{ $data->name }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Email</td>
                                                                <td>:</td>
                                                                <td>{{ $data->email }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jenis Kelamin</td>
                                                                <td>:</td>
                                                                <td>
                                                                    @if ($data->jenis_kelamin != null)
                                                                        {{ $data->jenis_kelamin }}
                                                                    @else
                                                                        <label for="" class="text-danger">Belum
                                                                            Diisi</label>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>NISN</td>
                                                                <td>:</td>
                                                                <td>
                                                                    @if ($data->nisn != null)
                                                                        {{ $data->nisn }}
                                                                    @else
                                                                        <label for="" class="text-danger">Belum
                                                                            Diisi</label>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>NIK</td>
                                                                <td>:</td>
                                                                <td>
                                                                    @if ($data->nik != null)
                                                                        {{ $data->nik }}
                                                                    @else
                                                                        <label for="" class="text-danger">Belum
                                                                            Diisi</label>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Nomor KK</td>
                                                                <td>:</td>
                                                                <td>
                                                                    @if ($data->no_kk != null)
                                                                        {{ $data->no_kk }}
                                                                    @else
                                                                        <label for="" class="text-danger">Belum
                                                                            Diisi</label>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tempat Lahir</td>
                                                                <td>:</td>
                                                                <td>
                                                                    @if ($data->tempat_lahir != null)
                                                                        {{ $data->tempat_lahir }}
                                                                    @else
                                                                        <label for="" class="text-danger">Belum
                                                                            Diisi</label>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tanggal lahir</td>
                                                                <td>:</td>
                                                                <td>
                                                                    @if ($data->tanggal_lahir != null)
                                                                        {{ $data->tanggal_lahir }}
                                                                    @else
                                                                        <label for="" class="text-danger">Belum
                                                                            Diisi</label>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tanggal lahir</td>
                                                                <td>:</td>
                                                                <td>
                                                                    @if ($data->alamat_lengkap != null)
                                                                        {{ $data->alamat_lengkap }}
                                                                    @else
                                                                        <label for="" class="text-danger">Belum
                                                                            Diisi</label>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Password</td>
                                                                <td>:</td>
                                                                <td>
                                                                    @if ($data->first_password != null)
                                                                        {{ $data->first_password }}
                                                                    @else
                                                                        <label for="" class="text-danger">Belum
                                                                            Diisi</label>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                            
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light"
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div> <!-- end row-->
@endsection
