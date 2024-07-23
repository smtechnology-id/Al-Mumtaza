@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Mumtaza</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard Admin</a></li>
                        <li class="breadcrumb-item active">Set Point</li>
                    </ol>
                </div>
                <h4 class="page-title">Set Point Pelanggaran Santri</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
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
                    <div class="card text-center">
                        <div class="card-header">
                            Set Point Siswa / Santri
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $data->set_point }}</h5>
                            <p class="card-text">Setiap Siswa Baru yang Didaftarkan Akan Mendapatkan Nilai Point Diatas</p>
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                data-bs-target="#bs-example-modal-sm">Update Set Point</button>

                        </div>
                    </div>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div> <!-- end row-->

    <div class="modal fade" id="bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="mySmallModalLabel">Small modal</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('updateSetPoint') }}" method="post" >
                        @csrf
                        <input type="number" required name="set_point" value="{{ $data->set_point }}" class="form-control">
                        <br>
                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
