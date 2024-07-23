@extends('admin.layouts.app')

@section('content')
    <div class="container my-5">
        <div class="card">
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <table class="table">
                    <thead>
                        <tr>
                            <td>Nama Guru</td>
                            <td>Email</td>
                            <td>Status</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teacher as $data)
                            <tr>
                                <td>{{ $data->nama_lengkap }}</td>
                                <td>{{ $data->email_aktif }}</td>
                                <!-- Di dalam blade template -->
                                <td>
                                    @if ($data->teacher_admin === 'have access')
                                        <span class="text-success">Akses Diberikan</span>
                                    @else
                                        <span class="text-danger">Tidak Memiliki Akses</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($data->teacher_admin === 'have access')
                                        <a href="{{ route('removeAccessTeacherAdmin', ['id' => $data->id_user]) }}" class="btn btn-sm btn-danger">Hapus Akses</a>
                                    @else
                                        <a href="{{ route('addAccessTeacherAdmin', ['id' => $data->id_user]) }}"
                                            class="btn btn-sm btn-success">Beri Akses</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
