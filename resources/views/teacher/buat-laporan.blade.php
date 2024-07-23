@extends('layouts.userLayout')


@section('content')
    <div class="container row">
        <div class="col-6">
            <div class="card">
                <h5 class="card-header">Laporan Santri</h5>
                <div class="card-body">
                    <h5 class="card-title">Form Pembuatan laporan Pelanggaran Santri</h5>
                    <br>
                    <form action="{{ route('storeViolationReport') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="student_id" value="{{ $student->id_user }}">
                        <div class="form-group">
                            <label for="inputGroupSelect01">Kategori Pelanggaran</label>
                            <div class="input-group mb-3">
                                <select class="form-control" required name="category_id" id="inputGroupSelect01">
                                    <option disabled>Pilih Kategori</option>
                                    @foreach ($category as $cat)
                                        <option value="{{ $cat->id }}"
                                            @if (old('category_id') == $cat->id) selected @endif>
                                            {{ $cat->nama_kategori }} (-{{ $cat->bobot_point }})
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi" required id="deskripsi" cols="30" rows="3" class="form-control">{{ old('deskripsi') }}</textarea>
                            @error('deskripsi')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="photo">Foto</label>
                            <input type="file" required name="photo" id="photo" class="form-control"
                                value="{{ old('photo') }}">
                            @error('photo')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <h5 class="card-header">Laporan Santri</h5>
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
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
