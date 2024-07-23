@extends('layouts.userLayout')

@section('content')
    <div class="content">
        <div class="container row">
            <div class="col-md-6">
                <div class="card">

                    <div class="card-header">
                        Detail Laporan Pelanggaran Siswa
                    </div>
                    <div class="card-body">
                        <div class="panel">
                            <div class="timeline-box">
                                <span class="arrow"></span>
                                <span class="timeline-icon"><i class="ri-record-circle-line"></i></span>
                                <h4 class="fs-12 fw-semibold ">Laporan {{ $detail->student->nama_lengkap }} - <span
                                        class="text-primary"> {{ $detail->status_report }}</span></h4>
                                <p class="timeline-date text-muted"><small>{{ $detail->created_at }}</small></p>
                            </div>
                        </div>
                        <table class="table">
                            <tr>
                                <td>Pelapor</td>
                                <td>:</td>
                                <td>{{ $detail->teacher->nama_lengkap }}</td>
                            </tr>
                            <tr>
                                <td>Deskripsi</td>
                                <td>:</td>
                                <td>{{ $detail->description }}</td>
                            </tr>
                            <tr>
                                <td>Kategori pelanggaran</td>
                                <td>:</td>
                                <td>{{ $detail->category->nama_kategori }}</td>
                            </tr>
                            <tr>
                                <td>Point Dikurangi</td>
                                <td>:</td>
                                <td> <span class="badge bg-danger"> -{{ $detail->point_deduction }}</span></td>
                            </tr>

                        </table>
                        <p></p>
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if ($detail->status_report == 'pending')
                            <a href="{{ route('changeStatus.teacher', ['id' => $detail->id, 'status' => 'approved']) }}"
                                class="btn btn-primary btn-sm" btn-sm>Setujui</a>
                            <a href="{{ route('changeStatus.teacher', ['id' => $detail->id, 'status' => 'rejected']) }}"
                                class="btn btn-danger btn-sm" btn-sm>Tolak Laporan</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Bukti laporan
                    </div>
                    <div class="card-body">
                        <img src="{{ asset('images/violations-images/' . $detail->photo) }}" class="img rounded"
                            style="max-width: 300px" alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="timeline timeline-left">
                                <article class="timeline-item alt">
                                    <div class="text-start">
                                        <div class="time-show first">
                                            <p class="text-primary w-lg">Riwayat Pelanggaran Siswa</p>
                                        </div>
                                    </div>
                                </article>
                                @foreach ($laporan as $data)
                                    <article class="timeline-item">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="timeline-box">
                                                    <span class="arrow"></span>
                                                    <span class="timeline-icon"><i class="ri-record-circle-line"></i></span>
                                                    <h4 class="fs-16 fw-semibold ">
                                                        {{ $data->category->nama_kategori }} --
                                                        @if ($data->status_report === 'pending')
                                                            <span class="badge bg-primary">Pending</span>
                                                        @elseif ($data->status_report === 'approved')
                                                            <span class="badge bg-success">Approved</span>
                                                        @elseif ($data->status_report === 'rejected')
                                                            <span class="badge bg-danger">Rejected</span>
                                                        @else
                                                            <span class="badge bg-secondary">Unknown</span>
                                                        @endif
                                                    </h4>
                                                    <p class="timeline-date text-muted"><small>08:25 am</small></p>
                                                    <p>{{ $data->description }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                @endforeach
                            </div>
                            <!-- end timeline -->
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

        </div> <!-- container -->

    </div> <!-- content -->
@endsection
