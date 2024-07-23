@extends('layouts.userlayout')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="header-title">Basic Data Table</h4>
                    <a href="{{ route('historyLaporan') }}" class="btn btn-outline-primary">History Laporan</a>
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
                    <table id="dataTables" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Siswa</th>
                                <th>Pelapor</th>
                                <th>Status Laporan</th>
                                <th>Tanggal Laporan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $item->student->nama_lengkap }}</td>
                                    <td>{{ $item->teacher->nama_lengkap }}</td>
                                    <td>
                                        @if ($item->status_report === 'pending')
                                            <span class="badge bg-primary">Pending</span>
                                        @elseif ($item->status_report === 'approved')
                                            <span class="badge bg-success">Approved</span>
                                        @elseif ($item->status_report === 'rejected')
                                            <span class="badge bg-danger">Rejected</span>
                                        @else
                                            <span class="badge bg-secondary">Unknown</span>
                                        @endif

                                    </td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        <a href="{{ route('detailLaporan.teacher', ['id' => $item->id]) }}"
                                            class="btn btn-info btn-sm"> Verifikasi </a>
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal{{ $item->id }}">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                        {{-- Modal --}}
                                        <div id="deleteModal{{ $item->id }}" class="modal fade" tabindex="-1"
                                            role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content modal-filled bg-danger">
                                                    <div class="modal-body p-4">
                                                        <div class="text-center">
                                                            <i class="ri-close-circle-line h1"></i>
                                                            <h4 class="mt-2">Confirm Delete!</h4>
                                                            <p class="mt-3">Anda Yakin Ingin Menghapusnya ?</p>
                                                            <a href="{{ route('deleteLaporan', ['id' => $item->id]) }}"
                                                                class="btn btn-light my-2">Delete</a>
                                                        </div>
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
