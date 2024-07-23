<!-- admin.tambah-laporan.blade.php -->
@extends('admin.layouts.app')

@section('content')
    <div class="container my-3">
        <div class="card">
            <h5 class="card-header">Input Siswa</h5>
            <div class="card-body">
                <h5 class="card-title">Form Input Kategori Pelanggaran</h5>

                <form action="{{ route('createlaporan') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="nama_lengkap">Nama Siswa</label>
                        <select name="reported_student_id" required id="category_id" class="form-control">
                            <!-- Option dari kategori pelanggaran -->
                            @foreach ($student as $student)
                                <option value="{{ $student->id }}">{{ $student->nama_lengkap }} - {{ $student->nisn }}
                                </option>
                            @endforeach
                        </select>
                        @error('reported_student_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="category_id">Kategori Pelanggaran:</label>
                        <select name="category_id" required id="category_id" class="form-control">
                            <!-- Option dari kategori pelanggaran -->
                            @foreach ($category as $category)
                                <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('category_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <div class="form-group">
                        <label for="description">Deskripsi:</label>
                        <textarea name="description" required id="description" class="form-control" rows="4">{{ old('description') }}</textarea>
                    </div>
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <div class="form-group">
                        <label for="evidence">Bukti (Opsional):</label>
                        <input type="file" required name="evidence" id="evidence" class="form-control" value="{{ old('evidence') }}">
                    </div>
                    @error('evidence')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <!-- Tambahkan form fields lain sesuai kebutuhan -->

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
