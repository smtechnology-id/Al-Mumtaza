@extends('layouts.userlayout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3" style="">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ asset('images/students-images/' . $studentDetail->photo) }}" class="card-img"
                                alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Detail Santri</h5>
                                <table class="table">
                                    <tr>
                                        <td>Nama</td>
                                        <td>:</td>
                                        <td>{{ $studentDetail->nama_lengkap }} </td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td>:</td>
                                        <td>{{ $studentDetail->jenis_kelamin }} </td>
                                    </tr>
                                    <tr>
                                        <td>NIS / NISN</td>
                                        <td>:</td>
                                        <td>{{ $studentDetail->nisn }} </td>
                                    </tr>
                                    <tr>
                                        <td>Ttl</td>
                                        <td>:</td>
                                        <td>{{ $studentDetail->tempat_lahir }}, {{ $studentDetail->tanggal_lahir }}</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat Lengkap</td>
                                        <td>:</td>
                                        <td>{{ $studentDetail->alamat_lengkap }} </td>
                                    </tr>

                                </table>
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
                        @foreach ($violationHistory as $data)
                            <div class="row g-0">
                                <div class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                    <div class="w-100 d-flex sh-1"></div>
                                    <div
                                        class="rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                                        <div class="bg-gradient-light sw-1 sh-1 rounded-xl position-relative"></div>
                                    </div>
                                    <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                        <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                    </div>
                                </div>
                                <div class="col mb-4">
                                    <div class="h-100">
                                        <div class="d-flex flex-column justify-content-start">
                                            <div class="d-flex flex-column">
                                                <a href="#"
                                                    class="heading stretched-link">{{ $data->category->nama_kategori }}</a>
                                                <div class="text-alternate">{{ $data->created_at }}</div>
                                                <div class="text-muted mt-1">
                                                    {{ $data->description }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- Timeline End -->

            </div>
        </div>

    </div>
@endsection
