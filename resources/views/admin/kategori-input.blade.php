@extends('admin.layouts.app')

@section('content')
    <div class="container my-3">
        <div class="card">
            <h5 class="card-header">Input Siswa</h5>
            <div class="card-body">
                <h5 class="card-title">Form Input Kategori Pelanggaran</h5>
                <form action="{{ route('categoryPost') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row justify-content-start">
                        <div class="col-md-8">
                            <div class="form-group my-3">
                                <label for="nama_kategori">Nama Kategori <span style="color: red">*</span> </label>
                                <input type="text" required class="form-control" name="nama_kategori" id="nama_kategori" placeholder="Nama Kategori" value="{{ old('nama_kategori') }}">
                                @error('nama_kategori')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group my-3">
                                <label for="deskripsi"> Deskripsi <span style="color: red">*</span> </label>
                                <textarea name="deskripsi" required id="deskripsi" cols="30" rows="3" class="form-control">{{ old('deskripsi') }}</textarea>
                                @error('deskripsi')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group my-3">
                                <label for="bobot_point">Bobot Point <span style="color: red">*</span> </label>
                                <input type="number" required class="form-control" name="bobot_point" id="bobot_point" placeholder="Ex: 10" value="{{ old('bobot_point') }}">
                                @error('bobot_point')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
@endsection
