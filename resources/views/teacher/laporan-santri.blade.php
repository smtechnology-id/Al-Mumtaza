@extends('layouts.userlayout')

@section('content')
    <div class="container">
        <!-- Timeline Start -->
        <h2 class="small-title">Laporan Anda</h2>
        <div class="card mb-5">
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
                @foreach ($laporan as $data)
                    <div class="container row">
                        <div class="col-md-8">
                            <div class="row g-0">
                                <div
                                    class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                    <div class="w-100 d-flex sh-1"></div>
                                    <div
                                        class="rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                                        <div class="bg-gradient-light sw-1 sh-1 rounded-xl position-relative"></div>
                                    </div>
                                    <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                        <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                    </div>
                                </div>
                                <div class="col mb-4 row justify-content-center">
                                    <div class="h-100">
                                        <div class="d-flex flex-column justify-content-start">
                                            <div class="d-flex flex-column">
                                                <p class="heading">{{ $data->student->nama_lengkap }}</p>
                                                <p>Status Laporan :
                                                    @if ($data->status_report === 'pending')
                                                        <label for="" class="text-info"> Pending</label>
                                                    @elseif ($data->status_report === 'approved')
                                                        <label for="" class="text-success">Disetujui</label>
                                                    @else
                                                        <label for="" class="text-danger">Ditolak</label>
                                                    @endif
                                                </p>
                                                <div class="text-alternate">{{ $data->created_at }}</div>
                                                <div class="text-muted mt-1">
                                                    {{ $data->description }}
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        @if ($data->status_report === 'pending')
                                            <a href="{{ route('deletelaporan', ['id' => $data->id]) }}"
                                                class="btn btn-outline-danger btn-sm">Batalkan Laporan</a>
                                        @elseif ($data->status_report === 'approved')
                                            <label for="" class="text-success">Laporan Telah Disetujui Admin</label>
                                        @else
                                        <a href="{{ route('deletelaporan', ['id' => $data->id]) }}"
                                            class="btn btn-outline-danger btn-sm">Hapus Laporan</a>
                                        @endif


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img class="rounded mb-5" src="{{ asset('images/violations-images/' . $data->photo) }}"
                                style="width: 250px" alt="">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Timeline End -->

    </div>
@endsection
