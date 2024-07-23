@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Mumtaza</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard Admin</a></li>
                        <li class="breadcrumb-item active">Pelanggaran</li>
                    </ol>
                </div>
                <h4 class="page-title">Kategori pelanggaran</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="header-title">Basic Data Table</h4>
                    <a href="{{ route('kategoriInput') }}" class="btn btn-primary"><i class="bi bi-plus-circle-fill"></i>
                        Tambah Kategori</a>

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
                                <th>Nama Kategori</th>
                                <th>Deskripsi</th>
                                <th>Bobot pengurangan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($data as $data)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $data->nama_kategori }}</td>
                                    <td>{{ $data->deskripsi }}</td>
                                    <td>{{ $data->bobot_point }}</td>
                                    <td>
                                        <button  type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $data->id }}"><i class="bi bi-trash"></i></button>



                                        {{-- modal --}}
                                        <div id="deleteModal{{ $data->id }}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content modal-filled bg-danger">
                                                    <div class="modal-body p-4">
                                                        <div class="text-center">
                                                            <i class="ri-close-circle-line h1"></i>
                                                            <h4 class="mt-2">Confirm Delete!</h4>
                                                            <p class="mt-3">Anda Yakin Ingin Menghapusnya ?</p>
                                                            <a href="{{ route('deleteCategory', ['id' => $data->id]) }}" class="btn btn-light my-2">Delete</a>

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
