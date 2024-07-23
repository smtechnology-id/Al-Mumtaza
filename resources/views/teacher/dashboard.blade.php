@extends('layouts.userLayout')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-title-container">
                    <h1 class="mb-0 pb-0 display-4" id="title">Teacher Dashboard</h1>
                    <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                        <ul class="breadcrumb pt-0">
                            <li class="breadcrumb-item"><a href="{{ route('teacherIndex') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="profile">Profile</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-6">
                <!-- Stats Start -->


                <div class="mb-5">
                    <div class="container">
                        <div class="card mb-3 p-3">
                            <div class="row no-gutters">
                                <div class="col-md-4 row justify-content-center align-items-center" >
                                    @if (Auth::user()->level === 'guru' && $profile->photo)
                                        <img class="profile rounded" style="" alt="profile"
                                            src="/images/teachers-images/{{ $profile->photo }}" />
                                    @elseif ($profile->photo)
                                        <img class="profile rounded" alt="profile"
                                            src="/images/students-images/{{ $profile->photo }}" />
                                    @else
                                        <p>Foto Profil tidak tersedia</p>
                                    @endif
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ Auth::user()->name }}</h5>
                                        <table class="table">
                                            <tr>
                                                <td>Email</td>
                                                <td>:</td>
                                                <td>{{ $profile->email_aktif }}</td>
                                            </tr>
                                            <tr>
                                                <td>Status</td>
                                                <td>:</td>
                                                <td>{{ Auth::user()->level }}</td>
                                            </tr>
                                            <tr>
                                                <td>Jenis Kelamin</td>
                                                <td>:</td>
                                                <td>{{ $profile->jenis_kelamin }}</td>
                                            </tr>
                                            <tr>
                                                <td>NIK</td>
                                                <td>:</td>
                                                <td>{{ $profile->nik }}</td>
                                            </tr>
                                            <tr>
                                                <td>NPWP</td>
                                                <td>:</td>
                                                <td>{{ $profile->npwp }}</td>
                                            </tr>
                                            <tr>
                                                <td>TTL</td>
                                                <td>:</td>
                                                <td>{{ $profile->tempat_lahir }},{{ $profile->tanggal_lahir }}</td>
                                            </tr>
                                            <tr>
                                                <td>NPWP</td>
                                                <td>:</td>
                                                <td>{{ $profile->npwp }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Stats End -->
            </div>

            <!-- Products Start -->
            <div class="col-12 col-lg-6 mb-5">
                <div class="d-flex justify-content-between">
                    <h2 class="small-title">Rank Poin Siswa</h2>
                    <button class="btn btn-icon btn-icon-end btn-xs btn-background-alternate p-0 text-small" type="button">
                        <span class="align-bottom">View More</span>
                        <i data-acorn-icon="chevron-right" class="align-middle" data-acorn-size="12"></i>
                    </button>
                </div>
                <div class="scroll-out">
                    <div class="scroll-by-count" data-count="8">
                        @foreach ($dataPoin as $data)
                            <div class="card mb-2 sh-10 sh-md-8">
                                <div class="card-body pt-0 pb-0 h-100">
                                    <div class="row g-0 h-100 align-content-center">
                                        <div class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                                            <a href="#"
                                                class="body-link text-truncate">{{ $data->user->name }}</a>
                                        </div>

                                        <div
                                            class="col-4 col-md-3 d-flex align-items-center text-medium text-success justify-content-center">
                                            <span class="text-medium"></span>
                                        </div>
                                        <div
                                            class="col-4 col-md-2 d-flex align-items-center justify-content-end text-muted text-medium">
                                            <span>{{ $data->total_poin }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Products End -->
        </div>
    </div>
@endsection
